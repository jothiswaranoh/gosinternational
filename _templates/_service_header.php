<?php
$menuItems = array(
    array("url" => "index.php", "title" => "Home"),
    array("url" => "about.php", "title" => "About"),
    array("url" => "service.php", "title" => "Services"),
    array("url" => "contact.php", "title" => "Contact us")
);

$contacts = array(
    array("icon" => "fa fa-phone", "info" => "+91 44313 15352", "info2" => "+91 99320 88788", "image" => "path_to_phone_image"),
    array("icon" => "fa fa-envelope-o", "info" => "info@gosinternational.in", "image" => "path_to_email_image"),
    array("icon" => "fa fa-map-marker", "info" => "W760, 3A, 3rd Floor, 4th Avenue, Anna Nagar West extension, Chennai, Tamil Nadu-600101", "image" => "path_to_map_image")
);

$socialMediaLinks = array(
    array("icon" => "fa fa-facebook", "url" => "#", "image" => "path_to_facebook_image"),
    array("icon" => "fa fa-youtube-play", "url" => "#", "image" => "path_to_youtube_image"),
    array("icon" => "fa fa-linkedin", "url" => "#", "image" => "path_to_linkedin_image"),
    array("icon" => "fa fa-google-plus", "url" => "#", "image" => "path_to_google_plus_image"),
    array("icon" => "fa fa-twitter", "url" => "#", "image" => "path_to_twitter_image"),
    array("icon" => "fa fa-rss", "url" => "#", "image" => "path_to_rss_image")
);
?>
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
                  <?php foreach ($contacts as $contact): ?>
                  <div class="col-md-4"><i class="<?php echo $contact['icon']; ?> margin-right-10px"></i> <?php echo $contact['info']; ?></div>
                  <?php endforeach; ?>
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
                      <?php foreach ($socialMediaLinks as $socialLink): ?>
                      <li class="list-inline-item"><a class="<?php echo $socialLink['icon']; ?>" href="<?php echo $socialLink['url']; ?>"><img src="<?php echo $socialLink['image']; ?>" alt=""></a></li>
                      <?php endforeach; ?>
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
                            <ul id="menu-main-service"
                                class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                                <?php foreach ($menuItems as $menuItem): ?>
                                <li class="has-dropdown"><a href="<?php echo $menuItem['url']; ?>">
                                        <?php echo $menuItem['title']; ?>
                                    </a></li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="d-none d-xl-block pull-right model-link margin-top-15px">
                                <a id="cart-link"
                                    class="model-link margin-right-25px text-white opacity-hover-8" href="#">
                                    <span>3</span><i class="fa fa-shopping-cart"></i>
                                </a>
                                <div class="cart-model">

                                    <div class="media">
                                        <a href="#">
                                            <img class="d-flex align-self-start mr-3 width-50px"
                                                src="assets/img/cart-1.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                                            <h5 class="mt-0"><a href="#">Cargo Transportation</a></h5>
                                            <h6 class="mt-0 font-2">1 X 250$</h6>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="#">
                                            <img class="d-flex align-self-start mr-3 width-50px"
                                                src="assets/img/cart-2.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                                            <h5 class="mt-0"><a href="#">Air Freight</a></h5>
                                            <h6 class="mt-0 font-2">1 X 250$</h6>
                                        </div>
                                    </div>


                                    <div class="media">
                                        <a href="#">
                                            <img class="d-flex align-self-start mr-3 width-50px"
                                                src="assets/img/cart-3.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                                            <h5 class="mt-0"><a href="#">Packaging & Storage</a></h5>
                                            <h6 class="mt-0 font-2">1 X 250$</h6>
                                        </div>
                                    </div>

                                    <div class="padding-0px">
                                        <div
                                            class="cart-total background-main-color padding-lr-30px padding-tb-10px text-white">
                                            <div class="desc">Subtotal:</div>
                                            <div class="price"><strong>$71.00</strong></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-primary btn-lg btn-block">view
                                            cart</a>
                                        <a href="#"
                                            class="btn btn-outline-primary btn-lg btn-block">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="d-none d-xl-block search-link pull-right model-link margin-top-15px">
                                <a id="search-header"
                                    class="model-link margin-right-0px text-white opacity-hover-8"
                                    href="#search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>

                        </div>
                        <div
                            class="col-lg-2 col-md-12  d-none d-lg-block">
                            <a data-toggle="modal"
                                data-target=".bd-example-modal-lg" href="#"
                                class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                <i
                                    class="fa fa-envelope-o margin-right-10px"></i>
                                Get A Quote
                            </a>
                        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>