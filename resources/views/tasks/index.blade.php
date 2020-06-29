@extends ('layout')

@section ('content')
@foreach ($tasks as $task)
<p>
	{{ $task->text }}
	<a href="tasks/{{$task->id}}/edit">Edit</a>
	<form action="tasks/{{$task->id}}" method='POST'>
		@csrf
		@method('DELETE')
		<button type='submit'>Delete</button>
	</form>
</p>
@endforeach
<a href='/tasks/create'>New Task</a>
@endsection