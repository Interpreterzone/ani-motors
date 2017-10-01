 <!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
  <title>Ani Motors | HTML5 Responsive Bootstrap Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('client/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/slick-team-slider.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/style.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--HEADER START-->
	<div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.html">Ani Motors</a>
			</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
			    <li class="active"><a href="#banner">Home</a></li>
			    <li><a href="#service">Service</a></li>
			    <li><a href="#portfolio">Portfolio</a></li>
			    <li><a href="#about">Our Team</a></li>
			    <li><a href="#contact">Contact Us</a></li>
			    <li><a class="btn btn-success" href="#contact">Singup</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	<!--HEADER END-->

<!--

	<div id="contact" class="section-padding">
		<div class="container"></div>
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Quick Contact</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ani Motorsr <br>incididunt ut labore et dolore magna aliqua. </p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                
				<div class="form-sec">
                	<form action="" method="post" role="form" class="contactForm">
                    	<div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
	-->

	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="login-signup col-sm-10 col-sm-push-1 col-md-6 col-md-push-3">
				<div class="login-signup__top no-margin">
					<h2 class="login-signup__heading">Sign up to create your Ani
						Motors                  account</h2>
				</div>
				<div class="panel-body sign-up">

					<form class="new_client" id="new_client" action="/clients" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="ozhXmXfuKx4oeVaJIwZcCk15BqKradWKprrgz8D063bq+dFfzYqH1adkHqxgMY+Gl8lkeQUfIW/OQTBfaEJfKA==">
						<div class="row ">
							<div class="col-sm-6 form-group">
								<input  class=" hidden " id="is-driver-radio" type="radio" value="car rental" checked="checked" name="client[sign_up_intention]">
								<label class="btn btn-primary  selected" >I want to rent</label>
							</div>
							<div class="col-sm-6  form-group">
								<input class=" hidden" id="is-owner-radio" type="radio" value="vehicle owner" name="client[sign_up_intention]">
								<label class="btn btn-white" for="client_sign_up_intention">I am a fleet owner</label>
							</div>
							<div class="col-sm-3"></div>
						</div>

						<div class="row">
							<div class="col-sm-12 form-group rent-car-options radio">
								<div class="radio">
									<input  type="radio" value="car rental" checked="checked" name="client[sign_up_intention]" id="client_sign_up_intention_car_rental">
									<label for="client_sign_up_intention">I want to rent a PCO vehicle</label>
								</div>
								<div class="radio">
									<input  type="radio" value="van rental as individual" name="client[sign_up_intention]" id="client_sign_up_intention_van_rental_as_individual">
									<label for="client_sign_up_intention">I want to rent a van</label>
								</div>
							</div>
						</div>

						<div class="row name-row">
							<div class="col-sm-6">
								<div class="form-group has-feedback">
									<label for="client_first_name">First Name</label>
									<input autofocus="autofocus" required="required" class="form-control" id="first_name" type="text" name="client[first_name]">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group has-feedback">
									<label for="client_last_name">Last Name</label>
									<input autofocus="autofocus" required="required" class="form-control" id="last_name" type="text" name="client[last_name]">
								</div>
							</div>
						</div>

						<div class="form-group has-feedback">
							<label for="client_first_name">Phone</label>
							<input autofocus="autofocus" required="required" class="form-control" id="phone" type="text" name="client[phone]">
						</div>

						<div class="form-group has-feedback">
							<label for="client_email">Email</label>
							<input autofocus="autofocus" required="required" class="form-control" id="email" type="email" value="" name="client[email]">
						</div>

						<div class="form-group has-feedback">
							<label for="client_password">Password</label>
							<input autocomplete="off" required="required" class="form-control" id="password" pattern=".{8,}" oninvalid="setCustomValidity('Password must be at least 8 characters long')" onchange="try{setCustomValidity('')}catch(e){}" type="password" name="client[password]">
						</div>

						<div class="form-group">
							<label for="client_first_name">How did you hear about us?</label>
							<select required="required" class="form-control" name="client[how_did_you_hear_about_us]" id="client_how_did_you_hear_about_us"><option value="">Please select...</option>
								<option value="Radio">Radio</option>
								<option value="Uber Marketplace">Uber Marketplace</option>
								<option value="Facebook group">Facebook group</option>
								<option value="Gumtree">Gumtree</option>
								<option value="Family / friend">Family / friend</option>
								<option value="Google search">Google search</option>
								<option value="Facebook advertising">Facebook advertising</option>
								<option value="PCO magazine">PCO magazine</option></select>
						</div>

						<div class="form-group has-feedback">
							<label for="client_referred_by_code">Referral code</label>
							<input autocomplete="off" class="form-control" id="referral_code" type="text" name="client[referred_by_code]">
						</div>

						<div class="login-signup__bottom">
							<div class="checkbox">
								<input name="client[terms]" type="hidden" value="0"><input required="required" type="checkbox" value="1" name="client[terms]" id="client_terms">
								<label for="client_terms">I agree with Drover's <a href="#" target="_blank">Terms of Service</a></label>
							</div>
						</div>

						<div class="login-signup__submit">
							<input type="submit" name="commit" value="Proceed to Step 2" class="btn btn-primary btn-lg" id="signup-button">
						</div>
					</form>        </div>
			</div>
		</div>
	</div>
	<!--FOOTER START-->
	<footer class="footer section-padding">
		<div class="container">
			<div class="row">
				<div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
					<h3>Follow us on</h3>
					<div class="footer_social">
						<ul>
							<li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>																
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</footer>
	<!--FOOTER END-->
	<div class="footer-bottom">
		<div class="container">
			<div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
				<div class="footer_copyright">
					<p> © Copyright, All Rights Reserved.</p>					
					<div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Ani Motors
                        -->
                        Designed by <a href="https://bootstrapmade.com/">Bootstrap Themes</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
  	<script src="{{ URL::asset('client/js/jquery.min.js') }}"></script>
  	<script src="{{ URL::asset('client/js/jquery.easing.min.js') }}"></script>
  	<script src="{{ URL::asset('client/js/bootstrap.min.js') }}"></script>
  	<script src="{{ URL::asset('client/js/jquery.mixitup.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ URL::asset('client/js/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('client/js/custom.js') }}"></script>

</body>
</html>