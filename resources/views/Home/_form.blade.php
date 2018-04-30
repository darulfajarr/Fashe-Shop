<div class="form-group{{ $errors->has('textbesar') ? ' has-error' : '' }}">
	{!! Form::label('textbesar', 'Text Besar', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textbesar', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textbesar', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<br>

<div class="form-group{{ $errors->has('textkecil') ? ' has-error' : '' }}">
	{!! Form::label('textkecil', 'Text Kecil', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textkecil', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecil', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
	{!! Form::label('link', 'Link Yang Di Tuju', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('link', null, ['class'=>'form-control']) !!}
		{!! $errors->first('link', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>


<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($Home) && $Home->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img1/'.$Home->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<br>





<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
<br>