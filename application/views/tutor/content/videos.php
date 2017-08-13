<div class="content-wrapper">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php c_error();?>
			<?php if($all_videos): ?>
				<table class="table table-bordered">
					<td>id</td>
					<td>course name</td>
					<td>Video name</td>
					<td>Created</td>
					<td>course_type</td>
					<td>course_level</td>
					<td>Uploaded</td>
					<td>Duration</td>
					<td>Edit</td>
					<td>Delete</td>
					<?php foreach($all_videos as $vidos):?>
						<tr>
							<td>
								<?php echo $vidos->v_id; ?>
							</td>
							<td>
								<?php echo $vidos->course_name; ?>
							</td>
							<td>
								<?php echo $vidos->video_name; ?>
							</td>
							<td>
								<?php echo $vidos->v_date; ?>
							</td>
							<td>
								<?php echo $vidos->course_level; ?>
							</td>
							<td>
								<?php 
									switch ($vidos->video_cat)
										{
											case 'youtube':
													echo $vidos->y_link;
												break;
											case 'dailymotion':
												echo $vidos->d_link;
												break;
										}//checking video category
								 ?>
							</td>
							<td>
								<?php echo $vidos->video_cat; ?>
							</td>

							<td>
								<?php echo $vidos->v_duration; ?>
							</td>
							<td>
								<a href="<?php echo site_url('tutor/editvideo/'. $vidos->v_id);?>" class="btn bnt-primary">Edit</a>
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