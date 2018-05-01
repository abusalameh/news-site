<div class="trending-light hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="trending-title">Trending Now</h3>
					<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
						@foreach ($breaking_news as $news)
							<div class="item">
							   <div class="post-content">
							      <h2 class="post-title title-small">
							         <a href="#">
													{{ $news }}
							         </a>
							      </h2>
							   </div><!-- Post content end -->
							</div><!-- Item 1 end -->
						@endforeach
					</div><!-- Carousel end -->
				</div><!-- Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div>