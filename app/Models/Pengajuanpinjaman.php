<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pengajuanpinjaman extends Sximo  {
	
	protected $table = 'tb_pengajuan';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT 
tb_pengajuan.*,
FORMAT(tb_pengajuan.jumlah_pinjaman,0) as total_pinjaman,
tb_karyawan.nama_karawan
 FROM tb_pengajuan 
left join tb_karyawan on tb_pengajuan.id_karyawan = tb_karyawan.id ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_pengajuan.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
