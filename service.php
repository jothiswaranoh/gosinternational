<?php
include 'libs/load.php';
include "./_templates/_head.php";
include "./_templates/_service_header.php";


$service_content_1 = "Embark on a journey of seamless cargo transportation with us, where no challenge is too big and no cargo too complex.
From the smallest packages to the largest pieces of equipment, we handle every cargo with professionalism and care.
Regardless of their size or nature, your items will be carried effectively and safely thanks to our complete approach.
Allow us to be your dependable logistics partner, bringing comfort with each shipment.";

$truck_transpot_title = "Unbeatable Trucking and Transport Services";
$truck_transport = "Use our world-class shipping and transport services to deliver your goods quickly and effectively. 
You can rely on us to deliver your things in pristine condition, on time, and to their intended location.";

$service_content_heading = "We provide Customized Logistics Services , bridging the gap between Storage and Transportation ";

$service_content_2 = "We feel delight in providing a full range of services at our logistics firm to meet all of your demands for storage and transportation.
Our <i>air freight</i> services guarantee the timely and effective delivery of your goods, utilizing the dependability and speed of air travel to effortlessly connect you with international markets.
Our <i>ocean freight</i> services, backed by our dedication to expertise and dependability, offer trustworthy and affordable transport across great distances for larger cargo or those needing cost-effective solutions.
Furthermore, our <i>packaging and storage</i> facilities are outfitted with the necessary tools to carefully protect your priceless cargo, guaranteeing safe handling and preservation all the way around.";

$why_us_content = "Count on Green Ocean Ship International Pvt Ltd's proven track record of excellence and unwavering commitment to your satisfaction, making us the dependable choice for all your logistics needs.";

$explore_facilities_content = "Our shipping services include ferry and cargo transportation wherever the demand exceeds. Our strategic approach involves catering to a diverse clientele, including large institutions, government contractors, and warehouses, by providing equipment logistics with the effective approach of various large companies.";

$warehouse_solution_content = "Explore the possibilities of Impeccable storage solution with the aid of our warehouse solutions. Our cutting-edge security and personalized inventory management offer a secure haven for your possessions that ensures efficiency and security at all times.";

$get_quote_title = "Get A Free Quote";

$cargo_transport_title = "Cargo Transportation";

$location_title = "LOCATION";
$location_in_title = "Location: ";
$location_content = "18/4 Sippighat, Port Blair-Andaman & Nicobar-744105.";

$call_center_title = "Call Center";
$call_in_title = "Call Us: ";
$call_center_content = " +91 44313 15352 <br> +91 99320 88788";
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
						<h3 class="padding-bottom-15px"><?php echo $get_quote_title ?></h3>
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
			<h1><?php echo $cargo_transport_title ?></h1>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Cargo Transportation</li>
			</ol>
		</div>
	</div>
</div>


<div class="padding-tb-30px">
	<div class="container">
		<div class="row">

			<div class="col-lg-9">
				<div class="service-slider-img margin-bottom-30px">
					<ul class="slider-1">
						<li><img src="assets/img/service_1.jpg" alt=""></li>
						<li><img src="assets/img/service_2.jpg" alt=""></li>
						<li><img src="assets/img/service_3.jpg" alt=""></li>
					</ul>
				</div>

				<p><?php echo $service_content_1 ?></p>

				<h2><?php echo $service_content_heading ?></h2>

				<p><?php echo $service_content_2 ?></p>


				<div id="accordion" class="nile-accordion margin-top-30px sm-mb-45px">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-block btn-link active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i> Why us ?</button>
							</h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<p><?php echo $why_us_content ?></p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-truck"></i> Explore our Facilities</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<p><?php echo $explore_facilities_content ?></p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-plane"></i> Warehousing Solution</button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<p><?php echo $warehouse_solution_content ?> </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="background-white margin-bottom-40px">
					<div class="nile-widget contact-widget">
						<div class="padding-30px">
							<div class="margin-bottom-60px">
								<h2 class="title"><?php echo $location_title ?></h2>
								<div class="contact-info opacity-9">
									<div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
									<div class="text">
										<span class="title-in"><?php echo $location_in_title ?></span> <br>
										<span class="font-weight-500 text-uppercase"><?php echo $location_content ?></span>
									</div>
								</div>
							</div>
							<div class="call_center">
								<h2 class="title"><?php echo $call_center_title ?></h2>
								<div class="contact-info opacity-9">
									<div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
									<div class="text">
										<span class="title-in"><?php echo $call_in_title ?></span><br>
										<span class="font-weight-500 text-uppercase"><?php echo $call_center_content ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="contact-modal">
					<div class="background-grey-4 text-white">
						<div class="padding-30px">
							<h3 class="padding-bottom-15px">Get A Free Quote</h3>
							<form>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label>Full Name</label>
										<input type="text" class="form-control" id="inputName44" placeholder="Name">
									</div>
									<div class="form-group col-md-12">
										<label>Email</label>
										<input type="email" class="form-control" id="inputEmail44" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
								</div>
								<a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</a>
							</form>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<div class="call-action ba-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 padding-tb-15px">
				<h2><?php echo $truck_transpot_title ?></h2>
				<div class="text">
					<p><?php echo $truck_transport ?></p>
				</div>
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
						<a href="#" class="action-bottom layout-1">
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