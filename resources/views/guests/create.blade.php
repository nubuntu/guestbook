@extends('app')

@section('content')

<h1>Guest Form</h1>

<!-- jika terjadi error, tampilkan disini -->
{!! HTML::ul($errors->all() )!!}

{!! Form::open(array('url' => 'guest')) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('address', 'Address') !!}
		{!! Form::textarea('address', Input::old('address'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Phone') !!}
		{!! Form::text('phone', Input::old('phone'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('note', 'Note') !!}
		{!! Form::textarea('note', Input::old('note'), array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

@endsection
