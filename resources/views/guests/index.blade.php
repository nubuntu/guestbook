@extends('app')

@section('content')

<h1>All Guests</h1>

<!-- untuk menampilkan pesan -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<a href="{{ url('guest/create') }}">Add New</a>
@if(Auth::guest())
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Name</td>
			<td>Note</td>
		</tr>
	</thead>
	<tbody>
	@foreach($guests as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>
			<td>{{ $value->note }}</td>
		</tr>
	@endforeach
	</tbody>
</table>
@else
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Name</td>
			<td>Address</td>
			<td>Phone</td>
			<td>Note</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($guests as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>
			<td>{{ $value->address }}</td>
			<td>{{ $value->phone }}</td>
			<td>{{ $value->note }}</td>
			<td>
				{!! Form::open(array('url' => 'guest/' . $value->id, 'class' => 'pull-right')) !!}
					{!! Form::hidden('_method', 'DELETE') !!}
					{!! Form::submit('Delete this Guest', array('class' => 'btn btn-warning')) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endif
@endsection
