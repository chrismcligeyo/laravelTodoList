@extends('layouts.app')

@section('content')


<a href="{{route('todo.index')}}" class="btn btn-dark">Go back</a>
<br><br>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>

    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Text</th>
            <th>Body</th>
            <th>Due</th>
              <th>Created</th>
              <th>Edit</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$todo->text}}</td>
            <td>{{$todo->body}}</td>
            <td>{{$todo->due}}</td>
            <td>{{$todo->created_at->diffForHumans()}}</td>
              <td><a href="{{route('todo.edit', $todo->id)}}">Edit</a></td>

          </tr>

        </tbody>
      </table>



@stop

