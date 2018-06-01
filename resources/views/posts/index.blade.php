
@extends('layout.app')

@section('content')
<div class="content">



<div class="container">
  <h1 class="display-3">Posts !!</h1>

@if(count($posts)>0)

@foreach($posts as $post)

<div class="card bg-light mb-3" style="max-width: 100rem;">
  <div class="card-header"><h3>{{$post->firstname}} {{$post->lastname}}</h3></div>
  <div class="card-body">
    <h2 class="card-title">{{$post->subject}}</h2>
    <span class="badge badge-danger">created at: {{$post->created_at}}</span>
    <a href="/posts/{{$post->id}}" type="button" class="btn btn-primary ">More</a>


  </div>
</div>
@endforeach
{{$posts->links()}}
@else

<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <p class="mb-0">There is no posts here</a>.</p>
</div>

@endif



  <hr class="my-4">  



                </div>


                
                @endsection