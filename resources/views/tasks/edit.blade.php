@extends ('layout')

@section ('content')
<form method='POST' action='/tasks/{{ $task->id }}' >
	@csrf
	@method('PUT')
	<label for="text">
		Text
		<input name='text' type="text" value='{{ $task->text }}'>
	</label>

	<label for='completed'>
		Completed
		<input name='completed' type="checkbox" checked={{ $task->completed }}>
	</label>

	<button type="submit">
		Submit
	</button>
</form>
@endsection