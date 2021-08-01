<?php require('header.php'); ?>
<main class="container my-4">
	<div class="row">
		<?php require('account-sidebar.php'); ?>
		<div class="col-md-9">
			<div class="card">
				<h6 class="card-header">Address Book</h6>
				<div class="card-body">
					<div class="row">
						<!-- Box -->
						<div class="col-md-4 mb-4">
							<div class="card border-secondary shadow">
								<div class="card-body">
									<h5 class="card-title">Test Address</h5>
									<p class="card-text">This is lorem ipsum address</p>
								</div>
							</div>
						</div>
						<?php
						for($i=1;$i<=4;$i++){
						?>
						<div class="col-md-4 mb-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Test Address</h5>
									<p class="card-text">This is lorem ipsum address</p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>