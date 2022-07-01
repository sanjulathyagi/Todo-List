<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use domain\Facades\TodoFacade;
use Illuminate\Http\Request;

class TodoController extends ParentController
{
    public function index()
    {
        $response['tasks'] = TodoFacade::all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request)
    {
       TodoFacade::store($request->all());

        // $this->task->title = $request->title;
        // $this->task->save();
        return redirect()->back();
        // return redirect()->route('home');

    }

    public function delete($task_id)
    {
        TodoFacade::delete($task_id);
        return redirect()->back();
    }


    public function done($task_id)
    {
        TodoFacade::done($task_id);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $response['tasks'] =TodoFacade::get($request['task_id']);
        return view('pages\todo\edit')->with($response);
    }
}
