<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
	protected $uploads = "/images/";

    protected $fillable = [
    	'file'
    ];

    /* 
    	Accessor method - any request for $photo->file will pass through it.
		So we concatenate the path to the images in here.
	*/

    public function getFileAttribute($photo){
    	
        return $this->uploads . $photo;
    }
}
