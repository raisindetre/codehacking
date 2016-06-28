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

/**
 * Return user associated with post
 * @return type
 */
    public function user(){
    	return $this->belongsTo('App\User');
    }

    /**
     * Retrieve photo associated with user.     *
     * @return \App\Photo
     */    
    public function photo(){
        // Not "hasOne" which would try and match for a post_id column in the "photos" table
    	return $this->belongsTo('App\Photo');
    }


    public function category(){
    	return $this->belongsTo('App\Category');
    }    
    
}
