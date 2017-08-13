
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="lf_x">
				<div class="ca_ol text-center">
					<h3>Create an account or <span><a href="<?php echo site_url('login');?>">Log in</a></span></h3>
				</div>
				<hr>
				<div class="row sfg">

					<div class="col-md-6">
						<div class="form-group">
							<?php //var_dump($fburl);?>
							<a href="<?php if(!empty($fburl)) echo $fburl;?>" class="socil btn btn-primary btn-lg btn-block">
									<span class="pull-left fa fa-facebook" aria-hidden="true"></span>
									Signup with Facebook
							    </a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<a href="<?php echo $g_login_url;?>" class="socil2 btn btn-danger btn-lg btn-block">
									<span class="pull-left fa fa-google-plus" aria-hidden="true"></span>
									Log In with Google Plus
							    </a>
						</div>
					</div>
				</div>
				<?php c_error();?>
				<form action="<?php echo site_url('signup/newaccount');?>" method="post" class="">
					<div class="row">
						<hr class="chr">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name <span class="red">*</span></label>
								<input type="text" class="form-control" name="fname" placeholder="Enter First Name">
							</div>
							
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name <span class="red">*</span></label>
								<input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
							</div>
						</div>

					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Enter Your Email <span class="red">*</span></label>
								<input type="text" class="form-control" name="email" placeholder="Enter you Email">
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Enter Your Password <span class="red">*</span></label>
								<input type="password" class="form-control" name="password" placeholder="Enter you password">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="radio">
						  <label>
						    <input type="radio" class="mygender" name="gender" id="male" value="male" checked="checked">
						    Male
						  </label>
						</div>
					</div>

					<div class="form-group">
						<div class="radio">
						  <label>
						    <input type="radio" class="mygender" name="gender" id="female" value="female">
						    Female
						  </label>
						</div>
					</div>

					<div class="form-group">
						<button class="btn btn-primary" type="submit">Signup</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>