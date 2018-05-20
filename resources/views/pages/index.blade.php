


@extends('layout.app')

@section('content')



<div class="jumbotron">
  <h1 class="display-3">Welcome to Ahmed Abdel Khalek site!</h1>
<p class="lead">This is a simple laravel Heroku project.</p>
  <hr class="my-4">  




<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/1.jpg" alt="Los Angeles" width="900" height="300">
  </div>
  <div class="carousel-item">
    <img src="img/2.jpg" alt="Chicago" width="900" height="300">
  </div>
  <div class="carousel-item">
    <img src="img/3.jpg" alt="New York" width="900" height="300">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>




                </div>








                      

                @endsection