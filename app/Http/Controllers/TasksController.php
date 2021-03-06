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

    public function show(Task $task)
    {
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
        request()->validate([
            'text' => 'required'
        ]);

        $task = new Task;
        $task->text = request('text');
        $task->save();

        return redirect('/tasks');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {
        request()->validate([
            'text' => 'required'
        ]);


        $task->text = request('text');
        $task->save();

        return redirect('/tasks/' . $task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
}
