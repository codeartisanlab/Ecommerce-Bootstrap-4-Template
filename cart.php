<?php require('header.php'); ?>
<main class="container my-4">
	<!-- Featured Products -->
	<h3 class="my-4 border-bottom pb-1">Cart (2)</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Product</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<img src="<?php echo $baseUrl; ?>/images/1.jpg" width="50" />
					<p><a href="<?php echo $baseUrl; ?>/detail.php">Bottle 1</a></p>
				</td>
				<td>
					<input type="number" value="2" style="vertical-align: bottom;" />
					<button class="btn btn-sm btn-primary"><i class="fa fa-sync"></i></button>
					<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
				</td>
				<td>Rs. 100</td>
				<td>Rs. 200</td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo $baseUrl; ?>/images/2.jpg" width="50" />
					<p><a href="<?php echo $baseUrl; ?>/detail.php">Bottle 2</a></p>
				</td>
				<td>
					<input type="number" value="3" style="vertical-align: bottom;" />
					<button class="btn btn-sm btn-primary"><i class="fa fa-sync"></i></button>
					<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
				</td>
				<td>Rs. 80</td>
				<td>Rs. 240</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2"></td>
				<th>Total</th>
				<th>Rs. 440</th>
			</tr>
			<tr>
				<td colspan="4" align="right">
					<a href="<?php echo $baseUrl; ?>/checkout.php" class="btn btn-dark btn-sm">Checkout <i class="fa fa-long-arrow-alt-right"></i></a>
				</td>
			</tr>
		</tfoot>
	</table>
</main>
<?php require('footer.php'); ?>