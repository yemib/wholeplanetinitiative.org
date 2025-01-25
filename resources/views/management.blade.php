  @extends('layouts.index2')

@section('content')




<?php

use App\management;

$management  = management::where('publish' , 'yes')->get();   ?>

@section('title')

  Management

@endsection



<header class="jumbotron text-center bg-success text-white py-5">
    <div class="container">
        <h1 class="display-4 mb-4" style="padding-top: 50px;"> Management Team </h1>
    </div>
</header>




   <section class="flat-features-2">
    <div class="container">
     <div class="row">
      <div class="col-lg-12">
       <div class="title-section">
        <p>  </p>
        <div class="content-inner clearfix">
         <div class="wrap-contentt">
          <h2><a href="#"></a></h2>
         </div>

        </div>
       </div>
      </div>


       <?php   foreach($management  as $management){   ?>

          <div class="col-md-12">
       <article class="post">
        <div class="featured-post">
         <img data-src="{{ $management->image }}" alt="image"  loading="Lazy"   style="height: 200px  ; width:auto">
        </div>
        <div class="content-post">

         <h4><a href="#">{{ $management->name }}</a></h4>

         <h5  style="color: green">  {{ $management->position }}  </h5>
         <p  style="color: black ; font-weight:bolder">{{ $management->description }}</p>
        </div>
       </article>
       <hr/>
      </div>


           <?php   }?>






     </div>
    </div>
   </section>

   @endsection
