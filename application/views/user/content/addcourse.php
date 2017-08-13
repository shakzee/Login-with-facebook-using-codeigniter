

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<?php 
				echo form_open_multipart('tutor/addcourse');
				$coursename = array(
						'name' =>'coursename',
						'class'=>'form-control',
						'placeholder'=>'Course Name',
						'id'=>'xp_8',
						'value'=>''
					 );
				echo form_input($coursename);
			?>
		</div>

		<div class="form-group">
			<?php 
				$coursedesc = array(
						'name' =>'coursedesc',
						'class'=>'form-control',
						'placeholder'=>'Course Name',
						'id'=>'cd_9',
						'value'=>''
					 );
				echo form_textarea($coursedesc);
			?>
		</div>
		<div class="form-group">
			<?php 
				$courselevel = array(
						'basic' =>'basic',
						'intermediate'=>'intermediate',
						'advance'=>'Advance',
						'Basic to Advance'=>'Basic to Advance'
					 );
				$extra = array('class' =>'form-control','id'=>'csl_4');
				echo form_dropdown('courselevel',$courselevel,array('basic'),$extra);
			?>
		</div>
		<div class="form-group">
			<?php 
				$coursetype = array(
						'free' =>'free',
						'pro'=>'pro'
					 );
				$extra = array('class' =>'form-control','id'=>'cst_7');
				echo form_dropdown('coursetype',$coursetype,array('free'),$extra);
			?>
		</div>
		<div class="form-group">
			<?php 
				$att = array(
						'name' =>'course_cover',
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