@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                            
                    <div class="card-body">


                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="container">
                             <a href="/posts/create" type="button" class="btn btn-primary btn-lg">Create Post !</a>
                             <hr>
                            </div>
                            

<div class="container">
                            @foreach($posts as $post)
                            <div class="card border-primary mb-3" style="max-width: 20rem;">
                                    <div class="card-header">{{$post->subject}}</div>
                                        <div class="card-body">
                                            <p class="card-text">{{$post->body}}</p>
                                            

                                        </div>
                                       
                                        <div class="container">
                                            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                                @csrf
                                               @method('PUT')
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                <a href="/posts/{{$post->id}}/edit" type="button"  class="btn btn-primary">Edit</a>

                                            </form>
                                            <span class="badge badge-danger">created at: {{$post->created_at}} By: {{$post->user->name}}</span>
                                            </div>

                            </div>

                            @endforeach
                            </div>
                    </div>
                 </div>
                </div>
            </div>
         </div>
     </div>
</div>
     
@endsection
