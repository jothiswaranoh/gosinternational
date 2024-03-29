<?php
include 'libs/load.php';
include "./_templates/_head.php";
include "./_templates/_service_header.php";
$contact_us = "
Experience unparalleled service with Green Ocean Sea International Private Limited. 
Contact us now to embark on a seamless logistics journey and discover the difference our expertise can make in simplifying your transportation and warehousing needs";;
$phone_num_1 = "+91 44313 15352 ";
$phone_num_2 = "+91 99320 88788";
$addr_content = "18/4 Sippighat, Port Blair-Andaman & Nicobar-744105";
?>

<div class="page-title">
  <div class="container">
    <div class="padding-tb-120px">
      <h1>Contact Us</h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Contact Us</li>
      </ol>
    </div>
  </div>
</div>


<div class="padding-tb-30px">

  <div class="container">
    <div class="row">

      <div class="col-lg-6 sm-mb-45px">
        <p> <?php echo $contact_us ?></p>
        <h5>Phone :</h5>
        <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> <?php echo $phone_num_1 ?></span>
        <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i><?php echo $phone_num_2 ?></span>
        <h5 class="margin-top-20px">Address :</h5>
        <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i><?php echo $addr_content ?> </span>
        <h5 class="margin-top-20px">Email :</h5>
        <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> info@yoursite.com </span>
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
                <a href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20980.754338669292!2d-118.30289592578626!3d34.08843374094495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z2YTZiNizINij2YbYrNmE2YjYs9iMINmD2KfZhNmK2YHZiNix2YbZitin2Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2ssa!4v1534382441818" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-8"></div>
      <div class="col-lg-4">
        <div class=" background-main-color pull-top-309px">
          <div class="contact-info-map">
            <div class="margin-bottom-30px">
              <h2 class="title">Location</h2>
              <div class="contact-info opacity-9">
                <div class="icon "><span class="icon_pin_alt"></span></div>
                <div class="text">
                  <span class="title-in">Location :</span> <br>
                  <span class="font-weight-500 text-uppercase"><?php echo $addr_content ?></span>
                </div>
              </div>
            </div>
            <hr>
            <div class="call_center ">
              <h2 class="title">Call Center</h2>
              <div class="contact-info opacity-9">
                <div class="icon  "><span class="icon_phone"></span></div>
                <div class="text">
                  <span class="title-in">Call Us :</span><br>
                  <span class="font-weight-500 text-uppercase"><?php echo $phone_num_2 ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>

<?php
include "./_templates/_footer.php";
include "./_templates/_foot.php";
?>