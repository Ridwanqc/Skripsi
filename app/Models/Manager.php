<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class manager extends Sximo  {
	
	protected $table = 'tb_manger';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_manger.* FROM tb_manger  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_manger.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
