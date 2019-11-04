@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$post->title}} - <small>by {{$post->author}}</small>

                    <span class="pull-right">
                        Thu, Jan 10, 2019 7:50 AM
                    </span>
                </div>
                <div class="panel-body">
                    <p>{{$post->body}}</p>
                    <p>
                        Category: <span class="label label-success">ipsum</span> <br>
                        Tags:
                        <span class="label label-danger">No tag found.</span>
                    </p>
                </div>
            </div>
            @foreach ($post->comments as $comment)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$comment->post->title}}
                    <span class="pull-right">{{$comment->created_at->diffForHumans()}}</span>
                </div>
                <div class="panel-body">
                    <p>{{$comment->content}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection