@extends('layouts.app')

@section('content')


    <h1>Todos</h1>

    @if(count($todos) > 0)

        @foreach($todos as $todo)

{{--            <div class="well"> <div class card replaces well in bootstrap 4. well does not work in 4. use card--}}
                <div class="card bg-light mt-4 p-3">

                     <h3>{{$todo->text}} <span class="badge badge-danger">{{$todo->due}}</span></h3>

                </div>

        @endforeach

    @endif


@stop

