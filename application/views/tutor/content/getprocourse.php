

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<label>Course Name</label>
			<?php 
				echo form_open_multipart('tutor/updateprocourse');
				$coursename = array(
						'name' =>'coursename',
						'class'=>'form-control',
						'placeholder'=>'Course Name',
						'id'=>'xp_8',
						'value'=>$courses[0]['uc_coursename']
					 );
				echo form_input($coursename);
			?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Course Discription</label>
					<?php 
						$coursedesc = array(
								'name' =>'coursedesc',
								'class'=>'form-control edit',
								'placeholder'=>'Course Name',
								'id'=>'cd_9'
							 );
						echo form_textarea($coursedesc,$courses[0]['uc_detail']);
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Course Required</label>
					<?php 
						$coursereq = array(
								'name' =>'courserequired',
								'class'=>'form-control edit',
								'placeholder'=>'Course Name',
								'id'=>'cd_91'
							 );
						echo form_textarea($coursereq,$courses[0]['uc_required_course']);
					?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>From</label>
					<?php 
						$day_from = array(
								'Monday' =>'Monday',
								'Tuesday'=>'Tudseday',
								'Wednesday'=>'Wensday',
								'Thursday'=>'Thursday',
								'Friday'=>'Friday',
								'Saturday'=>'Saturday',
								'Sunday'=>'Sunday',
							 );
						$extra = array('class' =>'form-control','id'=>'cst_7');
						echo form_dropdown('dayfrom',$day_from,$courses[0]['uc_day_from'],$extra);
					?>
				</div>
			</div>	
			<div class="col-md-6">
				<div class="form-group">
					<label>To</label>
					<?php 
						$day_to = array(
								'Monday' =>'Monday',
								'Tuesday'=>'Tudseday',
								'Wednesday'=>'Wensday',
								'Thursday'=>'Thursday',
								'Friday'=>'Friday',
								'Saturday'=>'Saturday',
								'Sunday'=>'Sunday',
							 );
						$extra = array('class' =>'form-control','id'=>'cst_09');
						echo form_dropdown('dayto',$day_to,$courses[0]['uc_day_to'],$extra);
					?>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Level</label>
					<?php 
						$courselevel = array(
							'basic' =>'basic',
							'intermediate'=>'intermediate',
							'advance'=>'Advance',
							'Basic to Advance'=>'Basic to Advance',
							'intermediate to advance'=>'intermediate to advance',
							'basic to intermediate'=>'basic to intermediate'
							);
						$extra = array('class' =>'form-control','id'=>'csl_4');
						echo form_dropdown('courselevel',$courselevel,$courses[0]['uc_level'],$extra);
					?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Duration</label>
					<input type="text" name="duration" class="form-control" placeholder="Duration" value="<?php echo $courses[0]['uc_duration'];?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Where you will teach</label>
						<?php 
							/*$whereteach = array(
								'Home Tuition' =>'Home Tuition',
								'Skype'=>'Skype',
								'University/collage'=>'University/collage',
								'Others'=>'Others',*/
								$whereteach = array(
								'name' =>'where',
								'class'=>'form-control',
								'placeholder'=>'Course Name',
								'id'=>'csl_41',
								'value'=>$courses[0]['uc_course']
							);
							/*$extra = array('class' =>'form-control','id'=>'csl_41');
							echo form_dropdown('where',$whereteach,$courses[0]['uc_course'],$extra);*/
							echo form_input($whereteach);
						?>
				</div>				
			</div>
			<div class="col-md-6">
				<div class="form-group">
				<label>Course Fess</label>
					<?php
						$fess = array(
						'name' =>'fess',
						'class'=>'form-control',
						'placeholder'=>'Fess',
						'id'=>'xp_80',
						'value'=>$courses[0]['uc_fess']
					 );
					echo form_input($fess);
					?>
				</div>
			</div>
		</div>
		<input type="hidden" name="x_di" value="<?php echo $this->encrypt->encode($courses[0]['uc_id']);?>">
		<input type="hidden" name="x_pi" value="<?php echo $courses[0]['uc_cover'];?>">
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