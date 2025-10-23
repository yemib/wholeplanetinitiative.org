<?php

use App\page;
use App\contact_detail;
use App\logos;



$contact  = contact_detail::first();
$logo  = logos::first();
?>
@extends('home.layout')

@section('title')
Home

@endsection


@section('content')


<!--====== SEARCH BOX PART ENDS ======--> <!--====== SLIDER PART START ======-->
@include('home.slidder')
<!--====== SLIDER PART ENDS ======--> <!--====== BANNER PART START ======-->


<!--====== BANNER PART ENDS ======-->

<!--====== PUBLICATION PART START ======-->


<!--====== PUBLICATION PART ENDS ======-->
<!--====== COUNT DOWN PART START ======-->



<!--====== COUNT DOWN PART ENDS ======--> <!--====== BLOG PART START ======-->

<section id="course-part" class="pt-80 pb-50 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Latest from Our Blog</h5>
                    <h2> </h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <div class="row course-slide">


            <?php
            $what_we_do = App\servicess::where('publish', 'yes')
                ->orderby('created_at', 'desc')
                ->paginate(5);



            foreach ($what_we_do as $what_we_do) {

            ?>

                <div class="col-lg-4">

                    <div class="single-blog mt-5">
                        <div class="blog-thum">
                            <?php if ($what_we_do->image == '  ') {   ?>


                            <?php  } else {  ?>

                                <img src="{{$what_we_do->image}}" width="410" height="230" alt="">


                            <?php  } ?>
                            <!--<img src="images/blog/b-1.jpg" alt="Blog">-->
                        </div>

                        <?php
                        $service  = $what_we_do;

                        $modified_sentence = str_replace(' ', '_', $service->title);
                        $modified_sentence = str_replace('.', '',  $modified_sentence);

                        $modified_sentence;

                        ?>
                        <div class="blog-cont">
                            <a href="/newsletter/{{$service->id}}/{{$modified_sentence}}">
                                <h3>{{$what_we_do->title}}</h3>
                            </a>

                            <ul>


                                <!--<li><a href="#"><i class="fa fa-tags"></i>Education</a></li>-->
                            </ul>
                            <p>
                            <p></p>
                            </p>
                            <a class="read" href="/newsletter/{{$service->id}}/{{$modified_sentence}}">Read More...</a>
                        </div>
                    </div> <!-- single blog -->



                </div>


            <?php  } ?>






        </div> <!-- course slide -->

        <a class="btn btn-primary" href="/event"> View All </a>
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======--> <!--====== TEASTIMONIAL PART START ======-->

<section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-40">
                    <h5></h5>
                    <h6 style="color: white">
                        </h6>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slide mt-40">
            <?php //  $testimony = App\page::where('type'  ,  'testimony')->get();

            //foreach($testimony as $testimony) {  
            ?>

            <?php
                $vision  = App\page::find(2);
                $mission  = App\page::find(3);
                $mandate  = App\page::find(4);

                ?>


            <div class="col-lg-6">
                <!-- single testimonial -->
                 <h3 style="color: #fe8915;">Our Vision</h3>

                 <h6 style="color:white !important">
                        <?php  

                        $text_with_img = $vision->body;

                        $clean_text = strip_tags($text_with_img, '<p><a><strong><em><u><div>'); // Keep <p>, <a>, <strong>, <em>, <u> tags
                        
                        echo $clean_text;

                        ?>
                        
                        
                     
                    
                    
                            </h6>


            </div>

              <div class="col-lg-6">
                <!-- single testimonial -->
                 <h3  style="color: #fe8915;">Our Mission</h3>

                    <h6 style="color:white !important">

                        <?php  

                        $text_with_img = $mission->body;

                        $clean_text = strip_tags($text_with_img, '<p><a><strong><em><u><div>'); // Keep <p>, <a>, <strong>, <em>, <u> tags
                        
                        echo $clean_text;

                        ?>
                        
                      
                            </h6>


            </div>


            <?php  //} 
            ?>

        </div>
      
        <!-- testimonial slide -->
    </div> <!-- container -->
</section>

<!--====== TEASTIMONIAL PART ENDS ======--> <!--====== NEWS PART START ======-->




<!--====== EVENTS PART ENDS ======-->


@endsection