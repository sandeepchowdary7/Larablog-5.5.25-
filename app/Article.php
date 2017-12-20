<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   public $timestamps = TRUE;
	protected $table = 'articles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'body'
	];
}
