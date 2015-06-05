<?php namespace App\Http\Controllers;


class PagesController extends Controller {


	public function contact()
	{
		return view('includes.contact');
	}
	
	
	public function city1()
	{
		return view('includes.city1');
	}
	
	
	public function placesOfCity()
	{
		return view('includes.placesOfCity');
	}
}
