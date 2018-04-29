<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Lainnya;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class LainnyaController extends Controller
{
    public function edit($id)
    {
           $Lainnya = Lainnya::find($id);
        return view('Lainnya.edit')->with(compact('Lainnya'));
    
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
        $Lainnya = Lainnya::find($id);
        $Lainnya->update($request->all());
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
// mengisi field cover di Lainnya dengan filename yang baru dibuat
            $Lainnya->cover = $filename;
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
// mengisi field cover di Lainnya dengan filename yang baru dibuat
            $Lainnya->cover1 = $filename1;
        }
        $Lainnya->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->back();

    }

}
    