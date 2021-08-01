<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<?php require('account-sidebar.php'); ?>
		<div class="col-md-9">
			<div class="card">
				<h6 class="card-header">Profile</h6>
				<div class="card-body">
					<form>
						<table class="table table-bordered">
							<tr>
								<th>Full Name</th>
								<td>
									<input type="text" class="form-control" />
								</td>
							</tr>
							<tr>
								<th>Username</th>
								<td>
									<input type="text" class="form-control" />
								</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>
									<input type="text" class="form-control" />
								</td>
							</tr>
							<tr>
								<th>Address</th>
								<td>
									<textarea class="form-control" rows="5"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" class="btn btn-primary btn-sm" /></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>