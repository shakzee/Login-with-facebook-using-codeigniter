

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2 m_cont_top">
		<?php c_error();?>
		<?php
			$hidden = array(
					'p_ix' => $edit[0]['p_id'], 
					'op_x' => $edit[0]['p_dp'], 
					); 
			echo form_open_multipart('admin/editproduct','',$hidden); 
		?>
		<div class="form-group">
			<?php
				$option = array();
				foreach ($categories->result() as $cat)
				{
					$option[$cat->c_id] =  $cat->c_name;
				}

				echo form_dropdown('category',$option,$edit[0]['cat_id'],'class="form-control"')
			?>
		</div>
		<div class="form-group">
			<?php 
				$productname = array(
						'name' =>'p_name',
						'class'=>'form-control',
						'id'=>'pn_8',
						'value'=>$edit[0]['p_name'],
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
						'value'=>$edit[0]['p_manufa'],
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
	<div class="col-md-4 m_cont_top">
		<div class="imgc">
			<img src="<?php echo base_url('assets/images/a_product/'.$edit[0]['p_dp']);?>" class="img-responsive">	
		</div>
	</div>
</div>