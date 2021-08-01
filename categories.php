<?php require('header.php'); ?>
<main class="container my-4">
	<!-- Featured Products -->
	<h3 class="my-4 border-bottom pb-1">Categories</h3>
	<div class="row">
		<?php
		for($i=1; $i<=6; $i++){
		?>
		<div class="col-md-3 mb-4">
			<div class="card shadow">
			  <a href="#"><img src="<?php echo $baseUrl; ?>/images/<?php echo $i; ?>.jpg" class="card-img-top" alt="..."></a>
			  <div class="card-body">
			    <h6 class="card-text"><a href="<?php echo $baseUrl; ?>/products.php">Category <?php echo $i; ?></a></h6>
			  </div>
			</div>
		</div>
		<?php } ?>
	</div>
</main>
<?php require('footer.php'); ?>