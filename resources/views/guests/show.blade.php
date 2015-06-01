@extends('app')

@section('content')


<h1>Note from {{ $guest->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $guest->name }}</h2>
		<p>
			<strong>Address:</strong> {{ $guest->address }}<br>
			<strong>Phone:</strong> {{ $guest->phone }}
		</p>
		<p>
			{{ $guest->note }}
		</p>
	</div>

</div>

@endsection