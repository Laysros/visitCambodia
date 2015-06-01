<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model{

	//
	protected $table = 'place';

	public static function getHome(){
		$obj = DataModel::join('picture', 'place.id', '=', 'picture.place_id')
					->select ('place.*', 'picture.name as url', 'picture.id')
					->groupBy('place.id')
					->take(2)->get();

		return $obj;
	}
	public static function getDetail($name){
		$place = DataModel::join('picture', 'place.id', '=', 'picture.place_id')
					->where('place.name', '=', $name)
					->select ('place.*', 'picture.name as url', 'picture.id')
					->get();

		$tags = DataModel::join('tag', 'tag.place_id', '=', 'place.id')
				->where('place.name', '=', $name)
				->select('tag.name')
				->get();

		return $place;
	}
	public static function getPlaceByCity($name){
		$obj = DataModel::join('city', 'city.id', '=', 'place.city_id')
					->where('city.name', '=', $name)
					->select ('place.*', 'city.name as city', 'city.name as url')
					->get();
		return $obj;
	}
	public static function getPopularPlaces(){
		$obj = DataModel::join('picture', 'picture.place_id', '=', 'place.id')
				->groupBy('place.name')
				->orderBy('count_view', 'DESC')
				->select('place.*', 'picture.name as url')
				->get();

		

		return $obj;
	}
	public static function getTags($name){
		

		return $obj;
	}

}
