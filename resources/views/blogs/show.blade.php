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
            <td><h4>Gambar</h4><hr></td>
            </tr>
          <tr>
            <td><img width="325" height="200" src="{{asset('/img/img7/'.$blogs->cover.'')}}" />&nbsp&nbsp&nbsp&nbsp</td>
          </tr>
        </table>
        <div>
          <h4>&nbsp&nbsp&nbsp&nbspDetail Data :</h4><br>
        </div>
        <div class="box-body col-md-7">
          <table class="table">
          <tr>
            <td><font size="4px">Judul</font></td><td>:</td><td><font size="4px">{{$blogs->judul}}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Kategori</font></td><td>:</td><td><font size="4px">{!!$blogs->kategori->nama_kategori!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Isi</font></td><td>:</td><td><font size="4px">{!!$blogs->isi!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Tanggal</font></td><td>:</td><td><font size="4px">{!!$blogs->tanggal!!}</font></td>
          </tr>
          <tr>
            <td><font size="4px">Views</font></td><td>:</td><td><font size="4px">{!!$blogs->view!!}</font></td>
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