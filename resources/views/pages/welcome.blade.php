@extends('main')
@section('title','| Laravel Blog')
@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="">
@endsection
@section('content')
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to my Blog</h1>
          <p class="lead">Thankyou for visiting my website this is my first website in laravel this web site is about blogs.Please do read my blogs</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p> 
        </div>   
      </div>   
    </div>  <!-- end of .row-->  
    <div class="row">
      <div class="col-md-8">
        <div class="post">
          <h3>Post Title</h3>
          <p> meeting with us and have offered us very least amount. They have offered us an amount project in HLC 
          declined the offered which means govt. will use</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div> 
        <hr> 
         <div class="post">
          <h3>Post Title</h3>
          <p> meeting with us and have offered us very least amount. They have offered us an amount project in HLC 
          declined the offered which means govt. will use</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div> 
        <hr>
         <div class="post">
          <h3>Post Title</h3>
          <p> meeting with us and have offered us very least amount. They have offered us an amount project in HLC 
          declined the offered which means govt. will use</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div> 
        <hr>
         <div class="post">
          <h3>Post Title</h3>
          <p> meeting with us and have offered us very least amount. They have offered us an amount project in HLC 
          declined the offered which means govt. will use</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>       
      </div>  
      <div class="col-md-3 col-md-offset-1">
        <h2>Slidebar</h2>  
      </div>
    </div>
 @endsection
 @section('script')
  <!-- <script> confirm('I Loaded Up Some JS') </script> -->
 @endsection