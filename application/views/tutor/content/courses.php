<div class="content-wrapper">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php c_error();?>
			<?php if($all_courses): ?>
				<table class="table table-bordered">
					<td>id</td>
					<td>course_name</td>
					<td>course_date</td>
					<td>course_type</td>
					<td>course_level</td>
					<td>Edit</td>
					<td>Delete</td>
					<?php foreach($all_courses as $course):?>
						<tr>
							<td>
								<?php echo $course->c_id; ?>
							</td>
							<td>
								<?php
									$total_videos = $this->mod_tutor->total_videos($course->c_id,user_id()); 
									echo $course->course_name.nbs(4).'('.$total_videos.')'; 
								?>
							</td>
							<td>
								<?php echo $course->course_date; ?>
							</td>
							<td>
								<?php echo $course->course_type; ?>
							</td>
							<td>
								<?php echo $course->course_level; ?>
							</td>
							<td>
								<a href="<?php echo site_url('tutor/editcourse/'. $course->c_id);?>" class="btn bnt-primary">Edit</a>
							</td>
							<td>
								<button class="btn bnt-primary">Delete</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			<?php else: ?>
	
			<?php endif; ?>
		</div>
	</div>

</div>