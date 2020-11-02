<body>
  <header class="layout_double">
    <div class="header-upper dark">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="logo">
            <a href="<?= base_url();?>"><img alt="" src="<?=base_url('assets/')?>images/logo.JPEG" class="img-responsive"></a>
            </div>
          </div>
        <!--Info Box-->
          <div class="col-md-9 col-sm-12 right">
            <div class="info-box first">
              <div class="icons"><i class="icon-telephone114"></i></div>
              <ul>
                <li><strong>Phone Number</strong></li>
                <li><a href="tel:+918446565216">+91 84465 65216</a></li>
              </ul>
            </div>
            <div class="info-box hidden-sm">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>City</strong></li>
              <li>Pune</li>
            </ul>
          </div>
            <div class="info-box">
              <div class="icons"><i class="icon-icons142"></i></div>
              <ul>
                <li><strong>Email Address</strong></li>
                <li><a href="mailto:info@propsolutionsservices.com">info@propsolutionsservices.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
      <div class="container">
            <div class="attr-nav">
              <ul class="social_share clearfix">
              <li><a href="<?= $social_links->facebook ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?= $social_links->twitter ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=<?= $social_links->whatsapp ?>&text=Hi, I am Intrested in propsolutions" class="google"><i class="icon-whatsapp"></i></a></li>
              </ul>
            </div> 
              
          <!-- Start Header Navigation -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand sticky_logo" href="<?=base_url();?>"><img src="<?=base_url('assets/')?>images/logo-white.JPEG" class="logo" alt=""></a>
          </div><!-- End Header Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
              <li class="active"><a href="<?= base_url();?>">Home</a></li>
              
                <li>
                  <a href="<?= base_url('listing');?>" s>Listing</a>
                
                </li>

                <li>
                  <a href="<?= base_url('about');?>" >About Us</a>
                
                </li>
               
                  <!-- <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                      <li>
                        <div class="row">
                          <div class="col-menu col-md-3">
                            <h5 class="title">PROPERTIES LIST</h5>
                            <div class="content">
                              <ul class="menu-col">
                                <li><a href="<?= base_url('listing');?>">Properties List</a></li>
                              <li><a href="property_detail.html">Single Property</a></li>
                                
                              </ul>
                            </div>
                          </div>
                          <div class="col-menu col-md-9">
                            <h5 class="title bottom20">PROPERTIES LIST</h5>
                            <div class="row">
                              <div id="nav_slider" class="owl-carousel">
                                <div class="item">
                                  <div class="image bottom15"> 
                                    <img src="<?=base_url('assets/')?>images/nav-slider1.jpg" alt="Featured Property"> 
                                    <span class="nav_tag yellow text-uppercase">Exclusive</span>
                                  </div>
                                  <h4><a href="property_detail.html">Park Avenue Apartment</a></h4>
                                  <p>Lorem Ipsum</p>
                                </div>
                                <div class="item">
                                  <div class="image bottom15"> 
                                    <img src="<?=base_url('assets/')?>images/nav-slider2.jpg" alt="Featured Property"> 
                                    <span class="nav_tag yellow text-uppercase">Exclusive</span>
                                  </div>
                                  <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                                  <p>Lorem Ipsum</p>
                                </div>
                                <div class="item">
                                  <div class="image bottom15"> 
                                    <img src="<?=base_url('assets/')?>images/nav-slider3.jpg" alt="Featured Property"> 
                                    <span class="nav_tag yellow text-uppercase">Exclusive</span>
                                  </div>
                                  <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                                  <p>Lorem Ipsum</p>
                                </div>
                                <div class="item">
                                  <div class="image bottom15"> 
                                    <img src="<?=base_url('assets/')?>images/nav-slider1.jpg" alt="Featured Property"> 
                                    <span class="nav_tag yellow text-uppercase">Exclusive</span>
                                  </div>
                                  <h4><a href="property_detail.html">Park Avenue Apartment</a></h4>
                                  <p>Lorem Ipsum</p>
                                </div>
                                <div class="item">
                                  <div class="image bottom15"> 
                                    <img src="<?=base_url('assets/')?>images/nav-slider2.jpg" alt="Featured Property"> 
                                    <span class="nav_tag yellow text-uppercase">Exclusive</span>
                                  </div>
                                  <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                                  <p>Lorem Ipsum</p>
                                </div>
                                <div class="item">
                                  <div class="image bottom15"> 
                                    <img src="<?=base_url('assets/')?>images/nav-slider3.jpg" alt="Featured Property"> 
                                    <span class="nav_tag yellow text-uppercase">Exclusive</span>
                                  </div>
                                  <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                                  <p>Lorem Ipsum</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li> -->
                <!-- <li class="dropdown megamenu-fw">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                  <ul class="dropdown-menu megamenu-content bg" role="menu">
                    <li>
                      <div class="row">
                        <div class="col-menu col-md-3">
                          <h5 class="title">PROPERTY LISTINGS</h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li><a href="listing.html">PROPERTY List</a></li>
                             
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-3">
                          <h5 class="title">PROPERTY LISTINGS</h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li><a href="property_detail.html">Single PROPERTY</a></li>
                             
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-3">
                          <h5 class="title">PROPERTY DETAIL</h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li><a href="property_detail.html">Property Detail </a></li>
                             
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-3">
                          <h5 class="title">OTHER PAGES</h5>
                          <div class="content">
                            <ul class="menu-col">
                           
                              
                              <li><a href="404.html">404 Error</a></li>
                              <li><a href="<?= base_url('contact');?>">Contact Us</a></li>
                              <li><a href="testimonial.html">Testimonials</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> -->
                
                <!-- <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                  <ul class="dropdown-menu">
                   <li><a href="header-style.html">Header Style1</a></li>
                  
                    <li><a href="testimonial.html">Testimonial </a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    
                      <li><a href="404.html">404 Error </a></li>
                  </ul>
                </li> -->
                <li><a href="<?= base_url('contact');?>">Contact Us</a></li>
               
              </ul>
          </div>
          </div>
    </nav>
  </header>


