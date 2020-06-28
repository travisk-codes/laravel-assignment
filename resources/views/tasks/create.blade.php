@extends('layout')

@section('content')
<form method='POST' action='/tasks' >
	@csrf
	<label for="text">
		Text
		<input name='text' type="text">
	</label>

	<label for='completed'>
		Completed
		<input name='completed' type="checkbox">
	</label>

	<button type="submit">
		Submit
	</button>
</form>
@endsection