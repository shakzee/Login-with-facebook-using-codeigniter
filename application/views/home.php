<div class="container">
	<div class="row">
		<h1 class="text-center">Welcome <?php echo $alldata['first_name'].nbs(1).$alldata['last_name']; ?></h1>
		<br><br>
		<div class="col-md-4 fbpsc">
			<p>
				First Name:  <?php echo $alldata['first_name']; ?>
			</p>

			<p>
				Last Name:  <?php echo $alldata['last_name']; ?>
			</p>

			<p>
				Email: <?php echo $alldata['email']; ?>
			</p>

			<p>
				Gender:	<?php echo $alldata['gender']; ?>
			</p>
			<?php echo img($alldata['picture']['data']['url']); ?>
			<br><br>
		</div>

		<div class="col-md-8">
			<?php var_dump($alldata); ?>
			<div>
			<br>
			<?php echo 	anchor('login_with_fb/signout','Logout','class="btn btn-success"')?>
			</div>
		</div>
		
	</div>
</div>