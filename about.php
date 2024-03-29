<?php
include 'libs/load.php';
include "./_templates/_head.php";
include "./_templates/_service_header.php";

$who_we_are_heading = "25 years of experience in Logistics services";

$who_we_are_content = "We are leaders in the field of logistics services, having established standards for excellence in freight transportation throughout a 25-year history.
Our path serves as evidence of our steadfast dedication to effectiveness, dependability, and client pleasure.
We have mastered our skills by navigating through difficulties and victories, from busy ports to the most remote regions of the world.
With an eye for innovation and a drive for excellence, we create custom solutions that skillfully combine knowledge, experience, and individualized attention.
You can rely on us to deliver your cargo quickly and precisely, making sure it gets to its destination without incident.
Discover the distinction by working with our skilled staff, who are committed to offering the best logistics solutions available.";

$truck_transport_service = "For the past 25 years, we have set the standard for service in the transportation sector.
We have decades of experience and have mastered the art of dependable, safe, and timely delivery of goods.
Our trained team of experts manages all elements of logistics, ensuring that every trip runs smoothly from start to finish.
Our fleet of vehicles can effortlessly negotiate any terrain, earning the trust of consumers all around the world, whether they are in crowded cities or remote rural locations.";

$our_service_content = "We provide a complete range of logistical solutions adapted to your specific requirements.
From efficient <i>Cargo transportation</i> to fast <i>air and ocean freight services</i> , we ensure that your items
arrive safely and on time.
Additionally, our experienced <i>packaging and storage</i> facilities provide the highest care and security for your
treasured cargo.
We handle your logistical needs with accuracy, dependability, and unparalleled experience.";

$cargo_transportation_content = "From little gifts to large loads , we handle every cargo with the highest care and attention to detail,  to give our customers a flawless and trouble-free experience.";

$cruiser_content = "For those looking for some entertainment, we have a variety of activities available on board. From live music performances to water sports, there's something for everyone to enjoy.";

$ocean_freight_content = "Join us in exploring the power of ocean freight as we reliably and precisely move your cargo from port to port and coast to coast.";

$pack_storage_content = "Your cargo is safe with us in our warehouses, where we prioritize its integrity. 
                         Whether heavy-duty equipment or delicate goods, our storage offers peace of mind, knowing your shipments are secure.";
?>

<!-- Get A Quote  -->
<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content margin-top-150px background-main-color">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="assets/img/contact-img.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="padding-30px">
                        <h3 class="padding-bottom-15px">Get A Free Quote</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" id="inputName4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <a href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Get A Quote  -->

<div class="page-title">
    <div class="container">
        <div class="padding-tb-120px">
            <h1>About Us</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </div>
    </div>
</div>

<!--============= About Us =============-->
<div class="nile-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-mb-45px">

                <div class="section-title-right text-main-color clearfix">
                    <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
                    <h2 class="title-text">Who We Are ?</h2>
                </div>
                <div class="about-text margin-tb-25px">
                    <h4><?php echo $who_we_are_heading ?></h4>
                    <p> <?php echo $who_we_are_content ?></p>
                </div>

            </div>
            <div class="col-lg-6">
                <img src="assets/img/gritte-QUv_ahxIdPw-unsplash.jpg" width="540px" height="264px" alt="">
            </div>
        </div>
    </div>
</div>

<!--============= //About Us =============-->
<?php
include "./_templates/_letter.php";
?>

<div class="nile-about-section">
    <div class="container">
        <!-- Title -->
        <div class="section-title margin-bottom-40px">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="icon text-main-color"><img src="assets/icons/service-blue-3.png" alt=""></div>
                    <div class="h2">Our Service</div>
                    <div class="des">
                        <p> <?php echo $our_service_content ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // End Title -->

        <div class="row">

            <div class="col-lg-4">
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
                    <a href="#" class="title h2">Cargo Transportation</a>
                    <div class="des">
                        <p><?php echo $cargo_transportation_content ?></p>
                    </div>
                </div>
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
                    <a href="#" class="title h2">Cruiser</a>
                    <div class="des">
                        <p><?php echo $cruiser_content ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center sm-mb-45px">
                    <img src="assets/img/about-2.jpg" alt="" class="border-radius-500">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/service-blue-3.png" alt=""></div>
                    <a href="#" class="title h2">Ocean Freight</a>
                    <div class="des">
                        <p><?php echo $ocean_freight_content ?></p>
                    </div>
                </div>
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/service-blue-4.png" alt=""></div>
                    <a href="#" class="title h2">Packaging & Storage</a>
                    <div class="des">
                        <p><?php echo $pack_storage_content ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center margin-top-35px">
            <a href="service.php" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
        </div>

    </div>
</div>

<?php
include "./_templates/_footer.php";
include "./_templates/_foot.php";
?>