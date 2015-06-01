<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model {

	protected $table = 'place';

	public static function getPlaces(){
		/*$places = Place::orderBy('id', 'DESC')->get();
		$result = [];
		foreach ($places as $row) {
			$row['pictures'] = Picture::orderBy('id', 'DESC')->where('place_id', '=', $row['id'])->get(); 
			array_push($result, $row);
		}
		return $result;*/
	}	$place = Place::

}
