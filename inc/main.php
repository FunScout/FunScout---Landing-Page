	<div id="hero-section" class="row blue-bg">

        <div class="container-fluid">

			<div class="col-md-12 no-padding">

				<!--[if lt IE 7]>
				    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
				<![endif]-->

				<div class="fs-raffle-wrap col-md-6 no-padding">
					<div class="raffle-form-wrap">
						<h3>A new Website & App that finds fun events and activites for you.</h3>
						<p>We are launching soon! Get on the waiting list and enter our $1,000* raffle here..</p>
						<form class="raffle-form">
							<input type="email" placeholder="Enter email here" id="raffle-email" class="raffle-email" name="raffle-email" > 
							<input type="text" placeholder="Raffle # (optional)" id="raffle-number" class="raffle-number" name="raffle-number" >
							<input type="submit" id="raffle-submit" class="raffle-submit pulse" value="GO" >
							<br/>
							<h4 style="margin-top: 0;"><a hre="#" class="get-a-raffle">Want a raffle?</a></h4>
						</form>
					</div>
				</div><!-- .col-md-6 -->
				
				<div class="fs-video-wrap col-md-6 no-padding">
					<div class="funscout-video">
						<img src="img/zima.jpg" width="640">
					</div>
				</div><!-- .col-md-6 -->

			</div><!-- .col-md-12 -->
		</div><!-- .container-fluid -->
	</div><!-- .row -->

	<div class="row">

        <div class="container-fluid">
			<div class="col-md-12">
				<?php require_once 'partial-prizes.php'; ?>
			</div><!-- .col-md-12 -->
		</div><!-- .container-fluid -->

	</div><!-- .row -->

	<div id="contact-form-wrap" class="row orange-bg">
		<div class="col-md-6 col-md-offset-3">

			<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
				<button type="button" class="btn btn-info btn-default btn-lg">Get In Touch With Us</button>
			</div>

			<form id="contact-form" class="hide" name="contact-form" action="contact.php" method="post">
				<div class="row">
					<div class="col-md-6">
						<input type="text" class="user" name="user" placeholder="Name">
					</div>
					<div class="col-md-6">
						<input type="email" class="email" name="user" placeholder="Email">
					</div>
				</div>
				

				<div class="row">
					<div class="col-md-6">
						<select class="subject" name"subject">
							<option value="1">Saying Hi!</option>
							<option value="2">Im A Business</option>
							<option value="3">Media Request</option>
						</select>
					</div>
					<div class="col-md-6">
						<input type="tel" class="phone" name="user" placeholder="Phone">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<textarea class="message" name="message" row="5" placeholder="Your fun message"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
                		<button type="submit" style="width:100%;" class="btn btn-lg btn-default btn-info">Send</button>
					</div>
				</div>
			</form>
		</div><!-- .col-md-f -->
	</div><!-- .row -->