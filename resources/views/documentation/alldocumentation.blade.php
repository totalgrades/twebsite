@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<!--
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/page-about-banner-1.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Core Featires</h1>
					<div class="separator-2"></div>
					<p class="lead">Totalgrades - A free online gradebook.</p>
					</div>
				</div>
			</div>
			-->
			<!-- banner end -->

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
							<h1 class="page-title text-center">Documentation for {{ $category->category_name }}</h1>
							<p class="text-center">Totalgrades is a free online gradebook by Nahorr Analytics.</p>
							<div class="separator"></div>
							<!-- page-title end -->
							
							<div class="row">
								<div class="form-group col-md-12">
							       <input type="text" class="form-control" placeholder="Search..." id="search_field">
							  	</div>
								
								<div class="col-md-12">
									

									<ul class="list-group" id="myUL">
										@foreach($posts->where('category_id', $category->id) as $key=>$post)

									  		<li class="list-group-item d-flex justify-content-between align-items-center">
									  			<a href="{{ url('documentation/showdocumentation/'.$post->id) }}"> {{$post->post_title}}</a>
									  			<span class="badge badge-primary badge-pill">{{$post->comments->count()}} comments</span>
									  		</li>
									  	@endforeach
									</ul>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
									<script type="text/javascript">
										jQuery(document).ready(function ($) {
										  
										  $('#search_field').on('keyup', function() {
										    var value = $(this).val();
										    var patt = new RegExp(value, "i");

										    $('#myUL').find('li').each(function() {
										      if (!($(this).text().search(patt) >= 0)) {
										        $(this).hide();
										      }
										       if (($(this).text().search(patt) >= 0)) {
										        $(this).show();
										      }
										      
										    });

										  });

										});
									</script>
									

								</div>
							</div>
							
							<div class="space"></div>

						</div>
						<!-- main end -->

						<!-- sidebar start -->
						@include('documentation.sidebar')
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->


			<!-- page-top start-->
			<!-- ================ -->
			<div class="space"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="call-to-action">
								<h1 class="title">Need a live demonstration?</h1>
								<p>We are always happy to show you how TotalGrades could help your school stand out. Plase call us or send us a messages. </p>
								<a class="btn btn-white more" data-toggle="modal" data-target="#myModal">
								Call Us <i class="pl-10 fa fa-phone"></i>
								</a>

								<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="myModalLabel">Call or Whatsapp us</h4>
											</div>
											<div class="modal-body">
												<p>Phone or Whatsapp Canada:</p>
												<ul class="list-icons">
													<li><i class="icon-check"></i> +14034022387</li>
												</ul>
												<p>Phone or Whatsapp Nigeria:</p>
												<ul class="list-icons">
													<li><i class="icon-check"></i> +2348035525141</li>
												</ul>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
								or
								<a href="{{url('/contact')}}" class="btn btn-default contact">Contact us <i class="pl-10 fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>
			<div class="space"></div>
			<!-- page-top end -->

      

        @include('includes.footer')
@endsection

