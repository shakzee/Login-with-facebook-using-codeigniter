

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<?php 
				$hidden = array('v_x_i' =>$video[0]['v_id']);
				echo form_open_multipart('tutor/updatevideo','',$hidden);
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
				echo form_dropdown('course',$cour_option,$video[0]['c_id'],$extra);

			?>
		</div>
		<div class="form-group">
			<?php 
				echo form_open_multipart('tutor/addvideo');
				$vidcat = array('youtube' =>'youtube','dailymotion'=>'dailymotion');
			/*$courselevel = array(
						'basic' =>'basic',
						'intermediate'=>'intermediate',
						'advance'=>'Advance',
						'Basic to Advance'=>'Basic to Advance'
					 );*/
				$extra = array('class' =>'form-control','id'=>'lek_4');
				echo form_dropdown('vicat',$vidcat,$video[0]['video_cat'],$extra);

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
						'value'=>$video[0]['video_name']
					 );
				echo form_input($video_name);

			?>
		</div>
 		<div class="form-group">
			<?php 
				$video_link = array(
						'name' =>'video_link',
						'class'=>'form-control',
						'placeholder'=>'Video Link',
						'id'=>'xp_8',
						'value'=>''
					 );
				switch ($video[0]['video_cat']) {
					case 'youtube':
							$video_link['value'] = $video[0]['y_link'];
						break;
					case 'dailymotion':
							$video_link['value'] = $video[0]['d_link'];
						break;

				}
				echo form_input($video_link);

			?>
		</div>
        <div class="form-group">
            <?php 
				$duration = array(
					'name' =>'duration',
					'class'=>'form-control',
					'placeholder'=>'Video Duration',
					'id'=>'xp_8',
					'value'=>$video[0]['v_duration']
					);
				echo form_input($duration);
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
									'value'=>$video[0]['v_duration']
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