<?php
$latest_news_title = "Latest News";
$latest_news_content = "Green Ocean Shipping International has embarked on a substantial expansion of its fleet, involving the acquisition of modern vessels equipped with advanced technology. 
                      This expansion signifies a notable increase in the company's maritime assets, which is essential for accommodating growing demands in cargo transportation.";
$news_1 = "GOS forges global alliances in maritime and logistics, enhancing services worldwide with synergistic solutions.";
$news_2 = "Global cargo transportation sees surge in demand amidst supply chain challenges, prompting innovations for efficient and reliable logistics solutions.";
$news_3 = "Green Ocean Shipping leads with eco-friendly practices, paving the way for a sustainable maritime future";

?>
<div class="section padding-tb-30px section-ba-3">
  <div class="container">
    <!-- Title -->
    <div class="section-title margin-bottom-40px">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="icon text-main-color mb-3"><i class="fa fa-bookmark-o"></i></div>
          <div class="h2"><?php echo $latest_news_title ?></div>
          <div class="des"><?php echo $latest_news_content ?></div>
        </div>
      </div>
    </div>
    <!-- // End Title -->
    <div class="row">
      <div class="col-lg-4 col-md-6 sm-mb-35px">
        <div class="blog-item">
          <div class="img">
            <a href="#"><img src="assets/img/blog-grid-1.jpg" alt=""></a>
            <a href="#" class="date">
              <span class="day">15</span>
              <span class="month">Feb</span>
            </a>
          </div>
          <a href="#" class="title"><?php echo $news_1 ?></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 sm-mb-35px">
        <div class="blog-item">
          <div class="img">
            <a href="#"><img src="assets/img/blog-grid-2.jpg" alt=""></a>
            <a href="#" class="date">
              <span class="day">30</span>
              <span class="month">April</span>
            </a>
          </div>
          <a href="#" class="title"><?php echo $news_2 ?></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 sm-mb-35px">
        <div class="blog-item">
          <div class="img">
            <a href="#"><img src="assets/img/blog-grid-3.jpg" alt=""></a>
            <a href="#" class="date">
              <span class="day">03</span>
              <span class="month">Dec</span>
            </a>
          </div>
          <a href="#" class="title"><?php echo $news_3 ?></a>
        </div>
      </div>
    </div>
  </div>
</div>