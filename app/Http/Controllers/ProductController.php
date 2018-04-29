<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Product;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request, Builder $htmlBuilder)
    {
        $Product = Product::orderBy('created_at','DESC')->get();
        return view('Product.index', compact('Product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'cover'=> 'image|max:2048',
            'nama_product'=> 'required|unique:products,nama_product',
            'Kode'=> 'required|unique:products,Kode'
            ]);
        $Product = Product::create($request->except('cover','cover1','cover2'));
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img1';
            $uploaded_cover->move($destinationPath, $filename);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover = $filename;
        }

        if ($request->hasFile('cover1')) {
// Mengambil file yang diupload
            $uploaded_cover1 = $request->file('cover1');
// mengambil extension file
            $extension1 = $uploaded_cover1->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename1 = md5(time()) . '.' . $extension1;
// menyimpan cover ke folder public/img
            $destinationPath1 = public_path() . DIRECTORY_SEPARATOR . 'img/img2';
            $uploaded_cover1->move($destinationPath1, $filename1);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover1 = $filename1;
        }

        if ($request->hasFile('cover2')) {
// Mengambil file yang diupload
            $uploaded_cover2 = $request->file('cover2');
// mengambil extension file
            $extension2 = $uploaded_cover2->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename2 = md5(time()) . '.' . $extension2;
// menyimpan cover ke folder public/img
            $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img/img3';
            $uploaded_cover2->move($destinationPath2, $filename2);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover2 = $filename2;
            
        }
        $Product->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $Product->nama_product"
            ]);
        return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Product::find($id);
        return view('Product.show')->with(compact('Product','Lainnya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $Product = Product::find($id);
           $Lainnya = Lainnya::all();
        return view('Product.edit')->with(compact('Product','Lainnya'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cover'=> 'image|max:2048']);
        $Product = Product::find($id);
        $Product->update($request->all());
        if ($request->hasFile('cover')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img1';
            $uploaded_cover->move($destinationPath, $filename);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover = $filename;
        }

        if ($request->hasFile('cover1')) {
// Mengambil file yang diupload
            $uploaded_cover1 = $request->file('cover1');
// mengambil extension file
            $extension1 = $uploaded_cover1->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename1 = md5(time()) . '.' . $extension1;
// menyimpan cover ke folder public/img
            $destinationPath1 = public_path() . DIRECTORY_SEPARATOR . 'img/img2';
            $uploaded_cover1->move($destinationPath1, $filename1);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover1 = $filename1;
        }

        if ($request->hasFile('cover2')) {
// Mengambil file yang diupload
            $uploaded_cover2 = $request->file('cover2');
// mengambil extension file
            $extension2 = $uploaded_cover2->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename2 = md5(time()) . '.' . $extension2;
// menyimpan cover ke folder public/img
            $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img/img3';
            $uploaded_cover2->move($destinationPath2, $filename2);
// mengisi field cover di Product dengan filename yang baru dibuat
            $Product->cover2 = $filename2;
            
        }
        // return $Product;
        $Product->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('Product.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product= Product::find($id);
        if(!Product::destroy($id))return redirect()->back();
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Product Berhasil Dihapus"
            ]);
        return redirect()->route('Product.index');
        }

}
            