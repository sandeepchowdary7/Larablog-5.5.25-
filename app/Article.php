<?php

namespace App;

use App\Comment;

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

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
