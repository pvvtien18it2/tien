@extends('layouts.master')
@section('head.title')
    Chỉnh sửa nội dung
@stop

@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Add new Articles</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>There are some problems with your input <br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                
                {!! Form::open([
                        'method' => 'PUT',
                        'route' => 'article.update', 
                        'class' => 'form-horizontal'
                        
                    ])
                !!}
                <div class="form-group">
                    {!!Form::label('title',  'Tiêu đề bài viết',['class' =>'control-label'])!!}
                    {!!Form::text('title','',['id'=>'title','class'=>'form-control','placeholder'=>'Điền vào đây','required'=>'true'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('content',  'Tiêu đề bài viết',['class '=>'control-label'])!!}
                    {!!Form::text('content','',['id'=>'content','class'=>'form-control','placeholder'=>'Điền nội dung vào đây','required'=>'true'])!!}
                </div>
                <div class="form-group">
                    {!!Form::submit('Thêm bài viết',['class'=>'btn btn-primary'])!!}
                </div>
                {!! Form::close() !!}


            </div>
        </div> 
</div>
@stop