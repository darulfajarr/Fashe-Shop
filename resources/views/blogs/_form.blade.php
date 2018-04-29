<br><br>
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($blogs) && $blogs->cover)
		<p>
			<br>
		    <b>Gambar Saat Ini :</b>
		    <br>
		    <br>
			{!! Html::image(asset('img/img7/'.$blogs->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>
<br>
<br>
<div class="form-group{{ $errors->has('kategori_id') ? ' has-error' : '' }}">
	{!! Form::label('kategori_id', 'Kategori Product', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('kategori_id',[''=>'']+App\kategori_blog::pluck('nama_kategori','id')->all(), null,['class'=>'form-control'])  !!}
		{!! $errors->first('kategori_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
	{!! Form::label('judul', 'Judul', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('judul', null, ['class'=>'form-control']) !!}
		{!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>
<div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
	{!! Form::label('isi', 'Isi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('isi', null, ['class'=>'form-control']) !!}
		{!! $errors->first('isi', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
	{!! Form::label('tanggal', 'Tanggal', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::date('tanggal', null, ['class'=>'form-control']) !!}
		{!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<div class="form-group{{ $errors->has('view') ? ' has-error' : '' }}">
	{!! Form::label('view', 'view', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::number('view', null, ['class'=>'form-control']) !!}
		{!! $errors->first('view', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<br>
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>