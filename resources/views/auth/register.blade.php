<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | Kiaalap - Kiaalap Student Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
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
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('addstudent')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Year</label>
                                    <input type="text" name="year" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Home Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Choose file</label>
                                        <input type="file" name="image" class="custom-file-input">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <br><button class="btn btn-success loginbtn">Register</button>
                                <br><br><button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
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
    <!-- tab JS
		============================================ -->
    <script src="{{asset('assets/js/tab.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('assets/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('assets/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
