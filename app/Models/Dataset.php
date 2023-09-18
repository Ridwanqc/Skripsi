<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dataset extends Sximo  {
	
	protected $table = 'tb_data_set';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT 
tb_data_set.*,
FORMAT(tb_data_set.jumlah_pinjaman,0) as jumlah_pinjaman,
FORMAT(tb_data_set.gaji_pokok,0) as gaji_pokok,
FORMAT(tb_data_set.limit_pinjaman,0) as limit_pinjaman
FROM tb_data_set ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_data_set.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
