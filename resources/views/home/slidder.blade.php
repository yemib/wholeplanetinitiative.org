  
  <?php    

use App\slidders;
use App\page;

   $moving_news  = page::find(17);
		   

$select_slide  = slidders::where('publish' , 'yes')->orderby('created_at', 'desc')
    ->paginate(80);
?>

    <section   style="background-color: #3d56749d; 
    background-image: url('/logo.png');
    background-size: contain !important;
        background-position: bottom center !important ; 
        background-repeat: no-repeat ;
    " id="slider-part" class="slider-active ">
       
       <?php   foreach($select_slide as $select_slide){    ?>
        <div class="single-slider bg_cover pt-150" 
        style="background-image: url({{$select_slide->image}}); 
        background-size: contain !important;
         background-position: bottom !important ; 
          " data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 desktop-margin"  >
                        <div class="slider-cont"  >
                            <h2  data-animation="fadeInLeft" data-delay="1s" 
                             style="color: white ;">{!!$select_slide->text1!!}
                            </h2>
                            <br/>
                            <br/>
                            <p style="font-size: 1cm; 
                            line-height: normal; 
                             -webkit-text-stroke: 1px #b1ababff;
                              text-shadow: 1px 1px 0 #b1ababff, 
                              -1px -1px 0 #b1ababff, -1px 1px 0 #b1ababff,
                               1px -1px 0 #b1ababff, 0 1px 0 #b1ababff, 0 -1px 0 #b1ababff;"
                               data-animation="fadeInUp"
                                data-delay="1.3s">{{$select_slide->text2}}</p>     
                                
                                <ul>
                                <li  style="display: none"><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="about_us.php?page_id=1">Read More</a></li>
                                <li  style="display: none"><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn" href="sign_up.php">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
        <?php   } ?>
		
    </section>
    