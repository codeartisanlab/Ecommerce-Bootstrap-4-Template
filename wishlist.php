<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<?php require('account-sidebar.php'); ?>
		<div class="col-md-9">
			<div class="card">
				<h6 class="card-header">My Wishlist</h6>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Item</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							for($i=1;$i<=5;$i++){
							?>
							<tr>
								<td>
									<img src="<?php echo $baseUrl; ?>/images/<?php echo $i; ?>.jpg" width="50" />
									<p><a href="<?php echo $baseUrl; ?>/detail.php">Bottle <?php echo $i; ?></a></p>
								</td>
								<td><?php echo rand(100,1000); ?></td>
								<td>
									<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>