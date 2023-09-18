<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Sximo  {
	
	protected $table = 'tb_karyawan';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "   SELECT tb_karyawan.*,
		FORMAT(tb_karyawan.gaji_pokok, 0) as jumlah_gaji
		 FROM tb_karyawan  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_karyawan.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
