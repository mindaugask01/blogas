@extends('main')

@section('title', 'Edit post')

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}

            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ $post->created_at }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last updated:</dt>
                    <dd>{{ $post->updated_at }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-block">Cancel</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="{{ route('posts.update', $post->id) }}" class="btn btn-success btn-block">Save</a>
                    </div>
                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>



@stop