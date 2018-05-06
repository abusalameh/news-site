<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewinter.com/html/news247/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Apr 2018 09:43:19 GMT -->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>الرأي العام </title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">

	@include('site.partials.top_bar')
	<!-- Header start -->
	@include('site.partials.header')
	<!--/ Header end -->
	<!-- Menu wrapper start --> 
	@include('site.partials.nav')
	<!-- Menu wrapper end -->
	<!-- Breaking News Start --> 
	@include('site.partials.breaking_news',['breaking_news' => $breaking_news, 'featured' => $featured])
	<!--/ Breaking News end -->

	@include('site.partials.featured_news')
	<!-- Feature area end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				@if ($featured->count())
					@foreach ($featured as $category)
							@foreach ($category->getLatestArticles(4) as $article)
							<div class="col-md-4">
								<div class="block color-dark-blue">
									<h3 class="block-title"><span>Travel</span></h3>
									<div class="post-overaly-style clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="images/news/lifestyle/travel1.jpg" alt="" />
											</a>
										</div>
										
										<div class="post-content">
								 			<h2 class="post-title">
								 				<a href="#">10 Hdrenaline fuelled activities that will chase the…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 03, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post Overaly Article end -->

									<div class="list-post-block">
										<ul class="list-post">
											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="images/news/lifestyle/travel2.jpg" alt="" />
														</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
											 			<h2 class="post-title title-small">
											 				<a href="#">Early tourists choices to the sea of Maldives in fancy dress…</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-date">Mar 13, 2017</span>
											 			</div>
										 			</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 1 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="images/news/lifestyle/travel3.jpg" alt="" />
														</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
											 			<h2 class="post-title title-small">
											 				<a href="#">This Aeroplane that looks like a butt is the largest aircraf…</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-date">Jan 11, 2017</span>
											 			</div>
										 			</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 2 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="images/news/lifestyle/travel4.jpg" alt="" />
														</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
											 			<h2 class="post-title title-small">
											 				<a href="#">19 incredible photos from Disney's 'Star Wars' cruise algore</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-date">Feb 19, 2017</span>
											 			</div>
										 			</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 3 end -->
										</ul><!-- List post end -->
									</div><!-- List post block end -->
								</div><!-- Block end -->
							</div><!-- Travel Col end -->
							@endforeach
					@endforeach 
				@endif 
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 1st block end -->



	

	<footer id="footer" class="footer">

		<div class="footer-info text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-info-content">
							<div class="footer-logo">
								<img class="img-responsive" src="images/logos/logo-big.png" style="width: 150px;height: 150px;" alt="" />
							</div>
							<p>AlRa2y Al3am Worldwide is a popular online newsportal and going source for technical and digital content for its influential audience around the globe. You can reach us via email or phone.</p>
							<p class="footer-info-phone"><i class="fa fa-phone"></i> +(222) 222-1111</p>
							<p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@ra2i.com</p>
							<ul class="unstyled footer-social">
								<li>
									<a title="Rss" href="#">
										<span class="social-icon"><i class="fa fa-rss"></i></span>
									</a>
									<a title="Facebook" href="#">
										<span class="social-icon"><i class="fa fa-facebook"></i></span>
									</a>
									<a title="Twitter" href="#">
										<span class="social-icon"><i class="fa fa-twitter"></i></span>
									</a>
									<a title="Google+" href="#">
										<span class="social-icon"><i class="fa fa-google-plus"></i></span>
									</a>
									<a title="Linkdin" href="#">
										<span class="social-icon"><i class="fa fa-linkedin"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-skype"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-dribbble"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-pinterest"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-instagram"></i></span>
									</a>
								</li>
							</ul>
						</div><!-- Footer info content end -->
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer info end -->

	</footer><!-- Footer end -->

	<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © {{ date('Y')}} Ra2i A5ar All Rights Reserved. Designed By Asmaa</span>
						</div>
					</div>

					
				</div><!-- Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
		</div><!-- Copyright end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>


	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>

<!-- Mirrored from themewinter.com/html/news247/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Apr 2018 09:43:22 GMT -->
</html>