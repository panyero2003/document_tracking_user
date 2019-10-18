@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Users</h1>

    <div class="col-sm-6">

        {!! Form::model($users, ['method'=>'PATCH', 'action'=>['UserController@update', $users->id]]) !!}
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::text('password', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-5']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['UserController@destroy', $users->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-5']) !!}
        </div>
        {!! Form::close() !!}

    </div>

    <div class="col-sm-6">

    </div>

@endsection