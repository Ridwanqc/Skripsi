<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class finance extends Sximo  {
	
	protected $table = 'tb_finance';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_finance.* FROM tb_finance  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_finance.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
