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
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title text-center">Documentation for Students</h1>
							<p class="text-center">Totalgrades - free online gradebook by Nahorr Analytics.</p>
							<div class="separator"></div>
							<!-- page-title end -->
							
							<div class="row">
								
								<div class="col-md-12">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<td>3</td>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="space"></div>

						</div>
						<!-- main end -->

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

