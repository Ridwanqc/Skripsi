<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class hasilprediksi extends Sximo  {
	
	protected $table = 'tb_pengajuan';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT 
tb_pengajuan.*,
tb_karyawan.nama_karawan,
tb_laporan.angsuran_berjalan,
FORMAT(tb_laporan.angsuran_bulanan, 0) as angsuran_per_bulan,
FORMAT(tb_pengajuan .jumlah_pinjaman, 0) as total_pinjaman,
tb_laporan.status
 FROM tb_pengajuan 
left join tb_karyawan on tb_pengajuan.id_karyawan = tb_karyawan.id
left join tb_laporan on tb_pengajuan.id = tb_laporan.id_pengajuan ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_pengajuan.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
