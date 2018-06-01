
@extends('layout.app')

@section('content')
<div class="content">



<div class="container">
  <h1 class="display-3">Post !!</h1>



<div class="card bg-light mb-3" style="max-width: 100rem;">
  <div class="card-header"><h3>{{$post->firstname}} {{$post->lastname}}</h3></div>
  <div class="card-body">
    <h2 class="card-title">{{$post->subject}}</h2>
    <p class="card-text">{{$post->body}}</p>
    <span class="badge badge-danger">created at: {{$post->created_at}}</span>
    

<form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
        @method('PUT')
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
            <a href="/posts/{{$post->id}}/edit" type="button"  class="btn btn-primary">Edit</a>

          </form>
  </div>
  
</div>

  <hr class="my-4">  
  



       

  <a href="/posts" type="button"  class="btn btn-primary">Back</a>


                </div>


                
                @endsection