@extends('layouts.app-public')

@section('content')

            @include('includes.header')
            <style type="text/css">
            	.showDiv{ display: none };
            </style>

            <!-- main-container start -->
			<!-- ================ -->
			<section class="main-container light-translucent-bg">
				
				<div class="container">
					<div class="row">
						@include('flash::message')
						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-9 col-md-offset-1">

							<!-- name-and-slogan -->
							<div class="site-slogan">
								<span style="font-style: normal;">You are registering for your school to use Totalgrades!</span></span>
							</div>

							<div class="object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">

								<div class="alert-danger">
                        
                                  <ul>
                                    @foreach($errors->all() as $error)

                                      <li> {{ $error }}</li>

                                    @endforeach

                                  </ul>
								</div>
								
								<div class="form-block center-block">
									<h2 class="title">School Registration Form </h2>
									<hr>
									<form class="form-horizontal" role="form" action="{{url('/postSchoolRegistrationForm/')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									

										<div class="form-group has-feedback">
											<label for="inputName" class="col-sm-3 control-label">School Name <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="school_name" class="form-control" id="school_name" placeholder="Your School Name" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group">
									        <label for="inputName" class="col-sm-3 control-label">Prefered Domain Name <span class="text-danger small">*</span></label>
									        <div class="col-md-8">
									            <div class="form-group row">
									                <label for="inputKey" class="col-md-3 control-label">https://www.</label>
									                <div class="col-md-6">
									                    <input type="text" class="form-control" id="preferedDomainName" name="preferedDomainName" placeholder="eg: portal">
									                </div>
									                <label for="inputValue" class="col-md-1 control-label" style="text-align: left;">.totalgrades.com</label>
									                
									            </div>
									            <p class="h6" id="portalDomainUrl">Your portal url will be <span class="text-info bg-secondary">https://www.<span class="text-info bg-link" id="spanText" style="font-size: 20px; color: darkred;">portal</span>.totalgrades.com</span></p>
									        </div>
									    </div>
										<div class="form-group has-feedback">
											<label for="inputLastName" class="col-sm-3 control-label">Your Full Name <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter Full Name" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="phone" class="col-sm-3 control-label">Phone Number <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
												<i class="fa fa-phone form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputStreet" class="col-sm-3 control-label">School Address <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<textarea type="text" name="school_address" class="form-control" id="school_address" placeholder="Your School Address" required></textarea>
												<i class="fa fa-map-pin form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputCity" class="col-sm-3 control-label">City<span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="city" class="form-control" id="city" placeholder="Your City" required>
												<i class="fa fa-map-pin form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputState" class="col-sm-3 control-label">State<span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="state" class="form-control" id="state" placeholder="Your State" required>
												<i class="fa fa-map-pin form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label class="col-sm-3 control-label" style="font-size: 12px;">Tell us a bit about your school<span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<textarea type="text" name="about_school" class="form-control" id="about_school" placeholder="Tell us a bit about your school"></textarea>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-8">
												<div class="well" style="background-color: #b7c3d8;">
													<button type="button" class="btn btn-primary" id="reviewPolicy" style="white-space: normal;">Please review our policy below. You must agree to continue.</button>
													<hr>

													<div id="totalgradesPolicy" style="display: none;">
															<p>Totalgrades is a free software developed by Nahorr Analytics. This software is distributed under the MIT lincence</p>

								                            <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
															

								                            
														<div class="checkbox checkbox-success" id="hideShowCheckbox">
															<label>
																<input type="checkbox" name="must_agree" value="0"><input type="checkbox" name="must_agree" value="1" />
																<a><strong>Yes, I agree.</strong></a>
															</label>
														</div>
													</div>
											    </div>
											</div>
										</div>
											
										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-8">
												<div class="g-recaptcha" data-sitekey="{{env('RE_CAPTCHA_SITEKEY')}}"></div>
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-8">
												<button type="submit" class="btn btn-default"><strong>Submit Registration</strong></button>
											</div>
										</div>
									</form>

									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

									<script type="text/javascript">
										jQuery(document).ready(function($){

											$( "#preferedDomainName" ).keyup(function(event) {
											 	var portalDomain = $(this).val();

											 	$( "#spanText" ).text(portalDomain);

											});

											$("#reviewPolicy").click(function(){

												$("#totalgradesPolicy").show(600);
											});

										});


									</script>

							</div>

						</div>
						<!-- main end -->

					</div>
				</div>

			</section>
			<!-- main-container end -->
           
            @include('includes.footer')

            @include('includes.subfooter')
			
@endsection