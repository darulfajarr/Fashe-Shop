<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\kategori_blog;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class Kategori_BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $kategori_blog = kategori_blog::all();
    return view('kategori_blog.index')->with(compact('kategori_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_blog.create');
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
            'nama_kategori'=> 'required|unique:kategori_blogs,nama_kategori',
            ]);
        $kategori_blog = new kategori_blog ;
        $kategori_blog->nama_kategori = $request->nama_kategori;
        $kategori_blog->slug = str_slug ($request->nama_kategori,'-');
        $kategori_blog->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $kategori_blog->nama_kategori"
            ]);
        return redirect()->route('kategori_blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_blog = kategori_blog::find($id);
        
        return view('kategori_blog.edit')->with(compact('kategori_blog'));
    
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
        $this->validate($request, ['nama_kategori' => 'required|unique:kategori_blogs,nama_kategori,'. $id,
          
            ]);
        $kategori_blog = kategori_blog::find($id);
        $kategori_blog->update($request->all());
            $kategori_blog->save();
     
        
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('kategori_blog.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_blog= kategori_blog::find($id);
        if(!kategori_blog::destroy($id))return redirect()->back();
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"kategori_blog Berhasil Dihapus"
            ]);
        return redirect()->route('kategori_blog.index');
        }

}
            