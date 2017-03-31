@extends('main')

@section('title', '|Visi įrašai')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-primary btn-block">Create new post</a>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body,0,50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop