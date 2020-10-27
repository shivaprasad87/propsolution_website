<?php 
$property->gallery = json_decode(json_encode($property->gallery),true);
$gallery_images = array();
foreach($property->gallery as $gallery) {
  array_push($gallery_images, $gallery['image']);
} 
if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_desktop_banners')) != null ) {
    if(($m_images = $this->properties_model->getWhere(array('property_id' => $property->id),
        'property_mobile_banners')) != null)
    {

    $images = json_decode( json_encode($images), true);
    $m_images = json_decode( json_encode($m_images), true);
    $total_images =array_merge($images);
  //  print_r($m_images);die;

    $ban=0;
    $side_image='';
    //print_r($total_images);die;
    foreach ($total_images as $image) {
          array_push($gallery_images, $images[$ban]['banner_path']);
          array_push($gallery_images, $m_images[$ban]['mobile_banner_path']);
          
       
      }
    }
  }  
         $this->load->view('inc/head2'); $this->load->view('inc/header');

?>
<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Property Details </h1><!-- 
        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
        <ol class="breadcrumb text-center">
          <li><a href="<?=base_url();?>">Home</a></li>
          <li><a href="<?=base_url('listing');?>">Properties</a></li>
          <li class="active">Property Details </li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Property Detail Start -->
<section id="property" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <div class="col-md-8 listing1 property-details">
        <h2 class="text-uppercase"><?= $property->title ? $property->title : '' ?></h2>
        <p class="bottom30"><?= $property->location . ', ' . $property->city_name ?></p>
        <div id="property-d-1" class="owl-carousel">
          <?php
          foreach ($gallery_images as $key => $value) {
            ?>
          <div class="item"><img src="<?=base_url($value);?>" alt="image" style="width: 100px !important;height: 100px !important;"/></div>

            <?php
          }
          ?> 
        </div>
        <div id="property-d-1-2" class="owl-carousel">
          <?php
           foreach ($gallery_images as $key => $value) {
            ?>
          <div class="item"><img src="<?=base_url($value);?>" alt="image"/></div>

            <?php
          }
          ?> 
        </div>
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
          <span><i class=" icon-microphone"></i>2 Office Rooms</span>
          <span><i class="icon-safety-shower"></i>1 Bathroom</span>
          <span><i class="icon-old-television"></i>TV Lounge</span>
          <span><i class="icon-garage"></i>1 Garage</span>
        </div>
        <h2 class="text-uppercase">Property Description</h2>
        <p class="bottom30"><?= $property->description?$property->description:''; ?> </p>
        <!-- <div class="text-it-p bottom40">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet. consectetuer elit sed diam power nonummy</p>
        </div> -->
        <h2 class="text-uppercase bottom20">Quick Summary</h2>
        <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Property Id</b></td>
                  <td class="text-right">5456</td>
                </tr>
                <tr>
                  <td><b>Price</b></td>
                  <td class="text-right">rs 32 l</td>
                </tr>
                <tr>
                  <td><b>Property Size</b></td>
                  <td class="text-right">5,500 ft2</td>
                </tr>
                <tr>
                  <td><b>Bedrooms</b></td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><b>Bathrooms</b></td>
                  <td class="text-right">3</td>
                </tr>
                <tr>
                  <td><b>Available From</b></td>
                  <td class="text-right">22-04-2020</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Status</b></td>
                  <td class="text-right">Rent</td>
                </tr>
                <tr>
                  <td><b>Year Built</b></td>
                  <td class="text-right">1991</td>
                </tr>
                <tr>
                  <td><b>Garages</b></td>
                  <td class="text-right">1</td>
                </tr>
                <tr>
                  <td><b>Cross Streets</b></td>
                  <td class="text-right">Nordoff</td>
                </tr>
                <tr>
                  <td><b>Floors</b></td>
                  <td class="text-right">Carpet - Ceramic Tile</td>
                </tr>
                <tr>
                  <td><b>Plumbing</b></td>
                  <td class="text-right">Full Copper Plumbing</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Features</h2>
        <div class="row bottom40"> 
            <?php
            $i=0;
              if (isset($property->amenities) && $property->amenities) {
                  foreach ($property->amenities as $amenity) {
                      if($i==0 || $i==4 || $i==8 || $i==12 || $i==16 || $i==20 || $i==24 )
                      {
                        if($i>0)
                          echo "</div>";
                        
                        echo '<div class="col-md-4 col-sm-6 col-xs-12"><ul class="pro-list">';
                      }
                            echo '<li>'.ucwords($amenity->name).'</li>';
                      if($i==4 || $i==8 || $i==12 || $i==16 || $i==20 || $i==24 )
                      {
                        echo '</ul></div>';
                      } 
                      $i++;
                  }
              }
              ?> 
        </div>
        <h2 class="text-uppercase">Features</h2>
        <p class="bottom20">Amenities and Features of <?= $property->title ? $property->title : '' ?>
        </p>
        <div class="row bottom40">
           <?php
            if (isset($property->amenities) && $property->amenities) {
                foreach ($property->amenities as $amenity) {
                    ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pro-img">
              <figure class="wpf-demo-gallery">
                <img src="<?= base_url('uploads/amenities/' . $amenity->image) ?>" alt="image"/>
                <figcaption class="view-caption">    
                  <a data-fancybox-group="gallery" class="fancybox" href="<?= base_url('uploads/amenities/' . $amenity->image) ?>"><i class="icon-focus"></i></a>
                </figcaption>
              </figure>
            </div>
          </div> 
          <?php } } ?> 
        </div>
        <?php
        if($property->walkthrough)
        {
            ?>
        <h2 class="text-uppercase bottom20">Video Presentation</h2>
        <div class="row bottom40">
          <div class="col-md-12 padding-b-20">
            
              <div>
             <iframe width="100%" height="450" src="https://www.youtube.com/embed/<?= getYoutubeVideoId($property->walkthrough) ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
              </div>
              
            <!-- <div class="pro-video">
              <figure class="wpf-demo-gallery">
                <video  class="video" controls>
                  <source src="video/video.mp4" type="video/mp4">
                  <source src="video/video.html" type="video/ogg">
                </video>
              </figure>
            </div> -->
          </div>
        </div>
        <?php
          }
              ?>
        <h2 class="text-uppercase bottom20">Property Map</h2>
        <div class="row bottom40">
          <div class="col-md-12 bottom20">
            <div class="property-list-map">
            <img src="<?= base_url("uploads/$property->slug/map/$property->map") ?>" class="small-map" alt="<?= $property->location_alt?>" style="width: 100% !important;    height: 100% !important;">
          </div>
            <!-- <div class="property-list-map">
              <div id="property-listing-map" class="multiple-location-map" style="width:100%;height:430px;"></div>
            </div> -->
          </div>
          <div class="social-networks">
            <div class="social-icons-2">
              <span class="share-it">Share this Property</span>
              <span><a href="https://www.facebook.com/sharer/sharer.php?u=<?=current_url();?>"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
              <span><a href="https://twitter.com/share?url=<?=current_url();?>"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
              <span><a href="https://api.whatsapp.com/send?phone=<?= $social_links->whatsapp ?>&text=Hi, I am Intrested in propsolutions. <?=current_url();?> "><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp </a></span>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <h2 class="text-uppercase bottom20">Contact Us</h2>
       
        <div class="col-sm-12 bottom40">
            <form action="<?= site_url('home/send') ?>" method="post" class="callus">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number" >
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <textarea class="form-control" name="sugg" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 row">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <!-- <div class="row">
            <div class="col-sm-10">
            <h2 class="text-uppercase top20">Similar Properties</h2>
            <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
            <div class="col-sm-12"><div id="two-col-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">Rs 68 Lacs</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>Lorem Ipsum, Banglore</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <a href="property_detail.html">
                      <p class="pull-md-left"><i class="icon-arrow-right3"></i>&nbsp;Know More </p>
                    </a>
                      <ul class="pull-right">
                      
                        <li><a href="#five" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="five">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">Rs 68 Lacs</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>Lorem Ipsum, Banglore</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <a href="property_detail.html">
                      <p class="pull-md-left"><i class="icon-arrow-right3"></i>&nbsp;Know More </p>
                    </a>
                      <ul class="pull-right">
                      
                        <li><a href="#four" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="four">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">Rs 68 Lacs</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>Lorem Ipsum, Banglore</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <a href="property_detail.html">
                      <p class="pull-md-left"><i class="icon-arrow-right3"></i>&nbsp;Know More </p>
                    </a>
                      <ul class="pull-right">
                      
                        <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="six">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">Rs 68 Lacs</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>Lorem Ipsum, Banglore</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <a href="property_detail.html">
                      <p class="pull-md-left"><i class="icon-arrow-right3"></i>&nbsp;Know More </p>
                    </a>
                      <ul class="pull-right">
                      
                        <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="three">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div></div>
          </div> -->
          
          <div class="col-sm-12 text-center heading_space">
            <ul class="pager">
              <li><a href="#.">1</a></li>
              <li class="active"><a href="#.">2</a></li>
              <li><a href="#.">3</a></li>
            </ul>
          </div>
      </div>
      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
          </div>
          <form class="callus">
            <div class="single-query form-group col-sm-12">
              <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option selected="" value="any">Location</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Property Type</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Property Status</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Beds</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Baths</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10">
              <div class="single-query-slider">
                <label><strong>Price Range:</strong></label>
                <div class="price text-right">
                  <span>rs</span>
                  <div class="leftLabel"></div>
                  <span> to rs</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </form>
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".html" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Show more search options</div>
                <div class="text-2 hide">less more search options</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">Lorem Ipsum, Banglore</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">Lorem Ipsum, Banglore</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">Lorem Ipsum, Banglore</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">Rs 68 Lacs- <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">Rs 68 Lacs- <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- Property Detail End -->
<?php
$this->load->view('inc/footer'); 

?>
