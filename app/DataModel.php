<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model{

	//
	protected $table = 'place';
	public $timestamps = false;

	public static function getHome(){
		$obj = DataModel::join('picture', 'place.id', '=', 'picture.place_id')
					->select ('place.*', 'picture.name as url', 'picture.id')
					->groupBy('place.id')
					->get();

		return $obj;
	}
	public static function getDetail($name){
		$place = DataModel::join('picture', 'place.id', '=', 'picture.place_id')
					->where('place.name', '=', $name)
					->select ('place.*', 'picture.name as url', 'picture.id')
					->get();

		/*$thisPlace = $place->take(1)['name'];*/

		$tmp = new DataModel();
		$tmp->where('name', '=', $name)->increment('count_view', 1);

		$tags = DataModel::join('tag', 'tag.place_id', '=', 'place.id')
				->where('place.name', '=', $name)
				->select('tag.name')
				->get();

		$province = DataModel::join('city', 'city.id' , '=', 'place.city_id')
				->where('place.name', '=', $name)
				->select('city.name as name')
				->get();
		$vCity;
		foreach ($province as $city) {
			$vCity=$city['name'];
		}
		
		$related = DataModel::join('city', 'city.id' , '=', 'place.city_id')
				->join('picture', 'picture.place_id' , '=', 'place.id')
				->where('city.name', '=', $vCity)
				->whereNotIn('place.name', [$name])
				->select('place.name', 'place.description', 'picture.name as url')
				->groupBy('place.id')
				->get();
		
		if (sizeof($related)==0) {
			$related = DataModel::join('tag', 'tag.place_id' , '=', 'place.id')
				->join('picture', 'picture.place_id' , '=', 'place.id')
				->where('tag.name', '=', $tags[0]['name'])
				->whereNotIn('place.name', [$name])
				->select('place.name', 'place.description', 'picture.name as url')
				->groupBy('place.id')
				->get();
			
		}

		$result = [];
		$result['places'] = $place;
		$result['tags']=$tags;
		$result['related']=$related;
		return $result;
	}
	public static function getPlaceByCity($name){
		$place = DataModel::join('city', 'city.id', '=', 'place.city_id')
					->join('picture', 'picture.place_id', '=', 'place.id')
					->where('city.name', '=', $name)
					->select ('place.*', 'city.name as city', 'city.name as url', 'picture.name as image')
					->groupBy('place.id')
					->get();
		$tags = DataModel::join('tag', 'tag.place_id', '=', 'place.id')
				->select('place.name','tag.name as tag')
				->get();
		$result = [];
		$result['places']=$place;
		$result['tags'] = $tags;
		return $result;
	}
	public static function getPlaceByTag($name){
		$places = DataModel::join('picture', 'place.id', '=', 'picture.place_id')
					->join('tag', 'place.id' , '=', 'tag.place_id')
					->where('tag.name', '=', $name)
					->select ('place.*', 'picture.name as url', 'tag.name as tag')
					->groupBy('place.id')
					->get();

		$tags = DataModel::join('tag', 'tag.place_id', '=', 'place.id')
				->select('place.name','tag.name as tag')
				->get();

		$result = [];
		$result['places']=$places;
		$result['tags'] = $tags;
		return $result;
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
