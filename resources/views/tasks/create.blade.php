@extends('layout')

@section('content')
<form method='POST' action='/tasks' >
	@csrf
	<label for="text">
		Text
		<input name='text' type="text" value="{{ old('text') }}">
		@error('text')
			<p>{{ $errors->first('text') }}</p>
		@enderror
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