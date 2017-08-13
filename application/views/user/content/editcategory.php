
<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2 m_cont_top">
		<?php c_error();?>
		<div class="form-group">
			<?php 
				$hidden = array(
						'cat_id'=>$edit[0]['c_id'],
						'old_pic'=>$edit[0]['c_dp']
					);
				echo form_open_multipart('admin/editcat','',$hidden);
				$catname = array(
						'name' =>'addcategory',
						'class'=>'form-control',
						'id'=>'xp_8',
						'value'=>$edit[0]['c_name']
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

	<div class="col-md-4">
		<div class="imgc m_cont_top">
			<?php if($edit[0]['c_dp']): ?>
				<div class="form-group">
					<img src="<?php echo base_url('assets/images/a_category/'.$edit[0]['c_dp']);?>" class="img-responsive">				
				</div>
			<?php endif;  ?>
		</div>
	</div>
</div>