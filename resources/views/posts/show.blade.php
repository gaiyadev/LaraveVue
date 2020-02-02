@extends('layout/app')
        
@section('content')
<a href='/blog' class='btn btn-primary'>Go Back</a>
<br/><br/>
   <h3>{{ $post->title }}<h3>
        
       
<div>
      {{$post->body  }}
      
    <div>
        <hr>
            <small>Written on {{ $post->created_at }} </small>
            <hr/>
            <a style="float: left" href="/blog/{{ $post->id}}/edit" class="btn btn-danger  ">Edit post</a>




            <div style="float:right; margin-left: 60px"  >
                <?php
                echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right']);
                          echo Form::hidden('_method', 'DELETE');
      
                          echo Form::submit('Delete!', ['class'=> 'btn btn-danger']);
                       
                         echo Form::close();
                      ?>
            </div>

      @endsection