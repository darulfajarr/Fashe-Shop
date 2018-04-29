@extends('layouts.admina')
@section('content')

						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i>blogs / Edit Data blogs </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="container">

<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($blogs, ['url' => route('blogs.update', $blogs->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('blogs._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection