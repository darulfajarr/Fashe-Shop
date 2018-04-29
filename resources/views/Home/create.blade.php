@extends('layouts.admina')
@section('content')
						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Data Home / Tambah Data Home </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
	
				{!! Form::open(['url' => route('Home.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Home._form')
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@endsection