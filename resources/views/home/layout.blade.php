<?php 
use App\page;
use App\contact_detail;
use App\logos;



$contact  = contact_detail::first();
$logo  = logos::first();
?>

<!doctype html>
<html lang="en">



<head>

<?php
         $description = 'Explore the latest insights on
         climate change, global warming, and sustainable living. Our platform is dedicated
         to raising awareness, offering solutions for a low-carbon lifestyle, and advocating for
         environmental conservation. Join us in the fight against climate change and be part of the
         movement for a greener, more sustainable future.';
        ?>
    <!-- ====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="@yield('title') | {{  $description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="keywords" content="Climate change, Global warming, Carbon footprint,
     Renewable energy, Greenhouse gases, Sustainable living, Climate action, Climate science,
      Environmental conservation, Eco-friendly practices, Climate policy,
      Sustainable development, Climate resilience, Carbon offset, Clean energy solutions,
       Climate adaptation, Biodiversity conservation, Climate awareness, Climate crisis,
     Low-carbon lifestyle, Green technology, Climate justice,
      Environmental activism, Sustainable agriculture, Ocean conservation">

      <meta name="author" content="ADEBUKOLA MARGARET">

       <!-- Open Graph meta tags for social media -->
    <meta property="og:title" content="@yield('title') {{ config('app.name')  }}">
    <meta property="og:description" content="@yield('title') | {{  $description }}">

  <meta property="og:url" content="@yield('facebook_link')"> 

    <meta property="og:image" content="@yield('logo')">


   <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image">
   {{--  <meta name="twitter:site" content="@YourTwitterHandle"> --}}
    <meta name="twitter:title" content="@yield('title') | {{  config('app.name') }} ">
    <meta name="twitter:description" content="@yield('title') | {{  $description }}">
    <meta name="twitter:image" content="@yield('logo')">

   @Yield('meta')

    <!--====== Title ======-->
 <title> @yield('title') Whole Planet Initiative</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/logo.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="/home/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="/home/css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="/home/css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="/home/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="/home/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/home/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="/home/css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="/home/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="/home/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="/home/css/responsive.css">
    
    <link rel="stylesheet" href="/home/css/general.css">
  
  
  <script type="text/javascript" 
  src="https://platform-api.sharethis.com/js/sharethis.js#property=5ecbc0f7e15c0d001255503a&product=inline-share-buttons" async="async"></script>
  
  
</head>
<body>
   
    <!--====== PRELOADER PART START ======-->

    <div   class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->    
    <!--====== HEADER PART START ======-->
  
  @include('home/menu')
    
    <!--====== HEADER PART ENDS ======-->
	
	
	
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="search_result.php" method="post" name="searchNA" id="searchNA">
                <input type="text" placeholder="Search" name="searchTXT" id="searchTXT" required="required">
				 <input type="hidden" name="STexT" id="STexT" value="SEARCH TEXT">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>
    
   
      @yield('content')
            
	    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="/">
                               
                             
                                <div  style="height: 100px  ; background-image: url({{$logo->image}}); background-repeat: no-repeat ; background-position: center ; background-size: contain"> </div>
                                
                                </a>
                            </div>
                            
                            
                            <p  style="display: none"></p>
                            
                            
                            
                            <ul class="mt-20">
                                <li><a href="{{$contact->facebook}}"><i class="fa fa-facebook-f"></i></a></li>
                                
                                <li><a href="{{$contact->linkedin}}"><i class="fa fa-linkedin"></i></a></li> 
                                
                                  <li><a href="{{$contact->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                  
                                <li><a href="{{$contact->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                              
                            </ul>
                        </div> <!-- footer about -->
                    </div>
					
					
					                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                               
                               
                                <li>
                                   
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    
                                    <div class="cont">
                                        <p>{{$contact->address}}</p>
                                    </div>
                                    
                                </li>
                                
                                
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{$contact->phone1}}</p>
                                    </div>
                                </li>
                                
                                
                                
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{$contact->email}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
					
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="/"><i class="fa fa-angle-right"></i>Home</a></li>
                                
                                
                                <li><a href="/event"><i class="fa fa-angle-right"></i>Blog</a></li>
                                
                                
                               
                                <!--
                                
                                <li><a href="/downloads"><i class="fa fa-angle-right"></i>Downloads</a></li>  -->
                                
								
                            </ul>
                            <ul>
								
                               
                               
                               
                                
                           
                          
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
								<li><a href="/contact-us"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                               
                               
                                
                                
                                
                                
                            </ul>
                        </div> <!-- support -->
                    </div>
					
					

					
					
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p>&copy; Copyrights {{ date('Y')}} {{ config('app.name')}}. All Rights Reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p> </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
	
	
	    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->   

   

   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
   
	 <!--====== jquery js ======-->
    <script src="/home/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/home/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/home/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="/home/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="/home/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="/home/js/waypoints.min.js"></script>
    <script src="/home/js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="/home/js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="/home/js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="/home/js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="/home/js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="/home/js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="/home/js/main.js"></script>
    
</body>



</html>
