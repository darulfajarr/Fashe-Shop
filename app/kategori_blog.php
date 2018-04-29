<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_blog extends Model
{
    protected $fillable = ['id','nama_kategori'];
 	 public function blogs(){
    	return $this->hasMany('App\blogs');
    }

     public function getRouteKeyName()
    {
    	return 'slug';
    }
}
