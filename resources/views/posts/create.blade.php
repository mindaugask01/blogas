@extends('main')

@section('title', 'Create new post')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            {{ Form::label('body', 'Post body ') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            {{ Form::submit('Create post', ['class' => 'btn btn-success btn-lg', 'style' => 'margin-top:10px;']) }}
            {!! Form::close() !!}
        </div>
    </div>



@stop

