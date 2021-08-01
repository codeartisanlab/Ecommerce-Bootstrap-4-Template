<?php require('header.php'); ?>
<main class="container my-4">
	<!-- Featured Products -->
	<h3 class="my-4 border-bottom pb-1">Product Detail</h3>
	<div class="row">
		<!-- Images -->
		<div class="col-md-4">
			<img id="zoom_01" data-zoom-image="<?php echo $baseUrl; ?>/images/1.jpg" src="<?php echo $baseUrl; ?>/images/1.jpg" class="card-img-top" alt="...">
		</div>
		<div class="col-md-8">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
			<hr/>
			<table class="table table-bordered">
				<tr>
					<th>Price</th>
					<th>Rs. 299</th>
				</tr>
				<tr>
					<th>Colors</th>
					<td>
						<button class="btn btn-danger btn-lg"></button>
						<button class="btn btn-info btn-lg"></button>
						<button class="btn btn-success btn-lg"></button>
						<button class="btn btn-primary btn-lg"></button>
						<button class="btn btn-dark btn-lg"></button>
					</td>
				</tr>
				<tr>
					<th>Sizes</th>
					<td>
						<button class="btn btn-outline-secondary btn-sm">900 ml</button>
						<button class="btn btn-outline-secondary btn-sm">500 ml</button>
					</td>
				</tr>
			</table>
			<hr/>
			<div class="input-group my-3" style="width:30%;">
			  <input type="number" class="form-control" />
			  <div class="input-group-append">
			    <button class="btn btn-primary btn-sm" type="button" id="button-addon2"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
			  </div>
			</div>
		</div>
	</div>
	<hr />
	<div class="row">
		<div class="col-md-6">
			<h3 class="my-3">Detail</h3>
			<!-- Detail -->
			<table class="table table-bordered">
				<tr>
					<th>Brand</th>
					<td><a href="#">Brand 1</a></td>
				</tr>
				<tr>
					<th>Category</th>
					<td><a href="#">Category 1</a></td>
				</tr>
				<tr>
					<th>Specification</th>
					<td>This is lorem ipsum content</td>
				</tr>
			</table>
		</div>
		<!-- Reviews -->
		<div class="col-md-6">
			<h3 class="my-3">Reviews - 4.5/5 <i class="fa fa-star text-warning"></i></h3>
			<div class="card">
				<div class="card-body" style="max-height: 400px; overflow: auto;">
					<!-- Detail -->
					<?php for($i=1; $i<=10 ;$i++){ ?>
					<blockquote class="blockquote text-right">
					  <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</small>
					  <footer class="blockquote-footer">User 
					  	<cite title="Source Title">
					  		<i class="fa fa-star text-warning"></i>
					  		<i class="fa fa-star text-warning"></i>
					  		<i class="fa fa-star text-warning"></i>
					  		<i class="fa fa-star text-warning"></i>
					  	</cite>
					  </footer>
					</blockquote>
					<hr />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="https://cdn.jsdelivr.net/gh/igorlino/elevatezoom-plus@1.2.3/src/jquery.ez-plus.js"></script>
<script>
    $('#zoom_01').ezPlus();
</script>
<?php require('footer.php'); ?>