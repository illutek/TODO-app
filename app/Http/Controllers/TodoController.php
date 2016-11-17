<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveTodoRequest;
use Illuminate\Http\Request;
use App\Todo;

use App\Http\Requests;

class TodoController extends Controller
{
    /**
     * PostsController constructor.
     * Op deze manier wordt het admin gedeelte beveiligd
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = auth()
        ->user()
        ->todos()
        ->orderBy('priority', 'desc')
        ->where('completed', '=', 'No')
        ->paginate(7);

        return view('welcome', compact('todos'));
    }


    public function completed()
    {
        $todos = auth()
        ->user()
        ->todos()
        ->orderBy('priority', 'desc')
        ->where('completed', '=', 'Yes')
        ->paginate(7);

        return view('completed', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveTodoRequest $request)
    {
        $todo = new Todo();

        $todo->title = $request->title;
        $todo->priority = $request->priority;
        $todo->completed = $request->completed;

        $request->user()->todos()->save($todo);

        session()->flash('succes', 'The TODO item was succesfully saved');

        return redirect(route('index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todo.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);

        $this->authorize('update', $todo);

        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveTodoRequest $request, $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->title = $request->title;
        $todo->priority = $request->priority;
        $todo->completed = $request->completed;

        $this->authorize('update', $todo);

        $todo->save();

        session()->flash('succes', 'The TODO item was succesfully added');

        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);

        $this->authorize('update', $todo);

        $todo->delete();

        session()->flash('deleted', 'The TODO item was succesfully deleted');

        return redirect(route('index'));
    }
}
