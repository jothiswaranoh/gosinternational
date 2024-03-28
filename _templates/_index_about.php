<?php
$who_we_are_title =   "Who We Are ?";
$who_we_are_content = "Green Ocean Shipping International has been a pioneer in the
                       shipping industry in the Andaman and Nicobar Islands since 1977.";
$read_more =          "Read More";

$why_us_title =   "Why us?";
$why_us_content = "Green Ocean Ship International Pvt Ltd invites you to experience
                   the pinnacle of quality and reliability in the shipping industry.";

$explore_facilities_title =   "Explore Our Facilities";
$explore_facilities_content = "Our shipping services include ferry and cargo transportation
                               wherever the demand exceeds. Our strategic approach involves catering to a diverse
                               clientele, including large institutions, government contractors, and warehouses, by
                               providing equipment logistics with the effective approach of various large
                               companies.";

$warehouse_title =   "Warehousing Solution";
$warehouse_content = "Explore the possibilities of Impeccable storage solution with the aid of our warehouse solutions. 
                      Our cutting-edge security and personalized inventory management offer a secure haven for your possessions that ensures efficiency and security at all times.";

$pack_nd_store_title = "Packaging & Storage";
$pack_nd_store_content = "Your cargo is in safe hands at GOS's warehouses, whether it be large equipment or delicate goods. You could feel secure
                         in the knowledge that we put your shipments' integrity and safety first, providing peace of mind with every storage
                         option.";

$ocean_freight_title = "Ocean Freight";
$ocean_freight_content = "Join us in exploring the power of ocean freight as we reliably and precisely move your cargo from port to port and
                        coast to coast.";
?>
<div class="nile-about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">

        <div class="section-title-right text-main-color clearfix">
          <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
          <h2 class="title-text"><?php $who_we_are_title ?></h2>
        </div>
        <div class="about-text margin-tb-25px"><?php $who_we_are_content ?></div>
        <a href="#" class="nile-bottom sm"><?php $read_more ?></a>


        <div id="accordion" class="nile-accordion margin-top-80px sm-mb-45px">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-block btn-link active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i> <?php echo $why_us_title ?></button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body"><?php echo $why_us_content ?>.</div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-truck"></i> <?php echo $explore_facilities_title ?></button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body"><?php echo $explore_facilities_content ?></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-plane"></i><?php echo $warehouse_title ?></button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <p><?php echo $warehouse_content ?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">

        <div class="row">
          <div class="col-sm-6">
            <img src="assets/img/gabriel-lucindo-jwIBWTvXExM-unsplash.jpg" alt="">
          </div>
          <div class="col-sm-6">
            <div class="cart-service background-main-color">
              <div class="icon"><img src="assets/icons/service-light-4.png" alt=""></div>
              <h2><?php echo $pack_nd_store_title ?></h2>
              <hr>
              <div class="text">
                <p><?php echo $pack_nd_store_content ?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="cart-service background-main-color">
              <div class="icon"><img src="assets/icons/service-light-3.png" alt=""></div>
              <h2><?php echo $ocean_freight_title ?></h2>
              <hr>
              <div class="text">
                <p> <?php echo $ocean_freight_content ?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
          <img src="assets/img/william-william-NndKt2kF1L4-unsplash.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>