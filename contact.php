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
							<h3 class="mt-0">Connect with Our Team</h3>
							<p>Reach out to us for personalized support, expert guidance, and solutions tailored to meet your unique needs and goals</p>

							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex align-items-center">
									<!-- Icon Box -->
									<div class="icon-box me-3">
										<div class="icon">
											<span class="contact-icon material-symbols-outlined">call</span>
										</div>
									</div>
									<span><a href="tel:+18904735102">+12098213</a></span>
								</li>

								<li class="list-group-item d-flex align-items-center">
									<!-- Icon Box -->
									<div class="icon-box me-3">
										<div class="icon">
											<span class="contact-icon material-symbols-outlined">mark_email_unread</span>
										</div>
									</div>
									<span><a href="mailto:abc@abc.com">abc@abc.com</a></span>
								</li>

								<li class="list-group-item d-flex align-items-center">
									<!-- Icon Box -->
									<div class="icon-box me-3">
										<div class="icon">
											<span class="contact-icon material-symbols-outlined">location_on</span>
										</div>
									</div>
									<span>NHPC Chowk Faridabad</span>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.6871629733378!2d77.30357157480161!3d28.458845391948035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02339e9d5589%3A0x7591a5b161c6c05d!2sMaisha%20Infotech%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1734087809200!5m2!1sen!2sin" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</section>
		<!--====== Map Area End ======-->

<?php include('include/footer.php') ?>