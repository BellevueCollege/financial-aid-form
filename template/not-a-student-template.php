<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-US" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-US" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
	<title>Apply for Financial Aid :: Financial Aid</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $globals_url ?>c/g.css">
	<link rel="stylesheet" media="print" href="<?php echo $globals_url ?>c/p.css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo $globals_url ?>j/ghead.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="/<?php echo $globals_url ?>j/respond.js"></script><![endif]-->
	<link rel="stylesheet id="open-sans-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0.1" type="text/css" media="all" />
	<?php include( $globals_path . 'h/gabranded.html' ); ?>
</head>
<body class="nav-enrollment">
	<?php require( $globals_path . 'h/bhead.html' ); ?>
	<div id="main-wrap" class="globals-branded">
		<div id="main" class="container no-padding">
			<div class="content-padding">
				<div id="site-header">
					<h1 class="site-title">Financial Aid</h1>
				</div><!-- container header -->
			</div><!-- content-padding -->
			<div class="row">
				<div class="col-md-12">
					<div class="box-shadow" id="content">
						<div class="row row-padding">
							<div class="content-padding">
								<div class="alert alert-warning" style="margin: 1em;">
									<h1>You Are Not a Student</h1>
									<p>You are not a student in our database. Only students can submit a financial aid application.</p>
									<p><a class="btn btn-warning" href="<?php echo $logout_url; ?>">Log Out</a></p>
								</div>
							</div>
							<!--.content-padding-->
							<div class="content-padding top-spacing30"></div>
						</div>
						<!--.row-padding-->
					</div>
					<!-- #content-->
				</div>
				<!-- row -->
			</div>
			<!-- col-md-12 -->
		</div>
		<!-- #main .container -->
	</div>
	<!-- #main-wrap -->

	<?php include( $globals_path . 'h/bfoot.html' ); ?>
	<?php include( $globals_path . 'h/legal.html' ); ?>
	
	<script src="<?php echo $globals_url; ?>j/bootstrap.min.js"></script>
	<script src="<?php echo $globals_url; ?>j/g.js"></script>
	
</body>
</html>
