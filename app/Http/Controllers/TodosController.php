<?php

namespace App\Http\Controllers;

use Session;

use App\Todo;

use Illuminate\Http\Request;

use App\Http\Requests;

class TodosController extends Controller
{
    public function index() {

        $todos = Todo::all();

        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request) {


        $todo = new Todo;

        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('success','Your todo was created with successfully');

        return redirect()->back();
    }

    public function delete($id) {

        $todo = Todo::find($id);

        $todo->delete();

        Session::flash('danger','Your todo was deleted with successfully');

        return redirect()->back();
    }

    public function update($id) {

        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id) {

        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('info','Your todo was updated with successfully');

        return redirect()->route('todos');
    }

    public function completed($id) {

        $todo = Todo::find($id);

        $todo->completed = 1;

        $todo->save();

        return redirect()->back();

    }

}
