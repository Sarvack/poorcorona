@extends('template_blog.content')
@section('isi')
<div class="col-md-8 hot-post-left">


				@foreach($data as $list_category) 
					<div class="post post-row">
						<a class="post-img" href="{{ route('blog.category', $list_category->category->category_id ) }} "><img src="{{ asset($list_category->gambar)}}" alt="{{ $list_category->judul }}"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{ $list_category->category->name }}</a>

							</div>
							<h3 class="post-title"><a href="blog-post.html">{{ $list_category->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $list_category->users->name }}</a></li>
								<li>{{ $list_category->created_at }}</li>
							</ul>
							
						</div>
					</div>
				
				@endforeach
				<center>{{ $data->links() }}</center>
				</div>

													<!-- /post -->
@endsection