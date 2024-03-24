<?php
include 'libs/load.php';
include "./_templates/_head.php";
include "./_templates/_service_header.php";
?>


<!-- Search  -->
<div id="search">
	<button type="button" class="close">×</button>
	<form class="clearfix d-block">
		<input type="search" value="" placeholder="Search for . . . ." />
		<button type="submit" class="btn btn-primary">Search</button>
	</form>
</div>
<!-- // Search  -->

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
			<h1>Cargo Transportation</h1>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Cargo Transportation</li>
			</ol>
		</div>
	</div>
</div>


<div class="padding-tb-100px">
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

				<p>"Embark on a journey of seamless cargo transportation with us, where no challenge is too big and no cargo too complex.
					From the smallest packages to the largest pieces of equipment, we handle every cargo with professionalism and care. 
					Regardless of their size or nature, your items will be carried effectively and safely thanks to our complete approach. 
					Allow us to be your dependable logistics partner, bringing comfort with each shipment.</p>

				<h2>We provide Customized Logistics Services , bridging the gap between Storage and Transportation </h2>

				<p>We feel delight in providing a full range of services at our logistics firm to meet all of your demands for storage and transportation.
					Our <i>air freight</i> services guarantee the timely and effective delivery of your goods, utilizing the dependability and speed of air travel to effortlessly connect you with international markets.
					Our <i>ocean freight</i> services, backed by our dedication to expertise and dependability, offer trustworthy and affordable transport across great distances for larger cargo or those needing cost-effective solutions.
					Furthermore, our <i>packaging and storage</i> facilities are outfitted with the necessary tools to carefully protect your priceless cargo, guaranteeing safe handling and preservation all the way around.
				</p>


				<div id="accordion" class="nile-accordion margin-top-30px sm-mb-45px">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-block btn-link active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i> Why us ?</button>
							</h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
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
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
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
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
						</div>
					</div>
				</div>
			</div>



			<div class="col-lg-3">

				<div class="background-main-color margin-bottom-40px">
					<div class="services-list">
						<ul>
							<li><a href="service-single.html">Air Freight</a></li>
							<li><a href="service-single.html">Ocean Freight</a></li>
							<li><a href="service-single.html">Packaging and Storage</a></li>
							<li class="active"><a href="service-single.html">Cargo Transportation </a></li>
							<li><a href="service-single.html">Fast Delivery</a></li>
							<li><a href="service-single.html">Railroad Transportation</a></li>
						</ul>
					</div>
				</div>



				<div class="background-white margin-bottom-40px">
					<div class="nile-widget contact-widget">
						<div class="padding-30px">
							<div class="margin-bottom-60px">
								<h2 class="title">Location</h2>
								<div class="contact-info opacity-9">
									<div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
									<div class="text">
										<span class="title-in">Location :</span> <br>
										<span class="font-weight-500 text-uppercase">US - Los Angeles</span>
									</div>
								</div>
							</div>
							<div class="call_center">
								<h2 class="title">Call Center</h2>
								<div class="contact-info opacity-9">
									<div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
									<div class="text">
										<span class="title-in">Call Us :</span><br>
										<span class="font-weight-500 text-uppercase">00222123333019</span>
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
				<h2>Unbeatable Trucking and Transport Services</h2>
				<div class="text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
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