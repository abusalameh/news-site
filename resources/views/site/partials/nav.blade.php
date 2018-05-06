<div class="main-nav clearfix">
		<div class="container">
			<div class="row">
				<nav class="site-navigation navigation">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>

						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="nav-item">
					        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					      </li>
								@if ($nav_data->count())
									@foreach ($nav_data as $category)
										<li class="nav-item ">
							        <a class="nav-link" href="/category/{{ $category->id }}">{{ $category->name }} <span class="sr-only">(current)</span></a>
							      </li>	
									@endforeach 
								@endif
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->
					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->

	</div>