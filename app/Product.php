<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','Kode','kategori_id','nama_product','bahan','ukuran','warna','cover','cover1','cover2','views','harga'];

public function kategori(){
    	return $this->belongsTo('App\kategori');
    }         

   

}



