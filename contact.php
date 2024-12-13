<?php include('include/header.php') ?>



		<!-- ***** Breadcrumb Area Start ***** -->
		<section id="home" class="breadcrumb-area has-overlay overlay-gradient d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Breamcrumb Content -->
						<div class="breadcrumb-content text-center">
							<h2 class="text-white">Contact Us</h2>
							<ol class="breadcrumb d-flex justify-content-center">
								<li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
								
								<li class="breadcrumb-item text-white active">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Breadcrumb Area End ***** -->

		<!--====== Contact Area Start ======-->
		<section id="contact" class="contact-area">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-12 col-md-5">
						<div class="contact-info">
							<h3 class="mt-0">Schedule a call with us to see if we can help</h3>
							<p>Whether you’re looking to start a new project or simply want to chat, feel free to reach out to us!</p>

							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex align-items-center">
									<!-- Icon Box -->
									<div class="icon-box me-3">
										<div class="icon">
											<span class="contact-icon material-symbols-outlined">call</span>
										</div>
									</div>
									<span><a href="tel:+18904735102">+1.890.473.5102</a></span>
								</li>

								<li class="list-group-item d-flex align-items-center">
									<!-- Icon Box -->
									<div class="icon-box me-3">
										<div class="icon">
											<span class="contact-icon material-symbols-outlined">mark_email_unread</span>
										</div>
									</div>
									<span><a href="mailto:hello@yourmail.com">hello@yourmail.com</a></span>
								</li>

								<li class="list-group-item d-flex align-items-center">
									<!-- Icon Box -->
									<div class="icon-box me-3">
										<div class="icon">
											<span class="contact-icon material-symbols-outlined">location_on</span>
										</div>
									</div>
									<span>912 Park Ave, Ketchikan, Alaska 99901, USA</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6 mt-4 mt-md-0">
						<form id="contact-form" class="contact-form outlined" method="POST" action="assets/php/mail.php">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
								<label for="name">Name</label>
							</div>
							<div class="form-floating mb-3">
								<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
								<label for="email">Email address</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
								<label for="subject">Subject</label>
							</div>
							<div class="form-floating mb-4">
								<textarea class="form-control" name="message" id="message" placeholder="Leave a comment here" required style="height: 100px"></textarea>
								<label for="message">Message</label>
							</div>
							<button type="submit" class="btn swap-icon">Submit Message<i class="icon bi bi-arrow-right-short"></i></button>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
			</div>
		</section>
		<!--====== Contact Area End ======-->

		<!--====== Map Area Start ======-->
		<section class="map-area p-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.596666220624!2d-0.16124461362595294!3d51.46556134684942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605a25375dfb7%3A0xe0d9fa09dcf932a8!2s15%20Theatre%20St%2C%20Battersea%2C%20London%20SW11%205ND%2C%20UK!5e0!3m2!1sen!2sbd!4v1567427969685!5m2!1sen!2sbd" width="100" height="100" style="border:0;" allowfullscreen=""></iframe>
		</section>
		<!--====== Map Area End ======-->

<?php include('include/footer.php') ?>