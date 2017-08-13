

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<?php echo form_open_multipart('admin/addproduct'); ?>
		<div class="form-group">
			<?php
				$option = array();
				foreach ($categories->result() as $cat)
				{
					$option[$cat->c_id] =  $cat->c_name;
				}

				echo form_dropdown('category',$option,'','class="form-control"')
			?>
		</div>
		<div class="form-group">
			<?php 
				$productname = array(
						'name' =>'p_name',
						'class'=>'form-control',
						'id'=>'pn_8',
						'value'=>'',
						'placeholder'=>'Add Product Name'
					 );
				echo form_input($productname);
			?>
		</div>	
		<div class="form-group">
			<?php 
				$p_manufa = array(
						'name' =>'p_manufa',
						'class'=>'form-control',
						'id'=>'c_8',
						'value'=>'',
						'placeholder'=>'Select manufacture'
					 );
				echo form_input($p_manufa);
			?>
		</div>

		<div class="form-group">
			<?php 
				$att = array(
						'name' =>'prdocut_dp',
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