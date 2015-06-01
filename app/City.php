<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $table = 'city';
	public static function getCities(){
		$obj = City::get();

		return $obj;
	}
	

}
