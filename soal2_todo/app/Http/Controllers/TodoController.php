<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        $data = [
            'todos' => $todos
        ];
        return view('app.todos.index', $data);
    }

    public function create()
    {
        return view('app.todos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Todo::create($validatedData);

        return redirect('/');
    }

    public function edit(Todo $todo)
    {
        return view('app.todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());

        return redirect('/');
    }


    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect()->back()->with('success', 'Todo deleted successfully.');
    }
}
