@extends('layouts.app')

@section('content')

<html>
<head>
<style>
body {background-color: white;}
h1   {color: blue;}
p    {color: red;}
</style>
</head>
<body>

<div class="container">
    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{Session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>

    

    <div class="col-sm-8">

        @if($users)

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>

                @foreach($users as $user)

                    <tr>
                        <td><a href="{{route('users.edit', $user->id)}}" >{{$user->id}}</a></td>
                        <td><a href="{{route('users.edit', $user->id)}}" >{{$user->first_name}}</a></td>
                        <td><a href="{{route('users.edit', $user->id)}}" >{{$user->last_name}}</a></td>
                        <td><a href="{{route('users.edit', $user->id)}}" >{{$user->email}}</a></td>
                        <td><a href="{{route('users.edit', $user->id)}}" >{{$user->password}}</a></td>
                        <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'no date'}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','action'=>['UserController@destroy',$user->id]]) !!}
                            <div class='form-group'>
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                            </div>

                        {!! Form::close() !!}
                          </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
{!! $users->render() !!}
        @endif

    </div>

</div>

@endsection