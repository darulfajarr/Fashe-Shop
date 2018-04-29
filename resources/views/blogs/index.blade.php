@extends('layouts.admina')
@section('content')
    <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Data blogs</li>
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
<div class="box">
  <div class="box-header" style="">
    <h3 class="box-title" ></h3>
  </div><br>
  &nbsp&nbsp<a class="btn btn-primary" href="{{ route('blogs.create') }}">Tambah</a>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data" class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($blogs as $data)
          <tr>
            <td>{{$no++}}</td>
            <td><img width="200" height="100" src="{{asset('/img/img7/'.$data->cover.'')}}" /></td>
            <td>{{$data->judul}}</td>
            <td>
              <form action="{{route('blogs.destroy',$data->id)}}" method="post">
                <input type="hidden" name="_method" value="Delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <a data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn btn-success" href="/Backend/blogs/{{$data->id}}/edit"><i class="fa fa-edit"></i></a>
                <button data-toggle="tooltip" data-placement="top" title="Hapus Data" type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus ?')"><i class="fa fa-trash"></i></button>
                <a data-toggle="tooltip" data-placement="top" title="Detail Data" class="btn btn-success" href="/Backend/blogs/{{$data->id}}"><i class="fa fa-info"></i></a>
              {{csrf_field()}}
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  $('#data').DataTable(); 
</script>  
@endsection