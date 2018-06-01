

@extends('layout.app')
           
           
           @section('content')

<div  style=" background:white">

 <h2 >Edit Post</h2>


      <form action="{{route('posts.update', $post->id)}}" method="POST" > 


               @csrf
        @method('PUT')

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" name="subject" value="{{$post->subject}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="firstname">First name:</label>
              <input type="text" class="form-control" name="firstname" value="{{$post->firstname}}">
            </div>
          </div>


          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lastname">Last name:</label>
              <input type="text" class="form-control" name="lastname" value="{{$post->lastname}}">
            </div>
          </div>



        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Body">Description:</label>
              
              <textarea rows="4" cols="50" name="body"  class="form-control" value="{{$post->body}}">
Enter text here...</textarea>
            </div>
          </div>

        <div class="row" >
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Update !</button>
          </div>
        </div>
        
  </form>

</div>


           @endsection