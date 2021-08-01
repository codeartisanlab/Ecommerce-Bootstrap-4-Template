<?php require('header.php'); ?>
<!-- Home Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $baseUrl; ?>/images/banners/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseUrl; ?>/images/banners/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseUrl; ?>/images/banners/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<main class="container my-4">
	<!-- Featured Products -->
	<h3 class="my-4 border-bottom pb-1">Featured Products</h3>
	<div class="row">
		<?php
		for($i=1; $i<=6; $i++){
		?>
		<div class="col-md-3 mb-4">
			<div class="card shadow">
			  <a href="<?php echo $baseUrl; ?>/detail.php"><img src="<?php echo $baseUrl; ?>/images/<?php echo $i; ?>.jpg" class="card-img-top" alt="..."></a>
			  <div class="card-body">
			    <h6 class="card-text"><a href="<?php echo $baseUrl; ?>/detail.php">Bottle <?php echo $i; ?></a></h6>
			  </div>
			  <div class="card-footer">
			  	<button class="btn btn-sm btn-primary"><i class="fa fa-shopping-cart"></i></button>
			  	<button class="btn btn-sm btn-danger"><i class="fa fa-heart"></i></button>
			  	<span class="float-right">
			  		4.5/5
			  		<i class="fa fa-star text-warning"></i>
			  	</span>
			  </div>
			</div>
		</div>
		<?php } ?>
	</div>
	<p class="my-4 text-center"><a href="<?php echo $baseUrl; ?>/products.php" class="btn btn-dark btn-sm">All Products <i class="fa fa-long-arrow-alt-right"></i></a></p>
</main>
<?php require('footer.php'); ?>