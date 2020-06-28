@extends ('layout')

@section ('content')
@foreach ($tasks as $task)
<h1>{{ $task->text }}</h1>
@endforeach
@endsection