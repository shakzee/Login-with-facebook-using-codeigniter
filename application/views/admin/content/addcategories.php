

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<?php 
				echo form_open_multipart('admin/addcategory');
				$catname = array(
						'name' =>'addcategory',
						'class'=>'form-control',
						'id'=>'xp_8',
						'value'=>''
					 );
				echo form_input($catname);
			?>
		</div>
		<div class="form-group">
			<?php 
				$att = array(
						'name' =>'cat_dp',
						'class'=>'tp_3'
					 );
				echo form_upload($att);
			?>
		</div>
		<div class="form-group">
			<?php 
				echo form_submit('AddProduct','AddProduct','class="btn btn-primary"');
				echo form_close();
			?>
		</div>

	</div>
</div>