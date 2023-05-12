<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(Request $request): View{
        $tasks = Task::orderby('created_at')->get();
        $diff = array(
            'Hard' => 'Hard',
            'Medium' => 'Medium',
            'Easy' => 'Easy',
        );

        $prio = array(
            'High' => 'High',
            'Mid' => 'Mid',
            'Low' => 'Low',
        );
        return view('add_task', [
            'diff' => $diff,
            'prio' => $prio,
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request): RedirectResponse{

        $validated = $request->validate([
            'task' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'difficulty' => ['required', 'string', 'max:255'],
            'priority' => ['required', 'string', 'max:255'],
        ]);

        $task = new Task;

        $task->task = $request->task;
        $task->description = $request->description;
        $task->difficulty = $request->difficulty;
        $task->priority = $request->priority;

        $task->save();

        // $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('add.task')->with('success', 'Task was successful!');
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        $diff = array(
            'Hard' => 'Hard',
            'Medium' => 'Medium',
            'Easy' => 'Easy',
        );
        $prio = array(
            'High' => 'High',
            'Mid' => 'Mid',
            'Low' => 'Low',
        );
        
        return view('update_task', [
            'diff' => $diff,
            'prio' => $prio,
            'task' => $task,
        ]);
    }

    public function save(Request $request, $id){
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'task' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'difficulty' => ['required', 'string', 'max:255'],
            'priority' => ['required', 'string', 'max:255'],
        ]);

        $task->task = $request->task;
        $task->description = $request->description;
        $task->difficulty = $request->difficulty;
        $task->priority = $request->priority;
        $task->save();

        return redirect()->route('add.task')->with('success', 'Task was updated successful!');
    }

    public function delete(Request $request, $id){
        Task::findOrFail($id)->delete();
        return redirect()->route('add.task')->with('success', 'Task was deleted successful!');
    }
}
