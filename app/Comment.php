<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = TRUE;

	protected $table = 'comments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

		'body',
		'article_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
}
