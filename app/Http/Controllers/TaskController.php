<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        $title = $request->input('title');
        $description = $request->input('description');

        // create task model object

        $taskObject = new Task();

        $taskObject->title = $title;

        $taskObject->description =  $description;

        $taskObject->save();

        // return redirect()->back()->with('success', "Task data created successfully")->withInput();
        return redirect(url('/task-read'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $obj['data'] = Task::all();
        return view('task', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task, string $id)
    {

        $object['data'] = Task::find($id);

        return view('task_edit', $object);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // dd($request->all());
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');

        $object_edit = Task::find($id);

        $object_edit->title = $title;
        $object_edit->description = $description;

        $object_edit->save();

        return redirect(url('/task-read'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task, string $id)
    {
        $object = Task::find($id);
        $object->delete();
        return redirect()->back()->with('delete', "Task data deleted successfully")->withInput();
    }
}
