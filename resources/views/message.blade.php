@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
	
		<table class="table table-striped">
			
		<div>
			<p>No Records found</p>
		</div>

		<div>
			<p><a href="{{route('my-search')}}">Back</a></p>
		
		</div>

		</table>
	</div>
</div>

@endsection