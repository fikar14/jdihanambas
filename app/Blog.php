<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'title', 'blog', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
