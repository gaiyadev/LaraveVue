@extends('layout/app')
        
@section('content')

 <div class="col-md-3">
          
           
 </div>
 <div class="col-md-9" >
          <h1 class="text-center text-primary">Create Post</h1> 
 
          <?php
                   echo Form::open(['action' => 'PostsController@store', 'method' => 'POST']);
                   echo  '<div class="form-group" >';
                           echo Form::label('title', 'Title');
                           echo Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title']);
                    echo    '</div>';
                      echo '<br/>';
                      
                      echo Form::label('body', 'Body');
                      echo Form::textarea('body', '',['class'=>'form-control', 'placeholder'=>'Body']);
                      echo '<br/>';
               
                    echo Form::submit('Submit!', ['class'=> 'btn btn-success']);
                    echo Form::reset('Reset!', ['class'=> 'btn btn-primary']);
                   echo Form::close();
                ?>
     </div>
  
@endsection