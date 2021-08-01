<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<?php require('account-sidebar.php'); ?>
		<div class="col-md-9">
			<div class="card">
				<h6 class="card-header">Orders</h6>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Order No</th>
								<th>Date</th>
								<th>Total Items</th>
								<th>Amount</th>
								<th>Items</th>
							</tr>
						</thead>
						<tbody>
							<?php
							for($i=1;$i<=5;$i++){
							?>
							<tr>
								<td>ORDER1<?php echo $i; ?>3</td>
								<td>12/10/2021</td>
								<td><?php echo rand(1,10); ?></td>
								<td><?php echo rand(99,1000); ?></td>
								<td><a class="btn btn-sm btn-secondary" href="<?php echo $baseUrl; ?>/order-detail.php">Order Detail</a></td>
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