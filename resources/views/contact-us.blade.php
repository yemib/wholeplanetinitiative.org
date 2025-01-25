<!---thhe banner is here  ---->
@extends('layouts.index2')
<?php

use App\contact_detail;

$contact = contact_detail::first();

?>

@section('content')
    <header class="jumbotron text-center bg-success text-white py-5">
        <div class="container">
            <h1 class="display-4 mb-4" style="padding-top: 50px;"> CONTACT US </h1>
        </div>
    </header>

    <div class="page-header title-area style-1">
        <div class="header-title " style="background-position: 50% 8px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title"></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="content" class="site-content">

        <div class="container">
            <div class="row">

                <div id="primary" class="content-area col-md-12">
                    <main id="main" class="site-main">



                        <article id="post-29" class="post-29 page type-page status-publish hentry no-thumb">
                            <header class="entry-header">
                                <h2 class="entry-title">CONTACT US</h2>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="container">
                                        <div class="row">


                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="fh-contact-box ">
                                                            <div class="contact-box-title">
                                                                <h3>Visit Our Office</h3>
                                                            </div>
                                                            <div class="info">
                                                                <p>
                                                                    <span class="info-title">Street: </span>
                                                                    <div  style="word-wrap: break-word;"
                                                                        class="info-details">{{ $contact->address }}  &nbsp; &nbsp;</div>
                                                                </p>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="fh-contact-box ">
                                                            <div class="contact-box-title">
                                                                <h3>Quick Contact</h3>
                                                            </div>
                                                            <div class="info">
                                                                <p  style="color: black">
                                                                    <span class="info-title">Phone 1: </span>
                                                                    <span class="info-details">{{ $contact->phone1 }}</span>
                                                                </p>
                                                                <p style="color: black">
                                                                    <span class="info-title">Phone 2: </span>
                                                                    <span class="info-details">{{ $contact->phone2 }}</span>
                                                                </p>
                                                                <p style="color: black">
                                                                    <span class="info-title">Email: </span>
                                                                    <span class="info-details">{{ $contact->email }}</span>
                                                                </p>




                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1549571305865">
                                    <div class="container">
                                        <div class="row">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="fh-section-title clearfix  text-center style-1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->



                    </main><!-- #main -->
                </div><!-- #primary -->

            </div> <!-- .row -->
        </div> <!-- .container -->
    </div><!-- #content -->



    <style>
.info{

    color: black;
}

    </style>
@endsection
