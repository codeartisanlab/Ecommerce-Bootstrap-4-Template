<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card shadow border-success">
				<div class="card-body">
					<p class="card-text">
						Thank you for shopping with us. You order has been placed.
					</p>
					<hr/>
					<p>Your order no is <b><a href="<?php echo $baseUrl; ?>/track-order.php">ORD123</a></b></p>
				</div>
			</div>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>