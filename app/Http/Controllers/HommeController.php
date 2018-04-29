<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Home;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class HommeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index(Request $request, Builder $htmlBuilder)
    {
        $Home = Home::all();
        return view('Home.index')->with(compact('Home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.create');
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
           
            'textbesar'=> 'required|unique:homes,textbesar',
            ]);
        $Home = new Home;
        $Home->textbesar = $request->textbesar;
        $Home->textkecil = $request->textkecil;
// textkecil field cover jika ada cover yang diupload
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
// mengtextkecil field cover di Home dengan filename yang baru dibuat
            $Home->cover = $filename;
            $Home->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $Home->textbesar"
            ]);
        return redirect()->route('Home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $Home = Home::find($id);
        return view('Home.edit')->with(compact('Home'));
    
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
        $poto = Home::find($id);
        $poto->update($request->all());
        if ($request->hasFile('cover')) {
// menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img1';
// memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
// hapus cover lama, jika ada
            if ($poto->cover) {
                $old_cover = $poto->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img1'
                . DIRECTORY_SEPARATOR . $poto->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }

            // ganti field cover dengan cover yang baru
            $poto->cover = $filename;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('Home.index');

    }

    public function destroy($id)
    {
        $Home= Home::find($id);
        if(!Home::destroy($id))return redirect()->back();
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Home Berhasil Dihapus"
            ]);
        return redirect()->route('Home.index');
    }
}
