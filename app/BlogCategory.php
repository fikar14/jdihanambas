<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
	protected $table = 'blogcategories';

	protected $fillable = [
        'name', 'created_by', 'cover'
    ];

	public function user(){
        return $this->belongsTo('App\User');
    }
	
    public function blogs(){
		return $this->hasMany('App\Blog', '');
	}
}
