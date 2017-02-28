@extends('layouts/basic')

@section('title', 'Contact form')

@section('content')

<div class="title m-b-md">
    Conctact Form
</div>

<form action="" method="post">
    <input type="text" name="who" value="{{ $who }}">
    <input type="submit" name="submit" value="Submit">
</form>    

<ul>
@foreach ($recipients as $recipient)

    <li>{{ $recipient}}</li>

@endforeach    
</ul>

<a href="{{ url('/') }}">Home</a>
@endsection
