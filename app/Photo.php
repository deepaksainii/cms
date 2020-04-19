<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/images/';
    protected $fillable = ['file'];
    
    public function getFileattribute($photo){
    	return $this->uploads.$photo;

    }
}
