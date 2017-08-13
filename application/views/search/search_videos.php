<div class="container">
	<div class="mcint">
		<?php if($serach_videos): ?>
			<div class="row ssct91">
				<h2 class="sact99">Videos | <?php echo count($serach_videos);?></h2>
					<?php //var_dump($videos); ?>
					<?php foreach($serach_videos as $video):?>
						<div class="col-md-3">
							<a href="<?php echo site_url('courses/video/'.$video->v_id.'/'.$video->video_name); ?>">
								<div class="thumbnail">
							      <img src="<?php echo base_url('assets/images/courses/'.$video->course_cover)?>" alt="<?php echo $video->video_name?>">
							      <div class="caption">
							        	<h4 class="scpr"><?php echo $video->video_name?></h4>
							      </div>					
							   </div>
							</a>
						</div>
					<?php endforeach;?>
				<?php echo $links;?>
			</div>
			<?php else: ?>
				<div class="alert alert-warning" role="alert">
					<strong class="rnfer90"><?php echo $key?></strong> not found.
				</div>
		<?php endif;?>
	</div>
</div>