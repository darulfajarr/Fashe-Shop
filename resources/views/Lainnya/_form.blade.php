<br><br>
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover Blog', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($Lainnya) && $Lainnya->cover)
		<p>
			<br>
		    <b>Gambar Saat Ini :</b>
		    <br>
		    <br>
			{!! Html::image(asset('img/img1/'.$Lainnya->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<br><br>
<div class="form-group{{ $errors->has('cover1') ? ' has-error' : '' }}">
	{!! Form::label('cover1', 'Cover Produk', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover1') !!}
		@if (isset($Lainnya) && $Lainnya->cover1)
		<p>
			<br>
		    <b>Gambar Saat Ini :</b>
		    <br>
		    <br>
			{!! Html::image(asset('img/img2/'.$Lainnya->cover1), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover1', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
	{!! Form::label('link', 'Link Youtube', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('link', null, ['class'=>'form-control']) !!}
		{!! $errors->first('link', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
<br>