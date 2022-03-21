@extends('layouts.app')


@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        
        <ul >
            @foreach ($services as $service)
            <li class="text-red-500">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
        

        
   