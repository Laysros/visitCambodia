<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\DataModel;
use App\Place;
use App\City;

class DataController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		$home = DataModel::getHome();
	 	return view('includes.index')->with('place', $home);
	}

	public function getDetail($name){
		$info = DataModel::getDetail($name);
	
	 	return view('includes.detail')->with('place', $info);
	}
	public function about()
	{
		
		return view('includes.about');
	}

	public function city()
	{
		$province = City::getCities();
		return view('includes.city')->with('city', $province);
	}
	public function getPlaceByCity($name)
	{
		$info = DataModel::getPlaceByCity($name);
		return view('includes.placesOfCity')->with('place', $info);
	}
	public function getPlacesByTag($name)
	{
		$info = DataModel::getPlaceByTag($name);
		return view('includes.tag')->with('place', $info);
	}
	public function popular()
	{
		$popular = DataModel::getPopularPlaces();
		return view('includes.popular')->with('place', $popular);
	}










	public function getPlaces(){
		$pl= DataModel::getHome();
		print_r("-----------------------------------------------");
		foreach ($pl as $value) {
			print_r($value['name']);
			print_r($value['url']);

		}
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
