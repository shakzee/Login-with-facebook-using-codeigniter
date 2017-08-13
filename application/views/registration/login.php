
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="lf_x">
				<div class="text-center">
					<div class="form-group">
						<h3>Log In to your Account </h3>
					</div>
					<hr>
					<div class="form-group">
						<a href="<?php if(!empty($fburl)) echo $fburl;?>" class="socil btn btn-primary btn-lg btn-block">
					        <span class="pull-left fa fa-facebook" aria-hidden="true"></span>
					        Log In with Facebook
					     </a>
					</div>
					<div class="form-group">
						<a href="<?php echo $g_login_url;?>" class="socil2 btn btn-primary btn-lg btn-block">
					        <span class="pull-left fa fa-google-plus aria-hidden="true"></span>
					        Log In with Google Plus
					     </a>
					</div>
					<hr>
					<div class="form-group">
						<h3>OR use your shakzee account</h3>
					</div>
				</div>
				<?php c_error();?>
				<form action="<?php echo site_url('login/checkuser');?>" method="post" class="">
					<div class="form-group">
						<label>Enter Your Email <span class="red">*</span></label>
						<input type="text" class="form-control" name="email" placeholder="Enter you Email">
					</div>

					<div class="form-group">
						<label>Enter Your Password <span class="red">*</span></label>
						<input type="password" class="form-control" name="password" placeholder="Enter you password">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Login</button>
						<div class="pull-right">
							Not Registered..?
							<a href="<?php echo site_url('signup')?>" class="">Signup</a>
						</div>
						<br><br>
						<p>
							<a href="javascript:void(0)" id="fps_9">Forgot Password</a>
						</p>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>