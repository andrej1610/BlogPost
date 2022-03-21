@extends('layouts.app')



@section('content')

   
    <div class="nav navbar-expand-md navbar-light " style="background-color: transparent;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-center ">
                <li class="nav-item ">
                    <h1 class="">Posts</h1>
                </li>
            </ul>
            <ul class="navbar-nav list-group list-group-flush" style="background-color: transparent;">
                <li class="nav-item list-group-item" style="background-color: transparent;">
                    <a class="nav-link" href="/posts/create">Add Post</a>
                </li>
            </ul>
            <ul class="navbar-nav list-group list-group-flush" style="background-color: transparent;">
                <li class="nav-item list-group-item" style="background-color: transparent;">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
            </ul>
        </div>  
        <div>
            
        </div>
    </div>

    @if(count($posts) > 0)
            @foreach ($posts as $post)
            <div class="card mb-3" ">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid img-responsive rounded-start" style="width:100%; max-height:200px" alt="">
                        </div>
                        <div class="col-sm-8">
                        <div class="card-body">
                            <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>

                            <p class="card-text"><small class="text-muted">Written on {{$post->created_at}}</small></p>

                            {{-- <p class="">{{$post->body}}</p> --}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
    @else
    
    @endif
@endsection