@extends('layouts.app')


@section('content')
    @yield('categories')
    <h1>{{$post->title}}</h1>
    <hr>
    <div class="row align-items-center">
        
        <div class="col-md-6">
            <ul class="nav ">
                <li class="nav-item">
                    <small class="nav-link text-dark">Written on {{$post->created_at}}</small>
                </li>
                
            </ul>
            
            

        </div>
        <div class="col-md-6">
            
            <ul class="nav justify-content-end ">
                
                <li class="nav-item">
                    <a href="/posts" class="btn btn-default">Go back</a>
                    
                </li>
                @if(!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                        {{-- <li class="nav-item">
                            <small class="nav-link text-dark ">Comments</small>
                        </li> --}}
                        <li class="nav-item">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                        </li>
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        <li class="nav-item">
                            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                        </li>
                        {!!Form::close()!!}
                    @endif
                @endif
                
                
               
                
              </ul>
        </div>
        
    </div>
    <hr>
    
    
    <div class="row">
        <div class="col-sm-6">
            <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid img-responsive rounded-start" style="width:100%; max-height:400px" alt="">

            
        </div>
        <div class="col-sm-6">
            <h3 class="card-title">{{$post->title}}</h3>
            <p>{{$post->body}}</p>
        </div>
    </div>
<hr>
<div class="form-group">
    <label for="comment">Comment:</label>
    
    <textarea class="form-control" rows="5" id="comment"></textarea>

    
  </div>
<hr>
    
    
    
    
@endsection