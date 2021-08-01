<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<?php require('account-sidebar.php'); ?>
		<div class="col-md-9">
			<div class="card">
				<h6 class="card-header">Change Password</h6>
				<div class="card-body">
					<form>
						<table class="table table-bordered">
							<tr>
								<th>Old Password</th>
								<td>
									<input type="password" class="form-control" />
								</td>
							</tr>
							<tr>
								<th>New Password</th>
								<td>
									<input type="password" class="form-control" />
								</td>
							</tr>
							<tr>
								<th>New Confirm Password</th>
								<td>
									<input type="password" class="form-control" />
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