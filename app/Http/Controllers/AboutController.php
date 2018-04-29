<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\About;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index(Request $request, Builder $htmlBuilder)
    {
        $About = About::all();

    return view('About.undex')->with(compact('About'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
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
            'atas'=> 'required|unique:Abouts,atas',
            'tengah'=> 'required|unique:Abouts,tengah',  
            'bawah'=> 'required|unique:Abouts,bawah'
            ]);
        $About = About::create($request->except('cover','cover1'));
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
// mengisi field cover di About dengan filename yang baru dibuat
            $About->cover = $filename;
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
// mengisi field cover di About dengan filename yang baru dibuat
            $About->cover1 = $filename1;
        }

        $About->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('About.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $About = About::find($id);
        return view('About.edit')->with(compact('About'));
    
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
        $About = About::find($id);
        $About->update($request->all());
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
// mengisi field cover di About dengan filename yang baru dibuat
            $About->cover = $filename;
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
// mengisi field cover di About dengan filename yang baru dibuat
            $About->cover1 = $filename1;
        }

        // return $About;
        $About->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->back();
    }
}
