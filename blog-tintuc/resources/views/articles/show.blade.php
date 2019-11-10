
@extends('layouts.master')
@section('head.title')
    Tiêu đề của bài viết
@stop

@section('body.content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <a href="{{url('/')}}" class="nav-link">
                Back to home
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{$article->title}}</h2>
                <p>{{$article->content}}</p>
                <p><a href="#">read more</a></p>
            </div>

        </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <a href="{{route('article.edit',$article->id)}}" class="btn btn-info">Cập nhật</a>
        </div>
    </div>
    </div>
@stop
