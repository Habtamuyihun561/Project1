<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // featch all todos from database 

        //$todos = Todo::all();
        // return view('todos.index')->with('todos', $todos);

        // display them in the todos.index page 
        return view('todos.index')->with('todos', Todo::all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Todo::create($request->all());

        return redirect()->route('index')
            ->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $id)
    {
        return view('todos.show')->with('todo', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $id)
    {
        return view('todos.edit')->with('todo', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Todo $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
  
        $id->update($request->all());
  
        return redirect()->route('index')->with('success','Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $id)
    {
        $id->delete();
        return redirect()->route('index')->with('success', 'Task delete successfully');
    }

    public function complete(Todo $id){
        $id->completed = true;
        $id->save();
        return redirect()->route('index')->with('success', 'Task Completed');
    }





}
