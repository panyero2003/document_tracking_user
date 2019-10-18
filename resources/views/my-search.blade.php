@extends('layouts.app')

@section('content')

<body><br><br><br><br>
	<div class="container">
		
		<form class="example" action="{{ route('my-search-result') }}" method = "GET" role="search" >
		
			<div class="row">
				
				<div class="col-md-6 "  align="center">
				
					<input type="text" class="form-control" placeholder="Search" name="search" required>
				</div>
				<div class="col-md-6">
					<button class="btn btn-success" type="submit">Search</button>
				</div>
			</div>

		</form><br>

</div>

</body>
</html>

@endsection