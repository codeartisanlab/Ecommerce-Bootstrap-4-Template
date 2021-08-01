<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<?php require('account-sidebar.php'); ?>
		<div class="col-md-9">
			<div class="card">
				<h6 class="card-header">Order Detail <span class="float-right">ORDER123 - 12/10/2021</span></h6>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Item</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							for($i=1;$i<=5;$i++){
								$total=0;
							?>
							<tr>
								<td>
									<img src="<?php echo $baseUrl; ?>/images/<?php echo $i; ?>.jpg" width="50" />
									<p><a href="<?php echo $baseUrl; ?>/detail.php">Bottle <?php echo $i; ?></a></p>
								</td>
								<td><?php echo $qty=rand(10,100); ?></td>
								<td><?php echo $price= rand(100,1000); ?></td>
								<td><?php echo $total+= $price*$qty; ?></td>
								<td>
									<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
							<?php } ?>
							<tr>
								<td colspan="2"></td>
								<th>Total</th>
								<th>Rs. <?php echo $total; ?></th>
								<th></th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>