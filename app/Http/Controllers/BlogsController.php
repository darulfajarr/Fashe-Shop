<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\blogs;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request, Builder $htmlBuilder)
    {
        $blogs = blogs::orderBy('created_at','DESC')->get();
    return view('blogs.index')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
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
           
            'judul'=> 'required|unique:blogs,judul',
            ]);
        $blogs = new blogs;
        $blogs->judul = $request->judul;
        $blogs->slug = str_slug ($request->judul,'-');
        $blogs->isi = $request->isi;
        $blogs->view = $request->view;
        $blogs->tanggal = $request->tanggal;
        $blogs->kategori_id = $request->kategori_id;
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img7';
            $uploaded_cover->move($destinationPath, $filename);
// mengisi field cover di blogs dengan filename yang baru dibuat
            $blogs->cover = $filename;
            $blogs->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $blogs->judul"
            ]);
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs=blogs::findOrfail($id);
        return view('blogs.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $blogs = blogs::find($id);
        return view('blogs.edit')->with(compact('blogs'));
    
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
        $blogs = blogs::find($id);
        $blogs->update($request->all());
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
// mengisi field cover di blogs dengan filename yang baru dibuat
            $blogs->cover = $filename;
        }
        $blogs->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
  
        return redirect()->route('blogs.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs= blogs::find($id);
        if(!blogs::destroy($id))return redirect()->back();
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"blogs Berhasil Dihapus"
            ]);
        return redirect()->route('blogs.index');
        }

}
            