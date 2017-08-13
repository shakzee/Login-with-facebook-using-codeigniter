
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="lf_x">
				<div class="text-center">
					<div class="form-group">
						<h3>Reset Your Password </h3>
					</div>
					<hr>
				</div>
				<?php c_error();?>
				<form action="<?php echo site_url('user/resetpass');?>" method="post" class="">
				<input type="hidden" name="xp3" value="<?php echo $this->encrypt->encode($ch_link[0]['confirm_pass'])?>">
					<div class="form-group">
						<label>Enter Your Email <span class="red">*</span></label>
						<input type="password" class="form-control" name="password" placeholder="Enter you Email">
					</div>

					<div class="form-group">
						<label>Enter Your Password <span class="red">*</span></label>
						<input type="password" class="form-control" name="cnpassword" placeholder="Enter you password">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Login</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>