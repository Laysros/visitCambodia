<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model {

	protected $table = 'aboutUs';

	public static function getContactUs(){
		return ContactModel::orderBy('id', 'DESC')
		->take(1)->skip(0)->get();
	}


}

