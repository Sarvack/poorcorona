<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html" class="logo"><img src="{{ asset('public/frontend/img/poor_corona-alt.png') }}" alt=""></a>
						</div>
						<p>Simple blog to prevent corona virus from trusted sources.</p>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								@foreach($footer_tag as $hasil)
								<li><a href="{{ route('blog.list') }}">{{ $hasil->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<form>
								<p>Subscribe to get latest information</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="{{ url('') }}">Home</a></li>
						<li><a href="{{ route('blog.list') }}">Category</a></li>
						<li><a href="{{ route('blog.list') }}">List Post</a></li>
						<li><a href="{{ route('blog.pasien') }}">Data Corona</a></li>
						<li><a href="{{ route('blog.hotline') }}">Hotline</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 

					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/main.js') }}"></script>

</body>

</html>