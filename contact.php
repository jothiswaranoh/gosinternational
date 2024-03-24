<?php
include 'libs/load.php';
load_template('head');
load_template('header');
load_template('search');
load_template('quote');
?>

<!--  Header  -->
<header class="background-white">
  <div class="header-output">
    <div class="header-output">
      <div class="header-in">

        <!-- Up Head -->
        <div class="up-head d-none d-lg-block background-grey-4">
          <div class="container">
            <div class="row">
              <div class="col-xl-8 col-lg-12">
                <div class="row">
                  <div class="col-md-4"><i class="fa fa-phone margin-right-10px"></i> 00222 123 333 019</div>
                  <div class="col-md-4"><i class="fa fa-envelope-o margin-right-10px"></i> info@your-site.com</div>
                  <div class="col-md-4"><i class="fa fa-map-marker margin-right-10px"></i> 1105 Saudi Arabia - Street,
                    CA</div>
                </div>
              </div>
              <div class="col-xl-4 d-none d-xl-block">
                <div class="row">
                  <div class="col-lg-6">
                    <!-- lang dropdown -->
                    <div class="dropdown show">
                      <a class="dropdown-toggle text-white text-uppercase" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-us margin-right-8px"></span> English
                      </a>

                      <div class="dropdown-menu text-small text-uppercase" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es margin-right-8px"></span>
                          Spanish</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-mr margin-right-8px"></span>
                          Arabic</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr margin-right-8px"></span>
                          French</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de margin-right-8px"></span>
                          German</a>
                      </div>
                    </div>
                    <!-- // lang dropdown -->

                  </div>

                  <div class="col-lg-6">
                    <!--  Social -->
                    <ul class="social-media list-inline text-right margin-0px text-white">
                      <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a></li>
                      <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play"
                            aria-hidden="true"></i></a></li>
                      <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin"
                            aria-hidden="true"></i></a></li>
                      <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus"
                            aria-hidden="true"></i></a></li>
                      <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a></li>
                      <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss"
                            aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- // Social -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Up Head -->
        <div class="container">
          <div class="position-relative">
            <div class="row">
              <div class="col-lg-3 col-md-12">
                <a id="logo" href="home-1.html" class="d-inline-block margin-tb-15px"><img
                    src="assets/img/logo-dark.png" alt=""></a>
                <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i
                    class="fa fa-bars"></i></a>
              </div>
              <div class="col-lg-7 col-md-12 position-inherit">
                <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-dark">
                  <li class="has-dropdown"><a href="#">Home</a>
                    <ul class="sub-menu">
                      <li><a href="home-1.html">Home - Main Demo</a></li>
                      <li><a href="home-2.html">Home - Classic Layout</a></li>
                      <li><a href="home-3.html">Home - Modern Layout</a></li>
                      <li><a href="home-4.html">Home - Marine Transport</a></li>
                      <li><a href="home-5.html">Home - Moving Co</a></li>
                      <li><a href="home-6.html">Home - Company</a></li>
                    </ul>
                  </li>
                  <li class="has-dropdown"><a href="#">About</a>
                    <ul class="sub-menu">
                      <li><a href="page-about-us.html">About Us</a></li>
                      <li><a href="page-faqs.html">Faqs</a></li>
                      <li><a href="page-out-team.html">Our Team</a></li>
                      <li><a href="page-price-table.html">Price Table</a></li>
                      <li><a href="page-contact-us.html">Contact Us</a></li>
                      <li><a href="page-our-partners.html">Our Partners</a></li>
                    </ul>
                  </li>
                  <li class="has-dropdown"><a href="#">Services</a>
                    <ul class="sub-menu">
                      <li><a href="service-single.html">Cargo Transportation</a></li>
                      <li><a href="service-single.html">Air Freight</a></li>
                      <li><a href="service-single.html">Ocean Freight</a></li>
                      <li><a href="service-single.html">Packaging and Storage</a></li>
                      <li><a href="service-single.html">Fast Delivery</a></li>
                      <li><a href="service-single.html">Railroad Transportation</a></li>
                    </ul>
                  </li>
                  <li class="has-dropdown"><a href="#">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="blog-left-sidebar.html">Blog Left Sidebar </a></li>
                      <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                      <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                      <li><a href="blog-single.html">Post Detalis</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu mega-links mega-links-4columns"><a href="#">Elements</a>
                    <div class="mega-menu-out sub-menu-out">
                      <ul class="sub-menu-columns">
                        <li>
                          <a href="#">Default Elements</a>
                          <ul class="mega-menu-list">
                            <li><a href="elements-accordions.html">accordions</a></li>
                            <li><a href="elements-action-box.html">Call To Action</a></li>
                            <li><a href="elements-alert-messages.html">alert messages</a></li>
                            <li><a href="elements-icon-box.html">Icon Box</a></li>
                            <li><a href="elements-blog-post.html">blog post</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">Interactive Elements</a>
                          <ul class="mega-menu-list">
                            <li><a href="elements-clients.html">clients</a></li>
                            <li><a href="elements-columns-grids.html">columns grids</a></li>
                            <li><a href="elements-counters.html">counters</a></li>
                            <li><a href="elements-testimonial.html">Testimonial</a></li>
                            <li><a href="elements-price-table.html">Price Table</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">Shop Pages</a>
                          <ul class="mega-menu-list">
                            <li><a href="shop-2-columns.html">Shop 2 Columns</a></li>
                            <li><a href="shop-3-columns.html">Shop 3 Columns</a></li>
                            <li><a href="shop-4-columns.html">Shop 4 Columns</a></li>
                            <li><a href="shop-cart.html">cart</a></li>
                            <li><a href="shop-product-single.html">product single </a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">Headers & Footers</a>
                          <ul class="mega-menu-list">
                            <li><a href="elements-header-1.html">Header Layout 1</a></li>
                            <li><a href="elements-header-2.html">Header Layout 2</a></li>
                            <li><a href="elements-header-3.html">Header Layout 3</a></li>
                            <li><a href="elements-footer-light.html">Footer - Light</a></li>
                            <li><a href="elements-footer-dark.html">Footer - Dark</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </li>

                </ul>



                <div class="d-none d-xl-block pull-right model-link margin-top-15px">
                  <a id="cart-link" class="model-link margin-right-25px text-dark opacity-hover-8" href="#">
                    <span>3</span><i class="fa fa-shopping-cart"></i>
                  </a>
                  <div class="cart-model">

                    <div class="media">
                      <a href="#">
                        <img class="d-flex align-self-start mr-3 width-50px" src="assets/img/cart-1.jpg"
                          alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                        <h5 class="mt-0"><a href="#">Cargo Transportation</a></h5>
                        <h6 class="mt-0 font-2">1 X 250$</h6>
                      </div>
                    </div>

                    <div class="media">
                      <a href="#">
                        <img class="d-flex align-self-start mr-3 width-50px" src="assets/img/cart-2.jpg"
                          alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                        <h5 class="mt-0"><a href="#">Air Freight</a></h5>
                        <h6 class="mt-0 font-2">1 X 250$</h6>
                      </div>
                    </div>


                    <div class="media">
                      <a href="#">
                        <img class="d-flex align-self-start mr-3 width-50px" src="assets/img/cart-3.jpg"
                          alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                        <h5 class="mt-0"><a href="#">Packaging & Storage</a></h5>
                        <h6 class="mt-0 font-2">1 X 250$</h6>
                      </div>
                    </div>

                    <div class="padding-0px">
                      <div class="cart-total background-main-color padding-lr-30px padding-tb-10px text-white">
                        <div class="desc">Subtotal:</div>
                        <div class="price"><strong>$71.00</strong></div>
                        <div class="clearfix"></div>
                      </div>
                      <a href="#" class="btn btn-primary btn-lg btn-block">view cart</a>
                      <a href="#" class="btn btn-outline-primary btn-lg btn-block">Checkout</a>
                    </div>
                  </div>
                </div>
                <div class="d-none d-xl-block search-link pull-right model-link margin-top-15px">
                  <a id="search-header" class="model-link margin-right-0px text-dark opacity-hover-8" href="#search">
                    <i class="fa fa-search"></i>
                  </a>
                </div>

              </div>
              <div class="col-lg-2 col-md-12  d-none d-lg-block">
                <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#"
                  class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                  <i class="fa fa-envelope-o margin-right-10px"></i> Get A Quote
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- // Header  -->

<!-- Search  -->
<div id="search">
  <button type="button" class="close">×</button>
  <form class="clearfix d-block">
    <input type="search" value="" placeholder="Search for . . . ." />
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>
<!-- // Search  -->

<!-- Get A Quote  -->
<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content margin-top-150px background-main-color">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="assets/img/contact-img.jpg" alt="">
        </div>
        <div class="col-lg-7">
          <div class="padding-30px">
            <h3 class="padding-bottom-15px">Get A Free Quote</h3>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Full Name</label>
                  <input type="text" class="form-control" id="inputName4" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <a href="#"
                class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND
                MESSAGE</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- // Get A Quote  -->


<div class="page-title">
  <div class="container">
    <div class="padding-tb-120px">
      <h1>Contact Us</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact Us</li>
      </ol>
    </div>
  </div>
</div>


<div class="padding-tb-100px">

  <div class="container">
    <div class="row">

      <div class="col-lg-6 sm-mb-45px">
        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
          galley of type and scrambled it to make a type specimen book.</p>
        <h5>Phone :</h5>
        <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> +222 333
          019</span>
        <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px"
            aria-hidden="true"></i> +222 333 019</span>
        <h5 class="margin-top-20px">Address :</h5>
        <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i>
          NewYork 1234 Main St </span>
        <h5 class="margin-top-20px">Email :</h5>
        <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px"
            aria-hidden="true"></i> info@yoursite.com </span>
      </div>

      <div class="col-lg-6">
        <div class="contact-modal">
          <div class="background-main-color">
            <div class="padding-30px">
              <h3 class="padding-bottom-15px">Get A Free Quote</h3>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Full Name</label>
                    <input type="text" class="form-control" id="inputName44" placeholder="Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" id="inputEmail44" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
                </div>
                <a href="#"
                  class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND
                  MESSAGE</a>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>


<div class="map-layout">
  <div class="map-embed">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20980.754338669292!2d-118.30289592578626!3d34.08843374094495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z2YTZiNizINij2YbYrNmE2YjYs9iMINmD2KfZhNmK2YHZiNix2YbZitin2Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2ssa!4v1534382441818"
      width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8"></div>
      <div class="col-lg-4">
        <div class="padding-tb-50px padding-lr-30px background-main-color pull-top-309px">
          <div class="contact-info-map">
            <div class="margin-bottom-30px">
              <h2 class="title">Location</h2>
              <div class="contact-info opacity-9">
                <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                <div class="text">
                  <span class="title-in">Location :</span> <br>
                  <span class="font-weight-500 text-uppercase">US - Los Angeles</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="call_center margin-top-30px">
              <h2 class="title">Call Center</h2>
              <div class="contact-info opacity-9">
                <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                <div class="text">
                  <span class="title-in">Call Us :</span><br>
                  <span class="font-weight-500 text-uppercase">00222123333019</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
load_template('footer');
load_template('foot');
?>