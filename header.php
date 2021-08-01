<?php
$baseUrl='http://localhost/bootstrap4-apps/ecommerce/';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Bootstrap Template</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/vendor/fontawesome-free/css/all.min.css" />
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/vendor/bs4/bootstrap.min.css" />
	<!-- Main Jquery -->
	<script type="text/javascript" src="<?php echo $baseUrl; ?>/vendor/jquery.min.js"></script>
	<!-- Bootstrap 4 JS -->
	<script type="text/javascript" src="<?php echo $baseUrl; ?>/vendor/bs4/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<div class="container">
		  <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Bottle Shop</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link text-white" href="<?php echo $baseUrl; ?>">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="<?php echo $baseUrl; ?>/categories.php">Categories</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="<?php echo $baseUrl; ?>/brands.php">Brands</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="<?php echo $baseUrl; ?>/cart.php"><i class="fa fa-shopping-cart"></i> Cart (2)</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="<?php echo $baseUrl; ?>/account.php"><i class="fa fa-user"></i> My Account</a>
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>