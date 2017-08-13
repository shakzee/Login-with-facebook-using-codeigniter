

<div class="content-wrapper">
	<div class="col-md-6  m_cont_top">
		<?php c_error();?>
		<?php echo form_open_multipart('admin/addspacs'); ?>
		<div class="form-group">
			<div class="tag_fed_4_t" id="tag_fed_4_t"></div>
		</div>
					
		<div class="form-group">
		 <label>Find Product <span class="red">*</span></label>
			<?php 
				$prodid = array(
						'name' =>'m_name',
						'class'=>'form-control tag_text pophovr',
						'id'=>'q_4_t',
						'value'=>'',
						'placeholder'=>'Select Model'
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
						'name' =>'sp_name',
						'class'=>'form-control',
						'id'=>'pn_8',
						'value'=>'',
						'placeholder'=>'Add Specs Name'
					 );
				echo form_input($mo_name);
			?>
		</div>	
		<div class="ap_spc">
			<div class="form-group spprel">
			 <label>Add Spacs <span class="red">*</span></label>
				<?php 
					$sp_value = array(
							'name' =>'sp_val[]', 
							'class'=>'form-control sp_cn',
							'id'=>'sp_8',
							'value'=>'',
							'placeholder'=>'Add Specs Name'
						 );
					echo form_input($sp_value);
				?>
				<span class="add_cpcs">+</span>
			</div>	
		</div>
		<div class="form-group">
			<?php 
				echo form_submit('AddProduct','AddProduct','class="btn btn-primary"');
				echo form_close();
			?>
		</div>
	</div>

	<div class="col-md-5 m_cont_top">
		
	</div>
</div>