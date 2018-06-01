

@extends('layout.app')
           
           
           @section('content')

<div  style=" background:white">

 <h2 class="container">Create new post</h2>

      <form method="post" action="{{URL::to('/')}}" enctype="multipart/form-data"> 

        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" name="subject">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="firstname">First name:</label>
              <input type="text" class="form-control" name="firstname">
            </div>
          </div>


          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lastname">Last name:</label>
              <input type="text" class="form-control" name="lastname">
            </div>
          </div>



        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Body">Description:</label>
              
              <textarea rows="4" cols="50" name="body"  class="form-control">
Enter text here...</textarea>
            </div>
          </div>

        <div class="row" >
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Create !</button>
          </div>
        </div>
        
  </form>

</div>


           @endsection