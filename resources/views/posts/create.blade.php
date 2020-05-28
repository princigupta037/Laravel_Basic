@extends('layout.app')

@section('content')

    <br/>
    <h1> Create Post</h1>
    <br/>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                    {{Form::label('title' ,'Title')}}
                    {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body' ,'Body')}}
                {{Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
    {!! Form::close() !!}
    
@endsection