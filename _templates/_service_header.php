<?php
$menuItems = array(
    array("url" => "index.php", "title" => "Home"),
    array("url" => "about.php", "title" => "About"),
    array("url" => "service.php", "title" => "Services"),
    array("url" => "contact.php", "title" => "Contact us"),
    array("url" => "histroy.php", "title" => "History"),
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
                <div class="container">
                    <div class="position-relative">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a id="logo" href="index.php" class="d-inline-block "><img src="assets/img/logo-1.png" class="logo-img" alt=""></a>
                                <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="col-lg-7 col-md-12 position-inherit">
                                <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-dark">
                                    <?php foreach ($menuItems as $menuItem) : ?>
                                        <li><a href="<?php echo $menuItem['url']; ?>">
                                                <?php echo $menuItem['title']; ?>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#" class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                    <i class="fa fa-envelope-o margin-right-10px"></i>
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