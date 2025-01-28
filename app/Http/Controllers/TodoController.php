<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return response()->json(auth()->user()->todos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $todo = auth()->user()->todos()->create($request->all());

        return response()->json($todo, 201);
    }

    public function update(Request $request, $id)
    {
        $todo = auth()->user()->todos()->findOrFail($id);
        $todo->update($request->all());

        return response()->json($todo);
    }

    public function destroy($id)
    {
        auth()->user()->todos()->findOrFail($id)->delete();

        return response()->json(['message' => 'Todo deleted']);
    }
}

