@extends('layouts.app-public')

@section('content')

    @include('includes.header')

         <!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"> {{ $post->post_title }}</h1>
							<!-- page-title end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost full">
								<div class="blogpost-body">
									<div class="side">
										<div class="post-info">
											<span class="day">{{$post->created_at->day}}</span>
											<span class="month">{{substr($post->created_at->format('F'), 0,3)}} {{$post->created_at->year}}</span>
										</div>
										<div id="affix">
											<span class="share">Share This</span>
											<ul class="social-links clearfix">
												<li class="facebook">
													<a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li class="twitter">
													<a href="#"><i class="fa fa-twitter"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="blogpost-content">
										<header>
											<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">{{$post->user->name}}</a></div>
										</header>

										{!! $post->post_body !!}

									</div>
								</div>
								<footer class="clearfix">
									<ul class="links pull-left">
										<li><i class="fa fa-comment-o pr-5"></i> <a href="#">{{$post->post_comments}} comments</a></li> 
										<!--<li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>-->
									</ul>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- comments start -->
							<div class="comments">
								<h2 class="title">There are {{$post->post_comments}} comments</h2>

								<!-- comment start -->
								<div class="comment clearfix">
									<div class="comment-avatar">
										<img src="images/avatar.jpg" alt="avatar">
									</div>
									<div class="comment-content">
										<h3>Comment title</h3>
										<div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
										<div class="comment-body clearfix">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
											<a href="blog-post.html" class="btn btn-gray more pull-right"><i class="fa fa-reply"></i> Reply</a>
										</div>
									</div>
									
									<!-- comment start -->
									<div class="comment clearfix">
										<div class="comment-avatar">
											<img src="images/avatar.jpg" alt="avatar">
										</div>
										<div class="comment-content clearfix">
											<h3>Comment title</h3>
											<div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
											<div class="comment-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
												<a href="blog-post.html" class="btn btn-gray more pull-right"><i class="fa fa-reply"></i> Reply</a>
											</div>
										</div>
									</div>
									<!-- comment end -->

								</div>
								<!-- comment end -->

								<!-- comment start -->
								<div class="comment clearfix">
									<div class="comment-avatar">
										<img src="images/avatar.jpg" alt="avatar">
									</div>
									<div class="comment-content clearfix">
										<h3>Comment title</h3>
										<div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
										<div class="comment-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
											<a href="blog-post.html" class="btn btn-gray more pull-right"><i class="fa fa-reply"></i> Reply</a>
										</div>
									</div>
								</div>
								<!-- comment end -->

							</div>
							<!-- comments end -->

							<!-- comments form start -->
							<div class="comments-form">
								<h2 class="title">Add your comment</h2>
								<form>
									<div class="form-group has-feedback">
										<label for="name4">Name</label>
										<input type="text" class="form-control" id="name4" placeholder="" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="subject4">Subject</label>
										<input type="text" class="form-control" id="subject4" placeholder="" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="message4">Message</label>
										<textarea class="form-control" rows="8" id="message4" placeholder="" required></textarea>
										<i class="fa fa-envelope-o form-control-feedback"></i>
									</div>
									<input type="submit" value="Submit" class="btn btn-default">
								</form>
							</div>
							<!-- comments form end -->

						</div>
						<!-- main end -->

						<!-- sidebar start -->
						@include('documentation.sidebar')
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end --> 

    @include('includes.footer')

@endsection
