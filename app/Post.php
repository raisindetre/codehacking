<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $fillable = [
    	'category_id',
    	'photo_id',
    	'user_id',    	
    	'title',    	
    	'body',      	
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function photo(){
    	return $this->hasOne('App\Photo');
    }

    public function category(){
    	return $this->hasOne('App\Category');
    }    
}
