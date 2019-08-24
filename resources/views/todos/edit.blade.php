@extends('layouts.app')


@section('content')

    <h1>Update Todo</h1>

    <div class=" container ">

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

            {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>



        {!! Form::close() !!}

        <div class="pull-right">
        {!! Form::open(['method'=>'DELETE', 'action'=>['TodosController@destroy', $todo->id]]) !!} <!--files true enables you to add file, upload. equivalent of enctype=multiform/data-->



            <div class="form-group">

                {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-6 ']) !!}
            </div>



            {!! Form::close() !!}
        </div>



    </div>







@endsection