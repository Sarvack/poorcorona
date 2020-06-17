				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="post post-widget">
							<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ asset($post_terbaru->gambar)}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{ route('blog.category',$post_terbaru->category) }}">{{ $post_terbaru->category->name }}</a>
								</div>
								<h3 class="post-title"><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
							</div>
						</div>
						@endforeach
						<!-- /post -->
					</div>
					<!-- /post widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Subscribe to get latest information</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button"><a href="mailto:sarvaclever@gmail.com">Subcribes</a></button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

				</div>