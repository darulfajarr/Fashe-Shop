<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $fillable = ['id','cover','judul','isi','view','tanggal','kategori_id',''];

    public function kategori(){
    	return $this->belongsTo('App\kategori_blog');
    }   

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
