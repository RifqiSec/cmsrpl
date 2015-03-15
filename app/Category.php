<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	 * Fillable row, so the db will check this before do an action
	 * @var array()
	 */
	protected $fillable = ['category_name','category_slug'];
}
