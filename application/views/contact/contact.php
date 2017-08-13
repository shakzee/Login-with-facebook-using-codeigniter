<div class="container">
	<div class="row">
    	<div class="col-md-12">
			<h1>Contact Us</h1>
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo base_url('') ?>">Home</a>
				</li>
				<li class="active">
					Contact Shakzee
				</li>
			</ul>
		</div>
		<section class="col-md-8 col-sm-8 col-md-offset-2">
			<div class="col-right">
				<h3>We love to hear from you!</h3>
				<p class="lead">
					If you have any questions or suggestions please don't hesitate to fill out the form bellow. We'll get back to you as soon as we can.
				</p>
				<hr>
				<div id="message-contact"></div>
				 <?php c_error();?>
				<h4>Plan a visit</h4>
				<div id="message-visit"></div>
				<form method="post" action="<?php echo site_url('contactus/submitquery');?>" >
					<div class="row">
						<div class="col-md-6">
							<label>First Name <span class="required">* </span></label>
							<?php if(is_logedin()): ?>
								<input type="text" value="<?php echo $this->session->userdata('fname')?>" class="form-control ie7-margin" id="name_visit" readonly>
							<?php else: ?>
								<input type="text" class="form-control ie7-margin" name="fname">
							<?php endif;?>
						</div>
						<div class="col-md-6">
							<label>Last name <span class="required">* </span></label>
							<?php if(is_logedin()): ?>
								<input type="text" class="form-control ie7-margin" id="lastname_visit" value="<?php echo $this->session->userdata('lname')?>" readonly>
							<?php else: ?>
								<input type="text" class="form-control ie7-margin" name="lname">
							<?php endif;?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Email <span class="required">* </span></label>
							<?php if(is_logedin()): ?>
								<input type="email" id="email_visit" class="form-control ie7-margin" value="<?php echo $this->session->userdata('email')?>" readonly>
							<?php else: ?>
								<input type="email" id="email_visit" class="form-control ie7-margin" name="email">
							<?php endif;?>

						</div>
						<div class="col-md-6">
							<label>Mobile number</label>
							<?php if(is_logedin()): ?>
								<?php if(!empty($this->session->userdata('u_mobile'))): ?>
									<input type="text" id="phone_visit" class="form-control ie7-margin" value="<?php echo $this->session->userdata('u_mobile')?>" readonly>
								<?php else: ?>
									<input type="text" id="phone_visit" class="form-control ie7-margin" value="N/A" readonly>
								<?php endif; ?>
							<?php else: ?>
								<input type="text" id="phone_visit" class="form-control ie7-margin" name="phone">
							<?php endif;?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Title <span class="required">*</span></label>
								<input type="text" name="title" class="form-control">
							</div>

							<div class="form-group">
								<label>Message <span class="required">*</span></label>
								<textarea rows="5" name="message" id="message_contact" class="form-control _"></textarea>								
							</div>
						</div>
					</div>
					<input type="submit" id="asdas" value="Submit" class=" button_medium">
				</form>
			</div><!-- end col right-->
		</section>
	</div><!-- end row-->
</div><!-- end container-->
