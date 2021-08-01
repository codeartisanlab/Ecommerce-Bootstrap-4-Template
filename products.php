<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<!-- Filters -->
		<div class="col-md-3">
			<h3 class="mb-4 border-bottom pb-1">Filters</h3>
			<!-- Filter 1 -->
			<div class="card mb-4">
				<h6 class="card-header">Colors</h6>
				<div class="list-group list-group-flush">
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						<button class="btn btn-danger"></button>
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						<button class="btn btn-dark"></button>
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						<button class="btn btn-success"></button>
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						<button class="btn btn-warning"></button>
					</li>
				</div>
			</div>
			<!-- Filter 2 -->
			<div class="card mb-4">
				<h6 class="card-header">Categories</h6>
				<div class="list-group list-group-flush">
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						Category 1
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						Category 2
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						Category 3
					</li>
				</div>
			</div>
			<!-- Filter 3 -->
			<div class="card mb-4">
				<h6 class="card-header">Brands</h6>
				<div class="list-group list-group-flush">
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						Brand 1
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						Brand 2
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						Brand 3
					</li>
				</div>
			</div>
			<!-- Filter 3 -->
			<div class="card mb-4">
				<h6 class="card-header">Sizes</h6>
				<div class="list-group list-group-flush">
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						< 1 litre
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						1-2 litre
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						2-3 litre
					</li>
					<li class="list-group-item">
						<input type="checkbox" />&nbsp;
						3-4 litre
					</li>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<!-- Products -->
			<h3 class="mb-4 border-bottom pb-1">
				Products
			</h3>
			<div class="row">
				<?php
				for($i=1; $i<=6; $i++){
				?>
				<div class="col-md-4 mb-4">
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
			<p class="my-4 text-center"><a href="<?php echo $baseUrl; ?>/products.php" class="btn btn-dark btn-sm">Load More <i class="fa fa-sync"></i></a></p>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>