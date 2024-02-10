	<!-- footer Start -->
	<footer class="footer section aasi1 gray-bg">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-4 mr-auto col-sm-6">
	                <div class="widget mb-5 mb-lg-0">
	                    <div class="logo mb-4">
	                        <img src="{{asset('fronted/images/logo2.png')}}" alt="" width="200px" class="img-fluid">
	                    </div>
	                    <p>Pain management clinics have facilities of modern interventional pain management techniques
	                        in their clinic. Mostly these techniques are nerve blocks, epidurals, joint injections.</p>

	                    <ul class="list-inline footer-socials mt-4">
	                        <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
	                                    class="icofont-facebook"></i></a></li>
	                        <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
	                                    class="icofont-twitter"></i></a></li>
	                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
	                                    class="icofont-linkedin"></i></a></li>
	                    </ul>
	                </div>
	            </div>

	            <div class="col-lg-2 col-md-6 col-sm-6">
	                <div class="widget mb-5 mb-lg-0">
	                    <h4 class="text-capitalize mb-3">Our Link</h4>
	                    <div class="divider mb-4"></div>

	                    <ul class="list-unstyled footer-menu lh-35">
	                        <li><a href="{{url('/')}}">Home </a></li>
	                        <li><a href="{{url('About')}}">About</a></li>
	                        <li><a href="{{url('Services')}}">Services</a></li>
	                        <li><a href="{{url('Gallery')}}">Gallery</a></li>
	                        <li><a href="{{url('Appointment')}}">Appointment</a></li>
	                        <li><a href="{{url('Contact')}}">Contact</a></li>
	                    </ul>
	                </div>
	            </div>

	            <div class="col-lg-2 col-md-6 col-sm-6">
	                <div class="widget mb-5 mb-lg-0">
	                    <h4 class="text-capitalize mb-3">Services</h4>
	                    <div class="divider mb-4"></div>

	                    <ul class="list-unstyled footer-menu lh-35">
	                        <li><a href="{{url('Services')}}">Plantar Fasciitis</a></li>
	                        <li><a href="{{url('Services')}}">Discogenic Back Pain
	                            </a></li>
	                        <li><a href="{{url('Services')}}">Carpal Tunnel Syndrome
	                            </a></li>
	                        <li><a href="{{url('Services')}}">Fibromyalgia</a></li>
	                        <li><a href="{{url('Services')}}">Slipped disc</a></li>
	                    </ul>
	                </div>
	            </div>

	            <div class="col-lg-3 col-md-6 col-sm-6">
	                <div class="widget widget-contact mb-5 mb-lg-0">
	                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
	                    <div class="divider mb-4"></div>

	                    <div class="footer-contact-block mb-4">
	                        <div class="icon d-flex align-items-center">
	                            <i class="icofont-email mr-3"></i>
	                            <span class="h6 mb-0">Support Available for 24/7</span>
	                        </div>
	                        <h4 class="mt-2"><a href="mailto:asifkhannimbbi@gmail.com">Support@email.com</a></h4>
	                    </div>

	                    <div class="footer-contact-block">
	                        <div class="icon d-flex align-items-center">
	                            <i class="icofont-support mr-3"></i>
	                            <span class="h6 mb-0">Mon to Sat : 08:00AM - 10:00PM</span>
	                        </div>
	                        <h4 class="mt-2"><a href="tel:+919587858315">+919587858315</a></h4>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="footer-btm py-2">
	            <div class="row align-items-center justify-content-between">
	                <div class="col-lg-6">
	                    <div class="copyright">
	                        Copyright © 2023 <a href="https://codenact.com/" target="_blank">Codenact</a> -
	                        All Rights Reserved.
	                    </div>
	                </div>

	            </div>

	            <div class="row">
	                <div class="col-lg-4">
	                    <a class="backtop js-scroll-trigger" href="#top">
	                        <i class="icofont-long-arrow-up"></i>
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>

<style>
	.displynone{
		display:none !important;
	}
</style>



	<a class="whats-app" href="https://api.whatsapp.com/send?phone=9587858315&text=hello!" target="_blank">
	    <i class="fa fa-whatsapp my-float"></i>
	</a>

	<!-- 
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="{{asset('fronted/plugins/jquery/jquery.js')}}"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="{{asset('fronted/plugins/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('fronted/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('fronted/plugins/counterup/jquery.easing.js')}}"></script>
	<!-- Slick Slider -->
	<script src="{{asset('fronted/plugins/slick-carousel/slick/slick.min.js')}}"></script>
	<!-- Counterup -->
	<script src="{{asset('fronted/plugins/counterup/jquery.waypoints.min.js')}}"></script>

	<script src="{{asset('fronted/plugins/shuffle/shuffle.min.js')}}"></script>
	<script src="{{asset('fronted/plugins/counterup/jquery.counterup.min.js')}}"></script>
	<!-- Google Map -->
	<script src="{{asset('fronted/plugins/google-map/map.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&amp;callback=initMap">
	</script>

	<script src="{{asset('fronted/js/script.js')}}"></script>
	<script src="{{asset('fronted/js/contact.js')}}"></script>

<script>
	$(document).ready(function(){
		setTimeout(() => {
			$('.alert').addClass('displynone');
		}, 2000);
	});
</script>

	</body>
	</html>