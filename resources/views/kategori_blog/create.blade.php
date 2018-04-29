@extends('layouts.admina')
@section('content')

<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Kategori Blog / Tambah Kategori Blog</li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="container">

<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            	<br><br>

				{!! Form::open(['url' => route('kategori_blog.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('kategori_blog._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection