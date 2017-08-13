

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-1" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">

			<?php 
				echo form_open_multipart('tutor/courseedit',array('id'=>'ef_x5'),array('xp4'=> $this->encrypt->encode($course[0]['c_id']),'xp5'=>$course[0]['course_cover']));//xp4 = course_id , xp5 = oldiamge
				$coursename = array(
						'name' =>'coursename',
						'class'=>'form-control',
						'placeholder'=>'Course Name',
						'id'=>'xp_8',
						'value'=>$course[0]['course_name']
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
						'id'=>'cd_9'
					 );
				echo form_textarea($coursedesc,$course[0]['course_desc']);
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
				echo form_dropdown('courselevel',$courselevel,$course[0]['course_level'],$extra);
			?>
		</div>
		<div class="form-group">
			<?php 
				$coursetype = array(
						'free' =>'free',
						'pro'=>'pro'
					 );
				$extra = array('class' =>'form-control','id'=>'cst_7');
				echo form_dropdown('coursetype',$coursetype,$course[0]['course_type'],$extra);
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

	<div class="col-md-4" style="margin-top:100px;">
		<?php if(!empty($course[0]['course_cover'])): ?>
			<img src="<?php echo base_url('assets/images/courses/'.$course[0]['course_cover']);?>" alt="" class="img-responsive">
		<?php endif; ?>

	</div>
</div>