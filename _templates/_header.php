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
    array("icon" => "fa fa-phone", "info" => "+91 44313 15352 <br/> <i class='fa fa-phone margin-right-10px '></i> +91 99320 88788", "image" => "path_to_phone_image"),
    array("icon" => "fa fa-envelope-o", "info" => "info@gosinternational.in", "image" => "path_to_email_image"),
    array("icon" => "fa fa-map-marker", "info" => "W760, 3A, 3rd Floor, 4th Avenue, Anna Nagar West extension, Chennai", "image" => "path_to_map_image")
);

// Define social media links array
$socialMediaLinks = array(
    array('name' => 'facebook', "icon" => "fa fa-facebook", "url" => "#", "image" => "path_to_facebook_image"),
    array('name' => 'youtube', "icon" => "fa fa-youtube-play", "url" => "#", "image" => "path_to_youtube_image"),
    array('name' => 'linkedin', "icon" => "fa fa-linkedin", "url" => "#", "image" => "path_to_linkedin_image"),
    array('name' => 'google', "icon" => "fa fa-google-plus", "url" => "#", "image" => "path_to_google_plus_image"),
    array('name' => 'twitter', "icon" => "fa fa-twitter", "url" => "#", "image" => "path_to_twitter_image"),
    array('name' => 'rss', "icon" => "fa fa-rss", "url" => "#", "image" => "path_to_rss_image")
);
include ("./_templates/_header_variables.php");
?>

<header>
    <div id="fixed-header-dark" class="header-output fixed-header">
        <div class="header-output">
            <div class="container header-in">

                <!-- Up Head -->
                <div class="up-head d-none d-lg-block">
                    <div class="row ">
                        <div class="col-xl-8 col-lg-12 ">
                            <div class="row">
                                <?php foreach ($contacts as $contact) : ?>
                                    <div class="col-md-4">
                                        <i class="<?php echo $contact['icon']; ?> margin-right-10px"></i>
                                        <?php echo $contact['info']; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xl-4 d-none d-xl-block">
                            <div class="row">
                                <div class="col-lg-6">
                                </div>

                                <div class="col-lg-6">
                                    <ul class="social-media list-inline text-right margin-0px text-white">
                                        <?php
                                        foreach ($socialMediaLinks as $link) {
                                            echo '<li class="list-inline-item"><a class="' . $link['name'] . '" href="#"><i class="fa ' . $link['icon'] . '" aria-hidden="true"></i></a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Up Head -->

                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <a id="logo" href="index.php" class="d-inline-block "><img src="assets/img/logo-1.png" class="logo-img" alt=""></a>
                            <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="col-lg-7 col-md-12 position-inherit">
                            <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                                <?php foreach ($menuItems as $menuItem) : ?>
                                    <li class=""><a href="<?php echo $menuItem['url']; ?>">
                                            <?php echo $menuItem['title']; ?>
                                        </a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-12  d-none d-lg-block">
                            <a data-toggle="modal" data-target=".bd-example-modal-lg" href="contact.php" class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                <i class="fa fa-envelope-o margin-right-10px"></i>
                                <?php echo $get_a_quote?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>