@extends('layouts.app')

@section('content')


<a href="{{route('todo.index')}}" class="btn btn-dark">Go back</a>
<br><br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Text</th>
            <th>Body</th>
            <th>Due</th>
              <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$todo->text}}</td>
            <td>{{$todo->body}}</td>
            <td>{{$todo->due}}</td>
            <td>{{$todo->created_at->diffForHumans()}}</td>
          </tr>

        </tbody>
      </table>



@stop

