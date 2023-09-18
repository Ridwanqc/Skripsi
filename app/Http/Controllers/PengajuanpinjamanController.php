<?php namespace App\Http\Controllers;

use App\Models\Pengajuanpinjaman;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 
use DB;
use DateTime;



class PengajuanpinjamanController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'pengajuanpinjaman';
	static $per_page	= '50';

	public function __construct()
	{		
		parent::__construct();
		$this->model = new Pengajuanpinjaman();	
		
		$this->info = $this->model->makeInfo( $this->module);	
		$this->data = array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'pengajuanpinjaman',
			'return'	=> self::returnUrl()
			
		);
		
	}

	public function index( Request $request )
	{
		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('status', 'error')->with('message','You are not login');
		$this->grab( $request) ;
		if($this->access['is_view'] ==0) 
			return redirect('dashboard')->with('message', __('core.note_restric'))->with('status','error');				
		// Render into template
		return view( $this->module.'.index',$this->data);
	}	

	function create( Request $request , $id =0 ) 
	{
		$this->hook( $request  );
		if($this->access['is_add'] ==0) 
			return redirect('dashboard')->with('message', __('core.note_restric'))->with('status','error');

		$this->data['row'] = $this->model->getColumnTable( $this->info['table']); 
		
		$this->data['id'] = '';
		return view($this->module.'.form',$this->data);
	}
	function edit( Request $request , $id ) 
	{
		$this->hook( $request , $id );
		if(!isset($this->data['row']))
			return redirect($this->module)->with('message','Record Not Found !')->with('status','error');
		if($this->access['is_edit'] ==0 )
			return redirect('dashboard')->with('message',__('core.note_restric'))->with('status','error');
		$this->data['row'] = (array) $this->data['row'];
		
		$this->data['id'] = $id;
		return view($this->module.'.form',$this->data);
	}	
	function show( Request $request , $id ) 
	{
		/* Handle import , export and view */
		$task =$id ;
		switch( $task)
		{
			case 'search':
				return $this->getSearch();
				break;
			case 'lookup':
				return $this->getLookup($request );
				break;
			case 'comboselect':
				return $this->getComboselect( $request );
				break;
			case 'import':
				return $this->getImport( $request );
				break;
			case 'export':
				return $this->getExport( $request );
				break;
			default:
				$this->hook( $request , $id );
				if(!isset($this->data['row']))
					return redirect($this->module)->with('message','Record Not Found !')->with('status','error');

				if($this->access['is_detail'] ==0) 
					return redirect('dashboard')->with('message', __('core.note_restric'))->with('status','error');

				return view($this->module.'.view',$this->data);	
				break;		
		}
	}
	function store( Request $request  )
	{
		$task = $request->input('action_task');
		switch ($task)
		{
			default:
				$rules = $this->validateForm();
				$validator = Validator::make($request->all(), $rules);
				if ($validator->passes()) 
				{
					// logika
					$karyawan = DB::table('tb_karyawan')->select('*')->where('id',$request->id_karyawan)->first();
					$jumlah_pinjaman = $request->jumlah_pinjaman;
					$jangka_waktu = $request->angsuran;
					$usia = $karyawan->usia;
					$pendapatan_bulanan = $karyawan->gaji_pokok;
					$status_perkawinan = $karyawan->status_pernikahan;
					// hitung lama bekerja
					$d1 = new DateTime($karyawan->tgl_bergabung);
					$d2 = new DateTime(date("Y-m-d"));

					
					$d3 =$d2->diff($d1);
					$lama_bekerja = ($d3->y * 12) + $d3->m ; 
					$surat_jaminan = $request->jenis_jaminan;
					$status = '';
					

					$limit_pinjaman_tersedia = 0;
					if($surat_jaminan == 'kartu karyawan'){
						$limit_pinjaman_tersedia = $karyawan->gaji_pokok * 2;
					}elseif($surat_jaminan == 'BPKB Motor'){
						$limit_pinjaman_tersedia = 8000000;
					}elseif($surat_jaminan == 'BPKB Mobil'){
						$limit_pinjaman_tersedia = 30000000;
					}
					$pinjaman_sebelumnya = DB::table('tb_pengajuan')
											->select(DB::raw('sum(jumlah_pinjaman) as total_pinjaman'))
											->where('id_karyawan',$request->id_karyawan)
											->whereRaw('status = "" OR status IS NULL OR status ="Belum Lunas"')
											->pluck('total_pinjaman')
											->first();
					$status_pinjaman = '';
					if(isset($pinjaman_sebelumnya)){
						$status_pinjaman ='Ya';
					}else{
						$status_pinjaman ='Tidak';
					}
					$persentase_pinjaman_sebelumnya = ($pinjaman_sebelumnya / $jumlah_pinjaman) * 100;
					
					// cek data set
					$dataset = DB::table('tb_data_set')
								->select('status')
								->where('jumlah_pinjaman',$jumlah_pinjaman)
								->where('usia',$usia)
								->where('gaji_pokok',$pendapatan_bulanan)
								->where('status_perkawinan',$status_perkawinan)
								->where('lama_bekerja',$lama_bekerja)
								->where('jaminan',$surat_jaminan)
								->where('limit_pinjaman',$limit_pinjaman_tersedia)
								->where('jangka_waktu',$jangka_waktu)
								->pluck('status')
								->first();
					if(isset($dataset)){
						$status = $dataset;
					}else{
						if($jumlah_pinjaman <=1000000){
							$status = 'Tidak Disetujui';
						}else{
							if($usia <= 21){
								$status = 'Tidak Disetujui';
							}else{
								if($status_perkawinan == 'Belum Menikah'){
									$status = 'Tidak Disetujui';
								}else{
									if($lama_bekerja < 12){
										$status = 'Tidak Disetujui';
									}else{
										if($surat_jaminan == 'BPKB Motor' && $jumlah_pinjaman > 6000000 || $jumlah_pinjaman < 8000000 && $jangka_waktu <= 12){
											$status = 'Disetujui';
										}elseif($surat_jaminan == 'BPKB Mobil' && $jumlah_pinjaman > 20000000 || $jumlah_pinjaman < 30000000 && $jangka_waktu <= 18){
											$status = 'Disetujui';
										}else{
											if($surat_jaminan == 'kartu karyawan' && $jumlah_pinjaman <= $limit_pinjaman_tersedia){
												if($persentase_pinjaman_sebelumnya > 80){
													$status = 'Tidak Disetujui';
												}else{
													$status = 'Disetujui';
												}
											}else{
												$status = 'Tidak Disetujui';
											}
										}
									}
								}
							}
						}
						$angsuran_perbulan=0;
						if($status =='Disetujui'){
							$angsuran_perbulan = $jumlah_pinjaman / $jangka_waktu;
						}
						$isset = array(
							'jumlah_pinjaman' =>$jumlah_pinjaman,
							'usia' =>$usia,
							'gaji_pokok' =>$pendapatan_bulanan,
							'status_perkawinan' =>$status_perkawinan,
							'lama_bekerja' =>$lama_bekerja,
							'jaminan' =>$surat_jaminan,
							'limit_pinjaman' =>$limit_pinjaman_tersedia,
							'jangka_waktu' =>$jangka_waktu,
							'status' =>$status,
						);
						DB::table('tb_data_set')->insert($isset);

					}

					$data = $this->validatePost( $request );
					$id = $this->model->insertRow($data , $request->input( $this->info['key']));
					// insert laporan
					$isset2 = array(
						'id_pengajuan' =>$id,
						'angsuran_berjalan' => $status_pinjaman,
						'angsuran_bulanan' => $angsuran_perbulan,
						'status' =>$status,
					);
					DB::table('tb_laporan')->insert($isset2);
					
					/* Insert logs */
					$this->model->logs($request , $id);
					if($request->has('apply'))
						return redirect( $this->module .'/'.$id.'/edit?'. $this->returnUrl() )->with('message',__('core.note_success'))->with('status','success');

					return redirect( $this->module .'?'. $this->returnUrl() )->with('message',__('core.note_success'))->with('status','success');
				} 
				else {
					if( $request->input(  $this->info['key'] ) =='') {
						$url = $this->module.'/create?'. $this->returnUrl();
					} else {
						$url = $this->module .'/'.$id.'/edit?'. $this->returnUrl();
					}
					return redirect( $url )
							->with('message',__('core.note_error'))->with('status','error')
							->withErrors($validator)->withInput();
								

				}
				break;
			case 'public':
				return $this->store_public( $request );
				break;

			case 'delete':
				$result = $this->destroy( $request );
				return redirect($this->module.'?'.$this->returnUrl())->with($result);
				break;

			case 'import':
				return $this->PostImport( $request );
				break;

			case 'copy':
				$result = $this->copy( $request );
				return redirect($this->module.'?'.$this->returnUrl())->with($result);
				break;		
		}	
	
	}	

	public function destroy( $request)
	{
		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('status', 'error')->with('message','You are not login');

		$this->access = $this->model->validAccess($this->info['id'] , session('gid'));
		if($this->access['is_remove'] ==0) 
			return redirect('dashboard')
				->with('message', __('core.note_restric'))->with('status','error');
		// delete multipe rows 
		if(is_array($request->input('ids')))
		{
			$this->model->destroy($request->input('ids'));
			
			\SiteHelpers::auditTrail( $request , "ID : ".implode(",",$request->input('ids'))."  , Has Been Removed Successfull");
			// redirect
        	return ['message'=>__('core.note_success_delete'),'status'=>'success'];	
	
		} else {
			return ['message'=>__('No Item Deleted'),'status'=>'error'];				
		}

	}	
	
	public static function display(  )
	{
		$mode  = isset($_GET['view']) ? 'view' : 'default' ;
		$model  = new Pengajuanpinjaman();
		$info = $model::makeInfo('pengajuanpinjaman');
		$data = array(
			'pageTitle'	=> 	$info['title'],
			'pageNote'	=>  $info['note']			
		);	
		if($mode == 'view')
		{
			$id = $_GET['view'];
			$row = $model::getRow($id);
			if($row)
			{
				$data['row'] =  $row;
				$data['fields'] 		=  \SiteHelpers::fieldLang($info['config']['grid']);
				$data['id'] = $id;
				return view('pengajuanpinjaman.public.view',$data);			
			}			
		} 
		else {

			$page = isset($_GET['page']) ? $_GET['page'] : 1;
			$params = array(
				'page'		=> $page ,
				'limit'		=>  (isset($_GET['rows']) ? filter_var($_GET['rows'],FILTER_VALIDATE_INT) : 10 ) ,
				'sort'		=> $info['key'] ,
				'order'		=> 'asc',
				'params'	=> '',
				'global'	=> 1 
			);

			$result = $model::getRows( $params );
			$data['tableGrid'] 	= $info['config']['grid'];
			$data['rowData'] 	= $result['rows'];	

			$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
			$pagination = new Paginator($result['rows'], $result['total'], $params['limit']);	
			$pagination->setPath('');
			$data['i']			= ($page * $params['limit'])- $params['limit']; 
			$data['pagination'] = $pagination;
			return view('pengajuanpinjaman.public.index',$data);	
		}

	}
	function store_public( $request)
	{
		
		$rules = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost(  $request );		
			 $this->model->insertRow($data , $request->input('id'));
			return  Redirect::back()->with('message',__('core.note_success'))->with('status','success');
		} else {

			return  Redirect::back()->with('message',__('core.note_error'))->with('status','error')
			->withErrors($validator)->withInput();

		}	
	
	}
}
