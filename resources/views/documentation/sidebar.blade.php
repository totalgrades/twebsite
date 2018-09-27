

						<!-- sidebar start -->
						<aside class="col-md-3 col-md-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Sidebar menu</h3>
									<div class="separator"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li {{{ (Request::is('documentation/students/alldocumentation') ? 'class=active' : '') }}}>
												<a href="{{url('/documentation/students/alldocumentation')}}">Students</a>
											</li>
											<li {{{ (Request::is('documentation/teachers/alldocumentation') ? 'class=active' : '') }}}>
												<a href="{{url('/documentation/teachers/alldocumentation')}}"">Teachers</a>
											</li>
											<li {{{ (Request::is('documentation/administrators/alldocumentation') ? 'class=active' : '') }}}>
												<a href="{{url('documentation/administrators/alldocumentation')}}"">Administrators</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="block clearfix">
									<h3 class="title">Latest tweets</h3>
									<div class="separator"></div>
									<ul class="tweets">
										<li>
											<i class="fa fa-twitter"></i>
											<p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://t.fd/adfasdfasd</a>.</p><span>16 hours ago</span>
										</li>
										<li>
											<i class="fa fa-twitter"></i>
											<p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://t.fd/adfasdfasd</a>.</p><span>16 hours ago</span>
										</li>
									</ul>
								</div>
							
							</div>
						</aside>
						<!-- sidebar end -->

					