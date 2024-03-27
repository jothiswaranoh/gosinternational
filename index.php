<!-- // Header  -->
<?php
include 'libs/load.php';
include "./_templates/_head.php";
include "./_templates/_header.php";
include "./_templates/_search.php";
include "./_templates/_quote.php";
include "./_templates/_slider.php";
include "./_templates/_index_about.php";
include "./_templates/_index_services.php";
include "./_templates/_news.php";

$ocean_freight_title = "Ocean Freight";
$ocean_freight_content = "Seafaring reliability: Ocean freight forms the backbone of global exchange.";

$truck_transpot_title = "Unbeatable Shipping and Transport Services";
$truck_transport_content = "Efficiently deliver your goods with our unbeatable shipping and transport
services. Trust us to get your products where they need to be, on time and in perfect
condition.";
?>

<div class="service-section-1 container">
  <div class="row">
    <div class="col-md-4">
      <div class="service layout-1">
        <div class="clearfix">
          <div class="icon"><img src="assets/icons/service-light-1.png" alt=""></div>
          <a href="#" class="title">Road Freight</a>
        </div>
        <div class="dis clearfix">
          <p>Efficacy on wheels: Road freight maintains global mobility</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service layout-1">
        <div class="clearfix">
          <div class="icon"><img src="assets/icons/service-light-2.png" alt=""></div>
          <a href="#" class="title">Air Freight</a>
        </div>
        <div class="dis clearfix">
          <p>High-altitude efficacy: Air cargo fosters global connectivity</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service layout-1">
        <div class="clearfix">
          <div class="icon"><img src="assets/icons/service-light-3.png" alt=""></div>
          <a href="#" class="title"><?php echo $ocean_freight_title?></a>
        </div>
        <div class="dis clearfix">
          <p><?php echo $ocean_freight_content?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="call-action ba-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 padding-tb-15px">
        <h2><?php echo $truck_transpot_title?></h2>
        <div class="text"><?php echo $truck_transport_content?></div>
      </div>
      <div class="col-lg-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 sm-mb-45px">
            <a href="#" class="action-bottom layout-1">
              <img src="assets/icons/small-icon-1.png" alt="">
              <h4>Tell Friend</h4>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 sm-mb-45px">
            <a href="#" class="action-bottom layout-1">
              <img src="assets/icons/small-icon-2.png" alt="">
              <h4>Read More</h4>
            </a>
          </div>
          <div class="col-lg-4 col-md-4">
            <a href="contact.php" class="action-bottom layout-1">
              <img src="assets/icons/small-icon-3.png" alt="">
              <h4>Contact Us</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "./_templates/_footer.php";
include "./_templates/_foot.php";
?>