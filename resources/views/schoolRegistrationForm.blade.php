@extends('layouts.app-public')

@section('content')

            @include('includes.header')

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
								<span style="font-style: normal;">You are applying for the</span> <strong></strong> <span style="font-style: normal;">position. Good Luck!</span>
							</div>

							<div class="object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
								<div class="form-block center-block">
									<h2 class="title">School Registration Form </h2>
									<hr>
									<form class="form-horizontal" role="form" action="{{url('/careers/postjobapplicationform/')}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									

										<div class="form-group has-feedback">
											<label for="inputName" class="col-sm-3 control-label">School Name <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="first_name" class="form-control" id="inputName" placeholder="Fisrt Name" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group">
										        <label for="inputName" class="col-sm-3 control-label">Prefered Domain Name <span class="text-danger small">*</span></label>
										        <div class="col-md-8">
										            <div class="form-group row">
										                <label for="inputKey" class="col-md-2 control-label">https://</label>
										                <div class="col-md-6">
										                    <input type="text" class="form-control" id="inputKey" placeholder="eg: portal">
										                </div>
										                <label for="inputValue" class="col-md-1 control-label">.totalgrades.com</label>
										                
										            </div>
										            <p class="h6">Your portal url will be <span class="text-info bg-success">https://portal.totalgrades.com</span></p>
										        </div>
										    </div>
										<div class="form-group has-feedback">
											<label for="inputLastName" class="col-sm-3 control-label">Your Full Name <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="Last Name" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="phone" class="col-sm-3 control-label">Phone Number <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="phone" class="form-control" id="inputUserName" placeholder="Phone Number" required>
												<i class="fa fa-phone form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputStreet" class="col-sm-3 control-label">Address <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<textarea type="text" name="street" class="form-control" id="inputStreet" placeholder="Address" required></textarea>
												<i class="fa fa-map-pin form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputCity" class="col-sm-3 control-label">City<span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="city" class="form-control" id="inputCity" placeholder="Your City" required>
												<i class="fa fa-map-pin form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label for="inputState" class="col-sm-3 control-label">State<span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="text" name="state" class="form-control" id="inputState" placeholder="Your State" required>
												<i class="fa fa-map-pin form-control-feedback"></i>
											</div>
										</div>
										<div class="form-group has-feedback">
											<label class="col-sm-3 control-label" style="font-size: 12px;">Tell us a bit about your school<span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<textarea type="text" name="reason_qualify" class="form-control" id="inputStreet" placeholder="Please tell us why you believe you are qualified for this position." required></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-8">
												<div class="well">
													Please review our policy below. You must agree to continue.
													<hr>
													<button class="btn btn-secondary" data-toggle="modal" data-target="#policyModal">Review Totalgrades Usage Policy</button>
													<!-- Modal -->

						                            <div class="modal fade" id="policyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

						                                <div class="modal-dialog">

						                                    <div class="modal-content">

						                                        <div class="modal-header">

						                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

						                                            <h4 class="modal-title" id="myModalLabel">Totalgrades Usage Policy</h4>

						                                        </div>

						                                        <div class="modal-body">

						                                            <p>Totalgrades is a free software developed by Nnamdi Okeke. This software is distributed under the MIT lincence</p>

						                                            <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>

						                                        </div>

						                                        <div class="modal-footer">

						                                            <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>

						    
						                                        </div>

						                                    </div>

						                                </div>

						                            </div>
												<div class="checkbox checkbox-success">
													<label>
														<input type="checkbox" name="must_haves" value="0"><input type="checkbox" name="must_haves" value="1" />
														<a><strong>Yes, I agree.</strong></a>
													</label>
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

									<div class="alert-danger">
                            
                                      <ul>
                                        @foreach($errors->all() as $error)

                                          <li> {{ $error }}</li>

                                        @endforeach

                                      </ul>
								</div>
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