<!DOCTYPE html>
<html lang="en">
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/css/fonts.min.css">



</head>

<body class="landing-page">

<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
                <div class="img-wrap">
                    <img width="50px" height="50px" src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo.png" alt="Olympus">
                </div>
				<div class="title-block">
					<h6 class="logo-title">JODOHIN</h6>
				</div>
			</a>

		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="landing-content">
                <br>Jodoh itu misterius.
                <br>Dia datang begitu saja dan lewat begitu saja.
                <br>Temukan jodohmu bersama Jodohin.
                <br>
                <p></p>
                <a href="#home" class="btn btn-md btn-border c-white">Register Now!</a>
            </div>
        </div>

        <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

			<!-- Login-Registration Form  -->

			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Jodohin</div>
						<form class="content" method="post" action="<?php echo Yii::$app->request->BaseUrl ?>/pengguna/create">
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text" name="first_name">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text" name="last_name">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" name="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" name="password">
									</div>

									<div class="form-group form_datetime label-floating">
										<label class="control-label">Your Birthday</label>

										<input name="datetimepicker" value="10/24/1984" >
										<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" name="gender">
											<option value="Laki-laki">Male</option>
											<option value="Perempuan">Female</option>
										</select>
									</div>

									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>

									<input type="submit" value="Complete Registration !" class="btn btn-purple btn-lg full-width">

									<!-- <a href="../web/pengguna/create" class="btn btn-purple btn-lg full-width">Complete Registration!</a> -->
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content" action="../pengguna/login" method="post" >
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" name="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" name="password">
									</div>

									<div class="remember">

										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot">Forgot my Password</a>
									</div>

									<input type="submit" value="Login" class="btn btn-lg btn-primary full-width">

									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- ... end Login-Registration Form  -->		</div>

    </div>
</div>


<!-- JS Scripts -->
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery-3.2.1.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.appear.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.mousewheel.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/perfect-scrollbar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.matchHeight.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/svgxuse.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/Headroom.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/velocity.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/ScrollMagic.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.waypoints.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.countTo.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/popper.min.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/material.min.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/bootstrap-select.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/smooth-scroll.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/selectize.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/swiper.jquery.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/moment.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/daterangepicker.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/simplecalendar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/fullcalendar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/isotope.pkgd.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/ajax-pagination.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/Chart.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/circle-progress.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/loader.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/run-chart.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.magnific-popup.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.gifplayer.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/mediaelement-and-player.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/mediaelement-playlist-plugin.min.js"></script>

<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/base-init.js"></script>
<script defer src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/fonts/fontawesome-all.js"></script>

<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>
