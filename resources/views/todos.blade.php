@extends('layout')

@section('content')
    
    <div class="row">
        <div class="col-lg-6 lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" id="" class="form-control input-lg" placeholder="Create a new todo">
            </form>
        </div>
    </div>

    @foreach ($todos as $todo)

{{$todo->todo}} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a>
<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info">update</a>
@if (!$todo->completed)

<a href="{{ route('todos.completed', ['id' => $todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>

    
@else
        <span class="text-success">Completed !</span>

@endif

<hr>

    @endforeach

@endsection