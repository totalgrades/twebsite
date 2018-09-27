<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
            <!-- ================ -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2  col-sm-6">

                            <!-- header-top-first start -->
                            <!-- ================ -->
                            <div class="header-top-first clearfix">
                                <ul class="social-links clearfix hidden-xs">
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCeIItDL2g7b-Q9Yx6_uOS1w"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <!-- header-top-first end -->

                        </div>
                        <div class="col-xs-10 col-sm-6">

                            <!-- header-top-second start -->
                            <!-- ================ -->
                            <div id="header-top-second"  class="clearfix">

                                <!-- header top dropdowns start -->
                                <!-- ================ -->
                                <div class="header-top-dropdown">
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-phone"></i> <strong>08060776024</strong></button>
                                    
                                    </div>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-phone"></i><strong>+14034022387</strong></button>
                                    </div>

                                </div>
                                <!--  header top dropdowns end -->

                            </div>
                            <!-- header-top-second end -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top end -->

            <!-- header start classes:
                fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
                 dark: dark header version e.g. <header class="header dark clearfix">
            ================ -->
            <header class="header fixed clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- header-left start -->
                            <!-- ================ -->
                            <div class="header-left clearfix">

                                <!-- logo -->
                                <div class="logo">
                                    <a href="{{url('/')}}"><img id="logo" src="{{asset('idea/images/logo_totalgrades.png')}}" alt="TotalGrades"></a>
                                </div>

                            </div>
                            <!-- header-left end -->

                        </div>
                        <div class="col-md-9">

                            <!-- header-right start -->
                            <!-- ================ -->
                            <div class="header-right clearfix">

                                <!-- main-navigation start -->
                                <!-- ================ -->
                                <div class="main-navigation animated">

                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">

                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li class="active">
                                                        <a href="{{url('/')}}">Home</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{url('/features')}}">Features</a>
                                                    </li>
                                                    
                                                    <li class="">
                                                        <a href="{{url('schoolRegistrationForm')}}">Register</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="https://demo.totalgrades.com" target="_blank">Demo </a>
                                                    </li>
                                                
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="{{url('documentation/students/alldocumentation')}}">For Students </a></li>
                                                            <li><a href="{{url('teachers')}}">For Teachers</a></li>
                                                            <li><a href="{{url('administrators')}}">For Administrators</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{url('contact')}}">Contact</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>

                                        </div>
                                    </nav>
                                    <!-- navbar end -->

                                </div>
                                <!-- main-navigation end -->

                            </div>
                            <!-- header-right end -->

                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->