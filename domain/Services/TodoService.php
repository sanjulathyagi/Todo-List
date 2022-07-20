<?php

namespace Domain\services;

use App\Models\subTask;
use App\Models\Todo;

class TodoService
{
    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
        $this->sub = new subTask();
    }

    public function get($task_id)
    {
        $task = $this->task->find($task_id);
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


    public function status($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();
        // return redirect()->back();
    }

    public function update(array $data, $task_id)
    {
        $task = $this->task->find($task_id);
        $task->update($this->edit($task, $data));

        //$task->title = $data['title'];
        // $task->update();

    }

    protected function edit(Todo $task, $data)
    {
        return array_merge($task->toArray(), $data);
    }


    //SUB TASK SECTION

    public function subStore($data)
    {
        $this->sub->create($data);
    }

    public function getSubTasksByTask($task_id)
    {
        return $this->sub->getSubTasksByTask($task_id);
    }
}


