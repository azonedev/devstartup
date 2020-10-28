 <!-- footer -->
		<footer>
			<div class="fluid">
				<div class="middle">
					<div class="container">
						<div class="p-4"></div>
						<div class="row p-1">
							<div class="col-md-4 col-sm-6">
								<h2>Address & Contact</h2>
								<p>{{$moto}}</p>
								<i class="fa fa-home"></i><a href="{{$google_map}}" class="a-white" data-lity> {{$address}}</a>
								<br>
								<i class="fa fa-phone"></i><a href="tel:123-456-7890" class="a-white"> {{$phone}}</a>
								<br>
								<i class="fa fa-envelope"></i><a href="mailto:{{$mail}}" class="a-white"> {{$mail}}</a>
								<br>
								<div class="p-2"></div>
								<h2>Social Link</h2>
								
								<div class="row p-3">
										<div class="col-4 col-sm-4 d-block">
											<a href="{{$facebook}}" target="_blank">
												<div class="footer-top-icon">
													<i class="fa fa-facebook"></i>
													<small>Facebook</small>
												</div>
											</a>
										</div>
										<div class="col-4 col-sm-4 d-block">
											<a href="{{$youtube}}" target="_blank">
												<div class="footer-top-icon">
													<i  class="text-danger fa fa-youtube-play"></i>
													<small>Youtube</small>
												</div>
											</a>
										</div>
										
										<div class="col-4 col-sm-4 d-block">
											<a href="{{$linkedin}}" target="_blank">
												<div class="footer-top-icon">
													<i class="fa fa-linkedin"></i>
													<small>Linkedin</small>
												</div>
											</a>
										</div>
								</div>
								
							</div>			
							<div class="col-md-4 col-sm-6">
								<h2>Quick Link </h2>
								<a href="#"><p>Admission</p></a>
								<a href="#departments"><p>Departments</p></a>
								<a href="#"><p>Training</p></a>
							 	<a href="#about-company"><p>About Company</p></a>
							 	<a href="#how-we-work"><p>How We Work</p></a>
							 	<a href="#our-solutions"><p>Our Solutions</p></a>
							 	<a href="#team"><p>Our Team</p></a>
							 	<a href="#technologies"><p>Technologies</p></a>
							</div>			
							<div class="col-md-4 col-sm-6">
                                <h2>{{$event_title}}</h2>
                                <div class="p-2"></div>
								<a href="{{$event_link}}">
									<img src='{{asset("$event_img")}}' width="100%" style="max-width: 100%;" alt="">
								</a>
							</div>			
						</div>
						<div class="p-4"></div>

					</div>
				</div>
			</div>
			<div class="fluid footer-two">
				<div class="bottom">
					<div class="container">
						<div class="row p-3">
							<div class="col-md-6 col-sm-6">
								<div class="footer-bottom float-left"><a href="{{$copy_left_link}}">{{$copy_left}}</a> &copy; @php
									echo date("Y");
								@endphp</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="footer-bottom float-right">Technical Help &copy; <a href="{{$copy_right_link}}" target="_blank"> {{$copy_right}}</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- / footer -->