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
<section class="property-query-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="uppercase">Advanced Search</h2>
        <p class="heading_space"> Wehave Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <form class="callus">
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
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
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
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
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
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
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row search-2">
            <div class="col-md-6 col-sm-6">
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
            <div class="col-md-6 col-sm-6">
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
</section>
<!-- Property Search area End -->


<!-- Latest Property -->

  <section id="deals" class="padding bg_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h2 class="uppercase">Best Deal Properties</h2>
          <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
        </div>
      </div>
      <div class="row">
        <!-- <div class="three-item owl-carousel"> -->
          <div class="col-lg-4">
          <div class="item feature_item">
            <div class="image"><a href="#."> <img src="<?=base_url('assets/')?>images/featured1.jpg" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
                <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
                <h4 class="top15">Rs 3 Lacs <small>Family Home</small></h4>
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                    <td class="text-right">4800 sq ft</td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BadRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-safety-shower"></i>BathRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-garage"></i>Garage</td>
                    <td class="text-right">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item feature_item">
            <div class="image"><a href="#."> <img src="<?=base_url('assets/')?>images/featured1.jpg" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
                <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
                <h4 class="top15">Rs 3 Lacs <small>Family Home</small></h4>
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                    <td class="text-right">4800 sq ft</td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BadRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-safety-shower"></i>BathRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-garage"></i>Garage</td>
                    <td class="text-right">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item feature_item">
            <div class="image"><a href="#."> <img src="<?=base_url('assets/')?>images/featured1.jpg" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
                <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
                <h4 class="top15">Rs 3 Lacs <small>Family Home</small></h4>
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                    <td class="text-right">4800 sq ft</td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BadRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-safety-shower"></i>BathRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-garage"></i>Garage</td>
                    <td class="text-right">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item feature_item">
            <div class="image"><a href="#."> <img src="<?=base_url('assets/')?>images/featured1.jpg" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
                <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
                <h4 class="top15">Rs 3 Lacs <small>Family Home</small></h4>
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                    <td class="text-right">4800 sq ft</td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BadRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-safety-shower"></i>BathRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-garage"></i>Garage</td>
                    <td class="text-right">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item feature_item">
            <div class="image"><a href="#."> <img src="<?=base_url('assets/')?>images/featured1.jpg" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
                <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
                <h4 class="top15">Rs 3 Lacs <small>Family Home</small></h4>
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                    <td class="text-right">4800 sq ft</td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BadRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-safety-shower"></i>BathRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-garage"></i>Garage</td>
                    <td class="text-right">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item feature_item">
            <div class="image"><a href="#."> <img src="<?=base_url('assets/')?>images/featured1.jpg" alt="Featured Property"></a> 
              <span class="price default_clr">Exclusive</span>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
                <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
                <h4 class="top15">Rs 3 Lacs <small>Family Home</small></h4>
              </div>
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                    <td class="text-right">4800 sq ft</td>
                  </tr>
                  <tr>
                    <td><i class="icon-bed"></i>BadRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-safety-shower"></i>BathRooms</td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><i class="icon-garage"></i>Garage</td>
                    <td class="text-right">1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


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
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="<?=base_url('assets/')?>images/b-d-property.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#."><i class="icon-like"></i></a></span>
                <a href="property_detail.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Lorem Ipsum</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">rs 38 lacs</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="<?=base_url('assets/')?>images/b-d-property2.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#."><i class="icon-like"></i></a></span>
                <a href="property_detail2.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Lorem Ipsum</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">rs 38 lacs</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="<?=base_url('assets/')?>images/b-d-property3.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#."><i class="icon-like"></i></a></span>
                <a href="property_detail3.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Lorem Ipsum</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">rs 38 lacs</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="<?=base_url('assets/')?>images/b-d-property4.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#."><i class="icon-like"></i></a></span>
                <a href="property_detail.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Lorem Ipsum</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">rs 38 lacs</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Deals ends-->


<!--Parallax-->
<section id="parallax_four" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 bottom30">
        <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
        <h4 class="top20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
        <a href="listing4.html" class="text-uppercase btn-white top20">view all listings</a>

      </div>
    </div>
  </div>
</section>
<!--About Owner ends-->

<!-- Testimonials -->
<!--Testinomials-->
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
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="<?=base_url('assets/')?>images/author.png" alt="happy client" class="bottom15">
              <h4 class="uppercase"> SAM NICHOLSON</h4>
              <span class="smmery bottom15">( NorthMarq Capital  )</span>
              <img src="<?=base_url('assets/')?>images/stars.png" alt="rating" class="bottom30">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="<?=base_url('assets/')?>images/author.png" alt="happy client" class="bottom15">
              <h4 class="uppercase"> SAM NICHOLSON</h4>
              <span class="smmery bottom15">( NorthMarq Capital  )</span>
              <img src="<?=base_url('assets/')?>images/stars.png" alt="rating" class="bottom30">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</section>

<!--Partners-->
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




