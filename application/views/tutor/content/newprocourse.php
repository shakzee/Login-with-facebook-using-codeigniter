<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<label>Course Name</label>
			<?php 
				echo form_open_multipart('tutor/addprocourse');
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
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Course Discription</label>
					<?php 
						$coursedesc = array(
								'name' =>'coursedesc',
								'class'=>'form-control edit',
								'placeholder'=>'Course Name',
								'id'=>'cd_9',
								'value'=>''
							 );
						echo form_textarea($coursedesc);
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
								'id'=>'cd_9',
								'value'=>''
							 );
						echo form_textarea($coursereq);
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
						echo form_dropdown('dayfrom',$day_from,array('Monday'),$extra);
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
						echo form_dropdown('dayto',$day_to,array('Monday'),$extra);
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
							'basic to intermediate'=>'basic to intermediate',
							'all levels'=>'All levels'
							);
						$extra = array('class' =>'form-control','id'=>'csl_4');
						echo form_dropdown('courselevel',$courselevel,array('basic'),$extra);
					?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Duration</label>
					<input type="text" name="duration" class="form-control" placeholder="Duration">
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
								'Others'=>'Others',
							);
							$extra = array('class' =>'form-control','id'=>'csl_41');
							echo form_dropdown('where',$whereteach,array('Home Tuition'),$extra);*/
							$whereteach = array(
							'name' =>'where',
							'class'=>'form-control',
							'placeholder'=>'Course Name',
							'id'=>'csl_41',
							'value'=>''
						 );
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
						'value'=>''
					 );
					echo form_input($fess);
					?>
				</div>
			</div>
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