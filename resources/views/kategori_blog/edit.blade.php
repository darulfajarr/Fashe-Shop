@extends('layouts.admina')
@section('content')

					<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Kategori Blog/ Edit Kategori Blog</li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($kategori_blog, ['url' => route('kategori_blog.update', $kategori_blog->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('kategori_blog._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection