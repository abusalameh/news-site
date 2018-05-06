<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				@if ($featured->count())
				<div class="col-md-12 col-xs-12 pad-r">
							<div id="featured-slider" class="owl-carousel owl-theme featured-slider content-bottom">
					@foreach ($featured as $category) 
						@foreach ($category->getLatestArticles(1) as $article)
								{{-- {{ $imagePath = public_path("images/$article->image") }} --}}
								
								<div class="item" style="background-image:url({{ 'images/'.$article->image }})">
									<div class="featured-post">
								 		<div class="post-content">
								 			<a class="post-cat" href="/article/{{$article->id}}">{{ $article->category->name }}</a>
								 			<h2 class="post-title title-extra-large">
								 				<a href="/article/{{$article->id}}">{{ $article->summary }}</a>
								 			</h2>
								 			<span class="post-date">{{ $article->created_at->formatLocalized('%d %B %Y') }}</span>
								 		</div>
								 	</div><!--/ Featured post end -->
								</div><!-- Item 1 end -->
						@endforeach 
					@endforeach
						</div>
					</div>
					</div><!-- Row end -->
				</div><!-- Col 6 end -->
				@endif
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>