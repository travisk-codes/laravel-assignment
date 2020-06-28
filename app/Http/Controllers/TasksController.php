<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // latest()->get(); ?

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $task = new Task;
        $task->text = request('text');
        $task->save();

        return redirect('/tasks');
    }
}
