<?php
include 'libs/load.php';
include './_templates/_head.php';
include './_templates/_service_header.php';
$aboutSections = array(
  array(
    "title" => "History",
    "content" => "Green Ocean Shipping International Private Ltd is committed to becoming the leader in the shipping industry market in the Andaman and Nicobar Islands. Our mission is to provide and serve the people of Andaman and India, aiming to enhance economic stability and improve living conditions on the islands and in their respective regions. We aim to build a reputation for reliability, satisfaction, and innovation. Through a strategic partnership focused on efficiency and results orientation, we aim to contribute to the accessibility and popularity in nation-building and the shipping industry market.",
    "icon" => "assets/icons/title-icon-1.png",
    "image" => "assets/img/gritte-QUv_ahxIdPw-unsplash.jpg"
  ),
  array(
    "title" => "Mission",
    "content" => "Our mission is to provide and serve the people of Andaman and India, aiming to enhance economic stability and improve living conditions on the islands and in their respective regions. We aim to build a reputation for reliability, satisfaction, and innovation. Through a strategic partnership focused on efficiency and results orientation, we aim to contribute to the accessibility and popularity in nation-building and the shipping industry market.",
    "icon" => "assets/icons/title-icon-1.png",
    "image" => "assets/img/gritte-QUv_ahxIdPw-unsplash.jpg"
  ),
  array(
    "title" => "Vision",
    "content" => "Green Ocean Shipping Int Pvt Ltd envisions establishing itself as a prominent leader in the shipping industry in the Andaman and Nicobar Islands, India. We aspire to provide a comprehensive range of top-notch and innovative ocean-going multimodal transportation services, tailored to meet the ever-changing preferences of our customers. We seek recognition for our unwavering commitment to excellence, ethical business conduct, and sustainable effective practices. Through continuous improvement and customer-centric strategies, we aim to emerge as a trusted and influential presence in the nation-building and also 'Make in India' / 'Sagar Mala' projects, contributing to the overall growth and satisfaction of our clientele.",
    "icon" => "assets/icons/title-icon-3.png",
    "image" => "assets/img/gritte-QUv_ahxIdPw-unsplash.jpg"
  ),
  array(
    "title" => "Industry Recognition",
    "content" => "Green Ocean Shipping International Ltd has consistently earned accolades. It was recognized as the best shipping service for rescuing distressed people during the 2005 tsunami and received an appreciation award from the Andaman Nicobar administration. This recognition underscores our unwavering dedication to excellence in the shipping sector.",
    "icon" => "assets/icons/title-icon-4.png",
    "image" => "assets/img/gritte-QUv_ahxIdPw-unsplash.jpg"
  ),
  array(
    "title" => "Transparency and Relationships",
    "content" => "At Green Ocean Shipping International Pvt Ltd, we prioritize transparency and cultivate strong relationships. With sufficient potential clients, our commitment to openness and trust forms the cornerstone of our success.",
    "icon" => "assets/icons/title-icon-5.png",
    "image" => "assets/img/gritte-QUv_ahxIdPw-unsplash.jpg"
  ),
);


?>
<!-- <section id="call-to-action" class="call-to-action">
  <div class="container aos-init aos-animate" data-aos="zoom-out">

    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </div>

  </div>
</section> -->
<!-- ======= Features Section ======= -->


<section id="features" class="features">
  <div class="container">

    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

      <div class="col-md-5">
        <img src="assets/img/about-1.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 padding-top-16px">
        <h3><?php echo $aboutSections[0]["title"]; ?></h3>
        <p class="fst-italic"><?php echo $aboutSections[0]["content"]; ?></p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
      <div class="col-md-5 order-1 order-md-2">
        <img src="assets/img/about-1.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1 padding-top-16px">
        <h3><?php echo $aboutSections[1]["title"]; ?></h3>
        <p class="fst-italic"><?php echo $aboutSections[1]["content"]; ?></p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
      <div class="col-md-5">
        <img src="assets/img/about-1.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 padding-top-16px">
        <h3><?php echo $aboutSections[2]["title"]; ?></h3>
        <p><?php echo $aboutSections[2]["content"]; ?></p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
      <div class="col-md-5 order-1 order-md-2">
        <img src="assets/img/about-1.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1 padding-top-16px">
        <h3><?php echo $aboutSections[3]["title"]; ?></h3>
        <p class="fst-italic"><?php echo $aboutSections[3]["content"]; ?></p>
      </div>
    </div><!-- Features Item -->

  </div>
</section><!-- End Features Section -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about pt-0">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">
      <!-- <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
        <img src="assets/img/about.jpg" class="img-fluid" alt="">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
      </div> -->
      <div class="col-lg-6 content order-last  order-lg-first">
        <h3><?php echo $aboutSections[4]["title"]; ?></h3>
        <p><?php echo $aboutSections[4]["content"]; ?></p>

      </div>
    </div>

  </div>
</section>

<?php
include './_templates/_footer.php';
include './_templates/_foot.php';
?>