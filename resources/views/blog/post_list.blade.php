@extends('layouts/basic')

@section('title', 'List of post')

@section('content')

<h1>List of Blog Posts</h1>

<ul>
    @foreach ($posts as $post_id => $post_name)
        
        <li>
                       <!--route (name of the route, and parameters with => its value)-->
            <a href="{{ route('post_list', ['id' => $post_id]) }}">
                {{ $post_name }}
            </a>    
        </li> 
    @endforeach       
</ul>

@endsection