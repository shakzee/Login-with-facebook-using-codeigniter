

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2 m_cont_top" >
		<?php c_error();?>
		<?php echo form_open_multipart('admin/addmodel'); ?>
		<div class="form-group">
			<div class="tag_fed_4_t" id="tag_fed_4_t"></div>
		</div>
					
		<div class="form-group">
		 <label>Find Product <span class="red">*</span></label>
			<?php 
				$prodid = array(
						'name' =>'p_name',
						'class'=>'form-control tag_text pophovr',
						'id'=>'q_3_t',
						'value'=>'',
						'placeholder'=>'Select Product'
					 );
				echo form_input($prodid);
			?>
			<div class="show_tags"></div>	
		</div>	
		<div class="form-group">
			<div class="tag_fed" id="tag_fed"></div>
		</div>
		<div class="form-group">
			<?php 
				$mo_name = array(
						'name' =>'mo_name',
						'class'=>'form-control',
						'id'=>'pn_8',
						'value'=>'',
						'placeholder'=>'Add Model Name'
					 );
				echo form_input($mo_name);
			?>
		</div>	

		<div class="form-group">
			<?php 
				$d_display = array(
						'name' =>'m_display',
						'class'=>'form-control',
						'id'=>'c_8',
						'value'=>'',
						'placeholder'=>'Model Display'
					 );
				echo form_input($d_display);
			?>
		</div>

		<div class="form-group">
			<?php 
				$d_size = array(
						'name' =>'m_size',
						'class'=>'form-control',
						'id'=>'c_8',
						'value'=>'',
						'placeholder'=>'Model size'
					 );
				echo form_input($d_size);
			?>
		</div>
		<div class="form-group">
			<?php 
				$m_desc = array(
						'name' =>'m_desc',
						'class'=>'form-control',
						'id'=>'c_8',
						'value'=>'',
						'placeholder'=>'Model Discription'
					 );
				echo form_textarea($m_desc);
			?>
		</div>
		<div class="form-group">
			<?php 
				$att = array(
						'name' =>'mod_dp',
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