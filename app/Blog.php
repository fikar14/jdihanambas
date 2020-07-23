<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'title', 'blog', 'user_id', 'cover'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function blogcategories(){
		return $this->belongsTo('App\BlogCategory', 'category_id');
	}
}
