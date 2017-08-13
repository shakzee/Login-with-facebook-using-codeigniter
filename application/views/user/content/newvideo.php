

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<?php 
				echo form_open_multipart('tutor/addvideo');
				$cour_option  = array();
				foreach ($all_courses->result() as $course)
				{
					$cour_option[$course->c_id] = $course->course_name; 
				}
			/*$courselevel = array(
						'basic' =>'basic',
						'intermediate'=>'intermediate',
						'advance'=>'Advance',
						'Basic to Advance'=>'Basic to Advance'
					 );*/
				$extra = array('class' =>'form-control','id'=>'lek_4');
				echo form_dropdown('course',$cour_option,'',$extra);

			?>
		</div>
		<!-- time Picker -->
		<div class="form-group">
			<?php 
				$video_name = array(
						'name' =>'video_name',
						'class'=>'form-control',
						'placeholder'=>'Video Name',
						'id'=>'vx_9',
						'value'=>''
					 );
				echo form_input($video_name);

			?>
		</div>
 		<div class="form-group">
			<?php 
				$dailymotion = array(
						'name' =>'dailymotion',
						'class'=>'form-control',
						'placeholder'=>'Dailymotion Link',
						'id'=>'xp_8',
						'value'=>''
					 );
				echo form_input($dailymotion);

			?>
		</div>
		<div class="form-group">
			<?php 
				$youtube = array(
						'name' =>'youtube',
						'class'=>'form-control',
						'placeholder'=>'Youtube Link',
						'id'=>'xp_8',
						'value'=>''
					 );
				echo form_input($youtube);

			?>
		</div>


        <div class="bootstrap-timepicker">
            <div class="form-group">
                <label>Time picker:</label>
                  	<div class="input-group">
                      <?php 
							$duration = array(
									'name' =>'duration',
									'class'=>'form-control timepicker',
									'placeholder'=>'Video Duration',
									'id'=>'xp_8',
									'value'=>''
								 );
							echo form_input($duration);
						?>
                    <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                    </div>
                   </div><!-- /.input group -->
            </div><!-- /.form group -->
        </div>
		<div class="form-group">
			<?php 
				echo form_submit('AddProduct','AddProduct','class="btn btn-primary"');
				echo form_close();
			?>
		</div>

	</div>
</div>