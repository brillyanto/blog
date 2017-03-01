<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function show($task){
        $task = Task::complete();
        return view('tasks.show', compact('task'));
    }
}
