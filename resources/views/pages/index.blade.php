


@extends('layout.app')

@section('content')



<div class="container">
  <h1 class="display-3" >Welcome to </h1>
  <h1 class="display-3" >Ahmed Abdel Khalek website!</h1>

<p class="lead">This is a simple laravel Heroku project.</p>
  <hr class="my-4">  
  <h6 class="display-4" >What you can do here?</h6>

<p class="lead">
  <p>=> You can create your account from register link.
    <a class="btn btn-primary btn-sm" href="/register" role="button">Register Now</a>
    </p>

    <p>
    =>If you have an account you can login from login link.
    <a class="btn btn-primary btn-sm" href="/login" role="button">Login</a>
  </p>
  <p>
  =>You can see your posts abd other member posts here.
  </p>
  <p>
  =>You can't create any post if you are guest, you must be member to do it.
  </p>
  <p>
  =>when you logged in, you can create,edit and delete your posts.
  </p>
  </p>





                @endsection