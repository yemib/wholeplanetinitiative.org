  <header id="header-part">
      <div class="header-top d-none d-lg-block">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="header-contact">
                          <ul>
                              <li><i class="fa fa-envelope"></i><a href="#">{{ $contact->email }}</a></li>
                              <li><i class="fa fa-phone"></i><span>{{ $contact->phone1 }}</span></li>
                          </ul>
                      </div> <!-- header contact -->
                  </div>

                  <!---
                    <div class="col-md-6">
                        <div class="header-right d-flex justify-content-end">
                            
                            <div class="login-register">
                                <ul  style="display: none">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="sign_up.php">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>    ---->
              </div> <!-- row -->
          </div> <!-- container -->
      </div> <!-- header top -->
      <div class="navigation">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <nav class="navbar navbar-expand-lg">
                          <a class="navbar-brand" href="/">
                <img width="50" height="50" src="/logo.png" alt="Logo">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse"
                              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-expanded="false" aria-label="Toggle navigation">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>

                          <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                      <a class="active" href="/">Home</a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="#">About Us</a>

                                <ul class="sub-menu">
                                     <li><a href="/page/1/about" class="nav-link">About Us</a></li>
                                     <li><a href="/management" class="nav-link">Management</a></li>
                                </ul>
                                  </li>


                                   <li class="nav-item"><a href="/gallery_view" class="nav-link">Media</a></li>
              <li class="nav-item"><a href="/event" class="nav-link">News</a></li>
              <li class="nav-item"><a href="/volunteer" class="nav-link">Volunteer Now</a></li>
             <!-- <li><a href="//management" class="nav-link">Management</a></li>  --->
              <li class="nav-item"><a href="/donate" class="nav-link">Donate</a></li>




                                  <!--
                                    <li class="nav-item">
                                        <a href="/download_page">Downloads</a>
 
                                    </li>  -->


                            

                                  <li class="nav-item">
                                      <a href="/contact-us">Contact</a>

                                  </li>
                              </ul>
                          </div>
                          <div style="display: none" class="right-icon text-right">
                              <ul>
                                  <li><a href="javascript:void(0)" id="search"><i class="fa fa-search"></i></a></li>
                                  <!--<li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>-->
                              </ul>
                          </div> <!-- right icon -->
                      </nav> <!-- nav -->
                  </div>
              </div> <!-- row -->
          </div> <!-- container -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
      </div>

  </header>
