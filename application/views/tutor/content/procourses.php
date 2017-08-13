<div class="content-wrapper">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php c_error();?>
			<?php if($all_pro_courses): ?>
				<table class="table table-bordered">
					<td>id</td>
					<td>course name</td>
					<td>Video name</td>
					<td>Created</td>
					<td>course_type</td>
					<td>course_level</td>
					<td>Duration</td>
					<td>Edit</td>
					<td>Delete</td>
					<?php foreach($all_pro_courses as $course):?>
						<tr>
							<td>
								<?php echo $course->uc_id; ?>
							</td>
							<td>
								<?php echo $course->uc_coursename; ?>
							</td>
							<td>
								<?php echo $course->uc_coursename; ?>
							</td>
							<td>
								<?php echo $course->uc_date; ?>
							</td>
							<td>
								<?php echo $course->uc_level; ?>
							</td>
							<td>
								<?php echo $course->uc_level; ?>
							</td>
							<td>
								<?php echo $course->uc_level; ?>
							</td>
							<td>
								<a class="btn btn-primary" href="<?php echo site_url('tutor/getprocourse/'. $course->uc_id);?>" class="btn bnt-primary">Edit</a>
							</td>
							<td>
								<button class="btn bnt-primary">Delete</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<?php echo $links;?>
			<?php else: ?>
	
			<?php endif; ?>
		</div>
	</div>

</div>