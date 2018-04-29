<?php

namespace App\Http\Controllers;
use App\Product;
use App\kategori;
use App\blogs;
use App\kategori_blog;
use App\About;
use App\Home;
use App\Lainnya;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
         $Lainnya=Lainnya::all();     
         $Home = Home::OrderBy('created_at','DSC')->get();
         $blogs = blogs::OrderBy('created_at','DSC')->take(3)->get();
         $kategori = kategori::OrderBy('created_at','DSC')->get();
         $Product = Product::OrderBy('created_at','DSC')->take(8)->get();
         return view('Frontend.index')->with(compact('kategori','Product','blogs','Home','Lainnya'));
    }


       public function about()
    {
         $About = About::all();
         return view('Frontend.about')->with(compact('About'));
    }


    public function blog()
    {
         $Lainnya=Lainnya::all();
         $produk=Product::OrderBy('created_at','DSC')->take(5)->get();
         $blogs = blogs::OrderBy('created_at','DSC')->paginate(2);
         $kategori_blog = kategori_blog::OrderBy('nama_kategori','ASC')->get();
         return view('Frontend.blog')->with(compact('blogs','kategori_blog','produk','Lainnya'));
    }

    public function produk()
    {
         $Lainnya = Lainnya::all();
         $Product = Product::OrderBy('created_at','DSC')->paginate(6);
         $kategori = kategori::OrderBy('created_at','DSC')->get();
         return view('Frontend.product')->with(compact('Product','kategori','Lainnya'));
    }


        public function produkdetail($id)
    {

         $productdetail = Product::findOrFail($id);
         $productdetail->views=($productdetail->views + 1);
         $productdetail->save();
         $Lainnya = Lainnya::all();
         $Product = Product::OrderBy('created_at','DSC')->where('kategori_id','=',$productdetail->kategori_id)->get();
        
        return view('Frontend.product-detail')->with(compact('Product','productdetail','Lainnya'));
    }

    
    public function showperkategori(kategori $kategori)
       {
           $filtercategori = $kategori->product()->OrderBy('created_at','DSC')->paginate(6);
           $kategori = kategori::OrderBy('created_at','DSC')->get();
         $Lainnya = Lainnya::all();
           return view('Frontend.kategori')->with(compact('filtercategori','kategori','Lainnya')); 
       }

       public function showperkategori_blog($id)
       {
             $produk = Product::OrderBy('created_at','DSC')->take(5)->get();
           $filtercategori = blogs::OrderBy('created_at','DSC')->where('kategori_id',$id)->paginate(2);
            $kategori=kategori_blog::OrderBy('nama_kategori','ASC')->get();
         $Lainnya = Lainnya::all();
           return view('Frontend.kategori_blog')->with(compact('filtercategori','kategori','produk','Lainnya')); 
       }

       public function showblog($id)
   {
             $blog = blogs::findOrFail($id);
             $blog->view=($blog->view + 1);
             $blog->save();

             $produk = Product::OrderBy('created_at','DSC')->take(5)->get();
         
             $Lainnya = Lainnya::all();

            $blogs=blogs::OrderBy('created_at','DSC')->where('id',$id)->get();
            $kategori_blog=kategori_blog::OrderBy('nama_kategori','ASC')->get();
        return view('Frontend.showblog')->with(compact('blogs','kategori_blog','produk','Lainnya')); 
   }


   public function chat()
    {
       return view('welcome');
   }


}
