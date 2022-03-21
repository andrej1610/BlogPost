@extends('layouts.app')

@section('content')

    <h1 class="">Edit Post</h1>
        {{-- {{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method' => 'POST']) !!}}  --}}
        {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-group pb-3">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title,['class' => 'form-control','placeholder' =>'Title'])}}
    </div>
    <div class="form-group pb-3">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body,['class' => 'form-control','placeholder' =>'Body'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection