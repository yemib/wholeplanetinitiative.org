

<!---thhe banner is here  ---->
  @extends('layouts.index')

@section('content')




  <?php

use App\board;

$management  = board::where('publish' , 'yes')->get();   ?>


    @section('title')

Board

@endsection


      <div class="page-title"   style=" background-repeat: no-repeat; background-size: cover">
   <div class="container">
    <div>
     <div class="row">
      <div class="col-lg-12">
       <div class="page-title-heading">
        <h1> <a  style="text-shadow: 2px 0 0 green, -2px 0 0 green, 0 2px 0 green, 0 -2px 0 green, 1px 1px green, -1px -1px 0 green, 1px -1px 0 green, -1px 1px 0 green; "  href="#">   OUR IMPACTFUL LEADERS ARE THE BEST</a> </h1>
       </div>

      </div>
     </div>
    </div>
   </div>
  </div>




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

          <div class="col-md-4">
       <article class="post">
        <div class="featured-post">
         <img src="{{ $management->image }}" alt="image">
        </div>
        <div class="content-post">

         <h4><a href="#">{{ $management->name }}</a></h4>

         <h5  style="color: green">  {{ $management->position }}  </h5>
         <p></p>
        </div>
       </article>
      </div>


           <?php   }?>




     </div>
    </div>
   </section>

   @endsection

