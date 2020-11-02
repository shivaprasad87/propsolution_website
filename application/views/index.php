<!--Slider-->
<div class="rev_slider_wrapper">
  <div id="rev_eight" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <?php $desk = 0;
        foreach ($sliders as $slider) {
            $img=array();
            $img=explode('.', $slider->image);
           
        ?>
      <li data-transition="fade">
        
        <img src="<?= base_url('uploads/sliders/' .  $slider->image) ?>" alt="" data-bgposition="center center" data-bgfit="cover">
        <!-- <div class=" tp-caption tp-resizeme"
          data-start="1300"
          data-x="['left','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on" 
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <p class="topper">Rs 3 Lacs Apartment</p>
          <div class="white_cap">
            <div class="price">Exclusive</div>
            <div class="white_cont bottom10">
              <h3 class="bottom10 top15">Park Avenue Apartment</h3>
              <p class="bottom15">Lorem ipsum dolor sit amet, adipiscing elit, <br> sed diam power...</p>
              <a class="btn-more" href="#.">
                <i><img src="<?=base_url('assets/')?>images/arrowl.png" alt="arrow"></i>
                <span>Contact Me</span>
                <i><img src="<?=base_url('assets/')?>images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span></div>
              <div class="col-xs-6"><span><i class="icon-bed"></i>3 Bedrooms</span> </div>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-pool-stairs"></i>Swimming Pool</span> </div>
              <div class="col-xs-6"><span><i class="icon-garage"></i>1 Garage</span></div>
            </div>
            <div class="bottom_text top10">
              <p> <i class="icon-icons74"></i>Lorem Ipsum ,Bangalore</p>
            </div>
          </div>
        </div> -->
      </li>
      <?php $desk++;
        
            } ?>
<!--       <li data-transition="fade">
        <img src="<?=base_url('assets/')?>images/home8-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="tp-caption tp-resizeme"
          data-x="['left','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <p class="topper">Rs 3 Lacs Apartment</p>
          <div class="white_cap">
            <div class="price">Exclusive</div>
            <div class="white_cont bottom10">
              <h3 class="bottom10 top15">Park Avenue Apartment</h3>
              <p class="bottom15">Lorem ipsum dolor sit amet, adipiscing elit, <br> sed diam power...</p>
              <a class="btn-more" href="#.">
                <i><img src="<?=base_url('assets/')?>images/arrowl.png" alt="arrow"></i>
                <span>Contact Me</span>
                <i><img src="<?=base_url('assets/')?>images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span></div>
              <div class="col-xs-6"><span><i class="icon-bed"></i>3 Bedrooms</span> </div>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-pool-stairs"></i>Swimming Pool</span> </div>
              <div class="col-xs-6"><span><i class="icon-garage"></i>1 Garage</span></div>
            </div>
            <div class="bottom_text top10">
              <p> <i class="icon-icons74"></i>Lorem Ipsum ,Bangalore</p>
            </div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="<?=base_url('assets/')?>images/home8-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="tp-caption tp-resizeme"
          data-x="['left','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <p class="topper">Rs 3 Lacs Apartment</p>
          <div class="white_cap">
            <div class="price">Exclusive</div>
            <div class="white_cont bottom10">
              <h3 class="bottom10 top15">Park Avenue Apartment</h3>
              <p class="bottom15">Lorem ipsum dolor sit amet, adipiscing elit, <br> sed diam power...</p>
              <a class="btn-more" href="#.">
                <i><img src="<?=base_url('assets/')?>images/arrowl.png" alt="arrow"></i>
                <span>Contact Me</span>
                <i><img src="<?=base_url('assets/')?>images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span></div>
              <div class="col-xs-6"><span><i class="icon-bed"></i>3 Bedrooms</span> </div>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-pool-stairs"></i>Swimming Pool</span> </div>
              <div class="col-xs-6"><span><i class="icon-garage"></i>1 Garage</span></div>
            </div>
            <div class="bottom_text top10">
              <p> <i class="icon-icons74"></i>Lorem Ipsum ,Bangalore</p>
            </div>
          </div>
        </div>
      </li> -->
    </ul>
    
  </div>
</div>


<!--Slider ends-->


        
<!-- Property Search area Start -->
<!-- <section class="property-query-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="uppercase">Advanced Search</h2>
        <p class="heading_space"> Wehave Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <form class="callus" action="<?=site_url('listing')?>" method="post">
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')" name="keyword"  value="<?= $keyword ? $keyword : '' ?>">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="city" id="city">
                <option selected="" value="">City</option>
                <?php
                foreach ($cities as $cit) {
                  echo "<option value='".$cit->id."'>".$cit->name."</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="location">
                <option selected="" value="">Location</option>
                <?php
                foreach ($locations as $loc) {
                  echo "<option value='".$loc->id."'>".$loc->name."</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="property_type">
                <option class="active" value="">Property Type</option>
               <?php
                foreach ($property_types as $property_types) {
                  echo "<option value='".$property_types->id."'>".$property_types->name."</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="property_status_id">
                <option class="active" value="">Property Status</option>
                <?php
                foreach ($property_status as $property_status) {
                  echo "<option value='".$property_status->id."'>".$property_status->name."</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row search-2">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bhk">
                    <option value="0"class="active">Min BHK</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="baths">
                    <option value="0" class="active">Min Baths</option>
                   <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
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
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8">
              <div class="single-query-slider">
                <label>Price Range:</label>
                <div class="price text-right">
                  <span>Rs</span>
                  <div class="leftLabel"></div>
                  <span> to Rs</span>
                  <div class="rightLabel"></div>
                  <input type="hidden" name="budget" id="budget" value="">
                  <script>
                    var b = $(".leftLabel").text()+"-"+$(".rightLabel").text();
                    $("#budget").val('b');
                  </script>

                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-right form-group">
              <button type="submit" class="btn-blue border_radius top15">Search</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="group-button-search">
      <a data-toggle="collapse" href=".html" class="more-filter">
        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
        <div class="text-1">Show more search options</div>
        <div class="text-2 hide">less more search options</div>
      </a>
    </div>
    <div class="search-propertie-filters collapse">
      <div class="container-2">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Property Search area End -->


<!-- Latest Property -->
  <section id="deals" class="padding bg_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h2 class="uppercase">Featured Properties</h2>
          <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
        </div>
      </div>
      <div class="row">
        <!-- <div class="three-item owl-carousel"> -->
                      <?php 
                      function lt($text, $l) {
                  if (str_word_count($text, 0) > $l) {
                      $words = str_word_count($text, 2);
                      $pos   = array_keys($words);
                      $text  = substr($text, 0, $pos[$l]) . '...';
                  }
                  return $text;
              }
$i=0;
             foreach ($properties as $property) { ?>
          <div class="col-lg-4 white-bg">
          <div class="item feature_item ">
            <div class="image"><a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>"> <img src="<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content ">
              <div class="proerty_text webkit__scroll">
                <h3 class="bottom15"><a href="#."><?= $property->title ?></a></h3>
                <!-- <h4 class="top15"><?php
                           $flatTypes = $this->properties_model->getPropertyFlatType(null,$property->id);
                           $flatTypes = json_decode( json_encode($flatTypes), true);
                            $row = $this->properties_model->getPropertyParam(array('property_id' => $property->id, 'flat_type_id' => $flatTypes[0]['flat_type_id']), 'property_flat_types', null, 'MIN(total) as amount');
                            echo number_format_short($row->amount) ? number_format_short($row->amount) : 0 ;
                             
                            ?> /-</h4> -->
               <!-- <?= lt( $property->description, 10); ?> -->
                
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-ruppees"></i>Price</td>
                    <td class="text-right">Rs. <?=$property->budget?></td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BedRooms</td>
                    <td class="text-right"><?= $property->bedrooms ?></td>
                  </tr> 
                   <tr> 
                   <td><div class="float-left"><a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>"><button class="btn btn-property1">See Details</button></a></div></td>
                   <td><div class="float-right"><button class="btn btn-property2">Get Call Back</button></div> </tr> </td>
                </tbody>
              </table>
             
            </div>
          </div>
        </div>
        <?php $i++;} ?> 
         <div class="col-xs-12 text-center">
          <a href="<?=base_url();?>listing" class="cd-see-all btn-white border_radius margin40"><i class="fa fa-th" aria-hidden="true"></i>view all</a>
        </div>
        </div>
        <!-- Row ends -->
      <!-- </div> -->
    </div>

   
  </section>

<!-- Latest Property Ends -->


<!--Deals-->
<section id="deal" class="padding_bottom_half padding_top">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div id="two-col-slider" class="owl-carousel">
        <?php
        foreach ($bestdeal_properties as $property) { 
          ?>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#."><i class="icon-like"></i></a></span>
                <a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>">
                  <h3><?= $property->title ?></h3>
                  <p><?= $property->location . ', ' . $property->city_name ?></p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i><?= $property->prop_type ?></span><span><i class=" icon-bed"></i><?php
                                                    if($property->possession_date!='0000-00-00')
                                                    echo  date('M, Y', strtotime($property->possession_date));
                                                    else 
                                                    echo "Ready"; ?></span><span><i class="icon-safety-shower"></i><?=$property->bedrooms;?></span><span class="border-l"><?php
                           $flatTypes = $this->properties_model->getPropertyFlatType(null,$property->id);
                           $flatTypes = json_decode( json_encode($flatTypes), true);
                            $row = $this->properties_model->getPropertyParam(array('property_id' => $property->id, 'flat_type_id' => $flatTypes[0]['flat_type_id']), 'property_flat_types', null, 'MIN(total) as amount');
                            echo number_format_short($row->amount) ? number_format_short($row->amount) : 0 ;
                             
                            ?> /-</span></div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <?php
      }
      ?>
      </div>
    </div>
  </div>
</section>
<!--Deals ends-->


<!--Parallax
<section id="parallax_four" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 bottom30">
        <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
        <h4 class="top20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
        <a href="<?=base_url('listing');?>" class="text-uppercase btn-white top20">view all listings</a>

      </div>
    </div>
  </div>
</section>
<!--About Owner ends-->

<!-- Testimonials -->
<!--Testinomials--
<section id="testinomial" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">Happy Customers</h2>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="testinomial-slider" class="owl-carousel">
          <?php  
          if(count($testimonials)>0)
          {
          foreach ($testimonials as $testimonial) { 
          ?>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="<?= base_url('uploads/testimonials/' . $testimonial->image) ?>" alt="happy client" class="bottom15">
              <h4 class="uppercase"> <?= $testimonial->name ?></h4>
              <span class="smmery bottom15">( <?=$testimonial->job_desc?> )</span>
              <img src="<?=base_url('assets/')?>images/stars.png" alt="rating" class="bottom30">
              <?php echo '<p>'.$testimonial->comment.'</p>'; ?>
            </div>
          </div>
        <?php }
        }
        else{

         ?>
           <div class="item">
            <div class="testinomial_content text-center">
              <img src="<?=base_url('assets/')?>images/author.png" alt="happy client" class="bottom15">
              <h4 class="uppercase"> SAM dfdfsdf</h4>
              <span class="smmery bottom15">( NorthMarq Capital  )</span>
              <img src="<?=base_url('assets/')?>images/stars.png" alt="rating" class="bottom30">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  
  </div>
</section>

<!--Partners--
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-12 text-center">
      	<h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
    <div id="partners" class="owl-carousel">
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="<?=base_url('assets/')?>images/logo5.png" alt="Featured Partner">
        </div>
      </div>
    </div>
  </div>
</section>
<!--Partners Ends-->



<!--Footer-->




