<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class payout extends Sximo  {
	
	protected $table = 'payout';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT payout.* FROM payout  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE payout.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
