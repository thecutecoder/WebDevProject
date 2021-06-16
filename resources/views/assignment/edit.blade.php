<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Profile | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- laravel
        ============================================ -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <!-- button
        ============================================ -->
        <style>
            a.cancel{
               -webkit-border-radius: 4px;
               -moz-border-radius: 4px;
               border-radius: 4px;
               background-color: #ff1717;
               color: white;
               padding: 8px 13px;
               text-align: center;
               font-size: 15px;
               text-decoration: none;
               display: inline-block;
               }
       </style>

</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/"><img class="main-logo" src="{{asset('assets/img/logo/logo.png')}}" alt="" /></a>
                <strong><a href="/"><img src="{{asset('assets/img/logo/logosn.png')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Landing Page" href="/" ><img class="main-logo" src="{{asset('assets/img/icons/homepage.png')}}" width="20px" height="20px"/> Homepage</a>
                        </li>
                        <li>
                            <a title="Landing Page" href="/student/studentprofile/1" ><img class="main-logo" src="{{asset('assets/img/icons/user.png')}}" width="20px" height="20px" /> Profile Page</a>
                        </li>
                        <li>
                            <a title="Landing Page" href="/attendance/index" ><img class="main-logo" src="{{asset('assets/img/icons/clipboard.png')}}" width="20px" height="20px" /> Attendance</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="/assignment/index" ><img class="main-logo" src="{{asset('assets/img/icons/edit.png')}}"width="20px" height="20px" /> Assignment</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="/"><img class="main-logo" src="{{asset('assets/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="{{asset('assets/img/product/pro4.jpg')}}" alt="" />
															<span class="admin-name">Student</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="/">Homepage</a></li>
                                        <li><a href="/pages">Profile Page</a></li>
                                        <li><a href="events.html">Attendance</a></li>
                                        <li><a href="events.html">Assignment</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="/">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Assignment</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Assignment Details</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="{{ url('/assignment/update',$assignment->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            @if (session('status'))
                                                            <h6 class= "alert alert-success">{{ session('status') }}</h6>
                                                            @endif
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <p><b>Course Code</b><br/></p>
                                                                    <p>{{$assignment->course_code}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <p><b>Assignment Name</b><br/></p>
                                                                    <p>{{$assignment->assignment_name}}</p>
                                                                </div>
                                                                <div class="file-upload-inner ts-forms">
                                                                    <p><b>Upload your Assignment here</b><br/></p>
                                                                    <div class="input prepend-big-btn">
                                                                        <label class="icon-right" for="prepend-big-btn">
                                                                                <i class="fa fa-download"></i>
                                                                            </label>
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" name="assignment">
                                                                        </div>
                                                                        <input type="text" name ="assignment" id="prepend-big-btn" placeholder="no file selected">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="payment-adress mg-t-15 responsive-mg-t-0">
                                                                    <br><br><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                    <br><br><a href="{{ url('/assignment/index')}}" class="cancel">Cancel</a><br>
                                                                </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('assets/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('assets/js/tab.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
