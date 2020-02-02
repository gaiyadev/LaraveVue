@extends('layout/app')
        
@section('content')
<h1 class="text-primary">{{ $title }}</h1>
<div class="jumbotron text-center">
        <p> This is the home page</P>
            <a href="/login" class="btn btn-success btn-lg" role="button">Login</a>
            <a href="/register" class="btn btn-info btn-lg" role="button">Register</a>
    <div>
@endsection