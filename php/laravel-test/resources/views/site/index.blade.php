@extends('layouts.app')

@section('content')
	<p><b>Today's date: </b> {{ $today->format('dS M Y') }}</p>
	<p><b>Yesterday's date: </b> {{ $today->format('dS M Y') }}</p>

	<hr />

	<h3>Some Posts</h3>
	@foreach ($posts as $_p)
		<p>{{ $_p->title }} | {{ $_p->updated_at->format('dS M Y') }}</p>
	@endforeach

@endsection
