@extends('layouts.app')


@section('content')

    <h1>Update Todo</h1>

    {!! Form::model($todo,['method'=>'PATCH', 'action'=>['TodosController@update',$todo->id]]) !!} <!--files true enables you to add file, upload. equivalent of enctype=multiform/data-->

    <div class="form-group">

        {!! Form::label('text', 'Text') !!}
        {!! Form::text('text', null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">

        {!! Form::label('body', 'Message:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">

        {!! Form::label('due', 'Due Date:') !!}
        {!! Form::text('due', null, ['class'=>'form-control']) !!}


    </div>




    <div class="form-group">

        {!! Form::submit('Update', ['class'=>'btn btn-primary btn-block']) !!}
    </div>


    {!! Form::close() !!}

@endsection