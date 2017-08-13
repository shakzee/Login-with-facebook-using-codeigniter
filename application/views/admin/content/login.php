
<div class="container xps">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php c_error();?>
			<h1>Login</h1>
			<?php
				$fattr = array('class' =>'' ,'id'=>'ad_x9' );
				echo form_open('admin/checkadmin');
			?>
			<div class="form-group">
				<?php
				$email = array('name'=>'email','id'=> 'aemail','class'=>'form-control');
					echo form_input($email);
				?>
			</div>
			<div class="form-group">
				<?php
				$pass = array('name'=>'password','id'=> 'apass','class'=>'form-control');
					echo form_password($pass);
				?>
			</div>

			<div class="form-group">
				<?php
					echo form_submit('mysubmit', 'Login','class="btn btn-primary"');
				?>
			</div>

			<?php echo form_close();?>	
		</div>
	</div>
</div>

