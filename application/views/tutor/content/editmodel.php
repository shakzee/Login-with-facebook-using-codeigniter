

<div class="content-wrapper">
	<div class="row">
			<div class="col-md-6 col-md-offset-1 m_cont_top" >
		<?php c_error();?>
		<?php 
			$hidden = array('o_mdp' =>$edit[0]['m_dp'],'xd'=>$edit[0]['m_id']);
			echo form_open_multipart('admin/modeledit','',$hidden); 
		?>
		<div class="form-group">
			<div class="tag_fed_4_t" id="tag_fed_4_t"></div>
		</div>
					
		<div class="form-group">
		 <label>Find Product <span class="red">*</span></label>
		 <div class="tag_fedx pull-right" id="tag_fedx">
		 	<span id="utags4000" class="udes utags4000"><?php echo $edit[0]['p_name'];?>
		 		<a href="javascript:void(0)" onclick="removetag(3)">
		 			<i class="fa fa-times"></i>
		 		</a>
		 </div>
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
						'value'=>$edit[0]['m_name'],
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
						'value'=>$edit[0]['m_display'],
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
						'value'=>$edit[0]['m_size'],
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
						'placeholder'=>'Model Discription'
					 );
				echo form_textarea($m_desc,$edit[0]['m_desc']);
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
		<div class="col-md-4 m_cont_top">
			<div class="imgc">
				<img src="<?php echo base_url('assets/images/a_model/'.$edit[0]['m_dp']);?>" alt="" class="img-responsive">
			</div>
		</div>

	</div>
</div>