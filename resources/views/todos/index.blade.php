@extends('layouts.app')

@section('content')


    <h1>Todos</h1>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>

    @endif

    @if(count($todos) > 0)

        @foreach($todos as $todo)

{{--            <div class="well"> <div class card replaces well in bootstrap 4. well does not work in 4. use card--}}
                <div class="card bg-light mt-4 p-3">

                     <h3><a href="{{route('todo.show', $todo->id)}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>

                </div>

        @endforeach

    @endif


@stop

