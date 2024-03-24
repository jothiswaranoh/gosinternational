<?php
// Define menu items array
$menuItems = array(
    array("url" => "index.php", "title" => "Home"),
    array("url" => "about.php", "title" => "About"),
    array("url" => "service.php", "title" => "Services"),
    array("url" => "contact.php", "title" => "Contact us"),
    array("url" => "histroy.php", "title" => "History"),

    
);

// Define contact details array
$contacts = array(
    array("icon" => "fa fa-phone", "info" => "+91 44313 15352", "info2" => "+91 99320 88788", "image" => "path_to_phone_image"),
    array("icon" => "fa fa-envelope-o", "info" => "info@gosinternational.in", "image" => "path_to_email_image"),
    array("icon" => "fa fa-map-marker", "info" => "W760, 3A, 3rd Floor, 4th Avenue, Anna Nagar West extension, Chennai, Tamil Nadu-600101", "image" => "path_to_map_image")
);

// Define social media links array
$socialMediaLinks = array(
    array("icon" => "fa fa-facebook", "url" => "#", "image" => "path_to_facebook_image"),
    array("icon" => "fa fa-youtube-play", "url" => "#", "image" => "path_to_youtube_image"),
    array("icon" => "fa fa-linkedin", "url" => "#", "image" => "path_to_linkedin_image"),
    array("icon" => "fa fa-google-plus", "url" => "#", "image" => "path_to_google_plus_image"),
    array("icon" => "fa fa-twitter", "url" => "#", "image" => "path_to_twitter_image"),
    array("icon" => "fa fa-rss", "url" => "#", "image" => "path_to_rss_image")
);
?>

<header>
    <div id="fixed-header-dark" class="header-output fixed-header">
        <div class="header-output">
            <div class="container header-in">

                <!-- Up Head -->
                <div class="up-head d-none d-lg-block">
                    <div class="row">
                        <?php foreach ($contacts as $contact): ?>
                        <div class="col-md-4 d-flex">
                            <span>
                                <i class="<?php echo $contact['icon']; ?> margin-right-5px"></i>
                            </span>
                            <div class="">
                                <?php echo $contact['info']; ?>
                                <?php if(isset($contact['info2'])): ?>
                                <br> <?php echo $contact['info2']; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- // Up Head -->

                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-1 col-md-12">
                            <a id="logo" href="index.html" class="d-inline-block margin-tb-15px"><img
                                    src="assets/img/logo-1.png" alt=""></a>
                            <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i
                                    class="fa fa-bars"></i></a>
                        </div>
                        <div class="col-lg-7 col-md-12 position-inherit">
                            <ul id="menu-main"
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
</header>
