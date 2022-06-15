<?php

namespace Domain\services;

use App\Models\Todo;

class TodoService
{
    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
    }

    public function all()
    {
        return $this->task->all();
        // return view('pages.todo.index')->with('$response');
    }

    public function store($data)
    {
        $this->task->create($data);

        // $this->task->title = $request->title;
        // $this->task->save();
        // return redirect()->back();
        // return redirect()->route('home');

    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();

        // return redirect()->back();
    }


    public function done($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();

        // return redirect()->back();
    }
}


