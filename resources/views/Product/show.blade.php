@extends('layouts.admina')
@section('content')
    <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Data Produk</li>
    </h4>
      </ol>
<br><br><br><br>
@if(session()->has('flash_notification.message'))
<div class="container">
  <div class="alert alert-{{ session()->get('flash_notification.level') }} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {!! session()->get('flash_notification.message') !!}
  </div>
</div>
@endif
<div class="container">
  <div class="box box-success">
    <div class="box-header">  
      <h5>List Data</h5>
    </div>
    <div class="box-body">
      <div>
        <table class="table" border="1">
          <tr>
            <td><center><h4>Gambar 1</h4></center><hr></td>
            <td><center><h4>Gambar 2</h4></center><hr></td>
            <td><center><h4>Gambar 3</h4></center><hr></td>
          </tr>
          <tr>
            <td><img width="325" height="200" src="{{asset('/img/img1/'.$Product->cover.'')}}" />&nbsp&nbsp&nbsp&nbsp</td>
            <td><img width="325" height="200" src="{{asset('/img/img2/'.$Product->cover1.'')}}" />&nbsp&nbsp&nbsp&nbsp</td>
            <td><img width="325" height="200" src="{{asset('/img/img3/'.$Product->cover2.'')}}" />&nbsp&nbsp&nbsp&nbsp</td>
          </tr>
        </table>
        <div>
          <h4>&nbsp&nbsp&nbsp&nbspDetail Data :</h4><br>
        </div>
        <div class="box-body col-md-7">
          <table class="table">
          <tr>
            <td><font size="4px">Kode</font></td><td>:</td><td><font size="4px">{!!$Product->Kode!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Nama Produk</font></td><td>:</td><td><font size="4px">{!!$Product->nama_product!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Bahan</font></td><td>:</td><td><font size="4px">{!!$Product->bahan!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Warna</font></td><td>:</td><td><font size="4px">{!!$Product->warna!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Ukuran</font></td><td>:</td><td><font size="4px">{!!$Product->ukuran!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Harga</font></td><td>:</td><td><font size="4px">{!!$Product->harga!!}</font></td>
          </tr>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  $('#data').DataTable(); 
</script>  
@endsection