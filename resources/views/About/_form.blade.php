<br>
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover 1', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($About) && $About->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img1/'.$About->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<br>
<div class="form-group{{ $errors->has('cover1') ? ' has-error' : '' }}">
	{!! Form::label('cover1', 'Cover 2', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover1') !!}
		@if (isset($About) && $About->cover1)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img2/'.$About->cover1), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover1', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<br>

<div class="form-group{{ $errors->has('atas') ? ' has-error' : '' }}">
	{!! Form::label('atas', 'Text Atas ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('atas', null, ['class'=>'form-control']) !!}
		{!! $errors->first('atas', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>
<div class="form-group{{ $errors->has('tengah') ? ' has-error' : '' }}">
	{!! Form::label('tengah', 'Text Tengah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('tengah', null, ['class'=>'form-control']) !!}
		{!! $errors->first('tengah', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<div class="form-group{{ $errors->has('bawah') ? ' has-error' : '' }}">
	{!! Form::label('bawah', 'Text Bawah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('bawah', null, ['class'=>'form-control']) !!}
		{!! $errors->first('bawah', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
<br>