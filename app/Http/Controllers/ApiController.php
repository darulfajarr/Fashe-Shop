<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\artikel;
use App\discont;
use App\Home;
use App\kategori;
use App\Lainnya;
use App\Product;
use App\Store;

class ApiController extends Controller
{


    public function Profil()
	{
		return About::all();
	}

    public function Product()
	{
		$Product = Product::orderBy('created_at','ACS')->take(5)->get();
		return $Product;
	}

	    public function Home()
	{
		return Home::all();
	}

	    public function Detail()
	{
		return Store::all();
	}

	    public function Artikel()
	{
			$artikel = artikel::orderBy('created_at','ACS')->get();
		return $artikel;
	}

	  public function Lainnya()
	{
		return Lainnya::all();
	}

	  public function discont()
	{
		return discont::all();
	}
public function show($id)
   {
       $filtercategori = Product::where('kategori_id','=',$id)->get();
       return $filtercategori; 
   }


public function Kategori()
   {
       $categori = kategori::all();
       return $categori; 
   }

}
