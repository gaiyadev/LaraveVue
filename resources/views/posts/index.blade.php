@extends('layout/app')
        
@section('content')
<a href="/blog/create" class="btn btn-primary" >Create</a>
<br/><br/>

   <div class="jumbotron">
       <h1 class="text-primary">WELCOME TO MY BLOG</h1>
    <div>
       <br/>
    <div>
        
       @if(count($posts) > 0)
       @foreach ($posts as $post)
           <div class="well">
               <h3><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h3>
               <small>Written on {{ $post->created_at }} </small>
           </div>
       @endforeach
       <br/>
  <div class="text-center">
      <p > {{ $posts->links() }}</p>
  </div>

   @else
   <p>No post found</p>
   @endif

    </div>
@endsection
