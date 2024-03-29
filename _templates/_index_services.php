<?php
$our_service_title = "Our Service";
$our_service_content_ = "Experience reliable and efficient marine cargo services worldwide.";

$marine_cargo_title = "Marine Cargo Transportation";
$marine_cargo_content = "Your trusted partner for seamless and sustainable marine cargo transportation solutions worldwide. Experience reliability and expertise.";

$cruiser_title = "Cruiser";
$cruiser_content = "For those looking for some entertainment, we have a variety of activities
                    available on board. From live music performances to water sports, there's something for
                    everyone to enjoy.";

$ocean_freight_title_ = "Ocean Freight";
$ocean_freight_content_ = "Join us in exploring the power of ocean freight as we reliably and precisely move your
                   cargo from port to port and coast to coast, ensuring seamless delivery every time.";

$pack_store_title_ = "Packaging & Storage";
$pack_store_content_ = "Whether you are storing massive equipment or delicate goods, you can be at ease knowing that your cargo is in good hands at our facilities";

$show_all = "Show all";
?>
<div class="section padding-tb-30px section-ba-1">
  <div class="container">
    <!-- Title -->
    <div class="section-title margin-bottom-40px">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
          <div class="h2"><?php echo $our_service_title ?></div>
          <div class="des"><?php echo $our_service_content_ ?></div>
        </div>
      </div>
    </div>
    <!-- // End Title -->
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="service-icon-box">
          <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
          <a href="#" class="title h2"><?php echo $marine_cargo_title ?></a>
          <div class="des"> <?php echo $marine_cargo_content ?>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="service-icon-box">
          <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
          <a href="#" class="title h2"><?php echo $cruiser_title ?></a>
          <div class="des"><?php echo $cruiser_content ?></div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="service-icon-box">
          <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
          <a href="#" class="title h2"><?php echo $ocean_freight_title_ ?></a>
          <div class="des">
            <?php echo $ocean_freight_content_ ?>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="service-icon-box">
          <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
          <a href="#" class="title h2"><?php echo $pack_store_title_ ?></a>
          <div class="des">
            <?php echo $pack_store_content_ ?>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="service.php" class="nile-bottom md"><?php echo $show_all ?><i class="fa fa-arrow-right"></i> </a>
    </div>
  </div>
</div>