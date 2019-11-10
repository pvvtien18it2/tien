@extends('layouts.master')
@section('head.title')
    Danh sách các bài viết
@stop

@section('body.content')
    
    <div class="container">

        
        @foreach($articles as $a)
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{$a->title}}</h2>
                <p>{{$a->content}}</p>
                <p><a href="{{route('article.show',$a->id)}}">read more</a></p>
            </div>
        @endforeach
        </div>
        
    </div>
    
@stop
