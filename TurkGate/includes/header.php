<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>TurkGate - <?php echo $title ?></title>
	<meta name="description" content="<?php echo $description ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo $basePath ?>stylesheets/base.css">
	<link rel="stylesheet" href="<?php echo $basePath ?>stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php echo $basePath ?>stylesheets/layout.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" /> <!-- jQuery UI theme -->
	<link rel="stylesheet" href="<?php echo $basePath ?>stylesheets/styles.css"> <!-- TurkGate-specific styling -->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo $basePath ?>images/favicon.ico">
	
	<!-- Libraries needed by TurkGate
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
	
</head>

<body id="<?php echo $pageID ?>">
	
  <div class="container"> <!-- Container -->

  	<header>
  		<div class="sixteen columns clearfix" style="position:relative;">
			<div class="eight columns alpha"">
				<h2 class="remove-bottom"><a href="<?php echo $basePath ?>index.php">TurkGate</a>: <?php echo $title ?></h2>
			</div>
		  	<div class="eight columns omega" style="position:absolute; bottom:0px; right:0px;">
		  		<nav>
					<ul>
						<li id="nav_about"><a href="http://gideongoldin.github.com/TurkGate/" target="_blank">About</a></li>
						<li id="nav_admin"><a href="<?php echo $basePath ?>admin/index.php">Admin</a></li>
						<li id="nav_verify"><a href="<?php echo $basePath ?>codes/verify.php">Verify Codes</a></li>
						<li id="nav_generate"><a href="<?php echo $basePath ?>index.php">Generate a HIT</a></li>
					</ul>
				</nav>
		  	</div>
	  	</div>
	</header>