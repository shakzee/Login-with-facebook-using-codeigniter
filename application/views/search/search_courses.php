<div class="container">
	<div class="mcint">
		<?php if($serach_courses): ?>
			<div class="row ssct91">
				<h2 class="sact99">Videos | <?php echo count($serach_courses);?></h2>
					<?php //var_dump($serach_courses); ?>
					<?php foreach($serach_courses as $course):?>
						<!-- <div class="col-md-3">
							<div class="thumbnail">
						      <img src="<?php echo base_url('assets/images/courses/'.$course->course_cover)?>" alt="<?php echo $course->course_name?>">
						      <div class="caption">
						        	<h4 class="scpr"><?php echo $course->course_name?></h4>
						      </div>					
						   </div>
						</div> -->
						<div class="col-md-3">
										<div class="cnt_09">
											<div class="thumbnail">
												<a href="<?php echo site_url('courses/detail/'.$course->c_id.'/'.$course->course_name)?>">
											      <img src="<?php echo base_url('assets/images/courses/'.$course->course_cover);?>" alt="<?php echo $course->course_name?>" class="img-responsive">
										    	</a>
										      <div class="caption">
										        <a href="<?php echo site_url('courses/detail/'.$course->c_id.'/'.$course->course_name)?>">
										        	<h4>
											        	<?php echo $course->course_name?>
											        </h4>
											    </a>
											    <div class="scdshr">
											    		<?php echo strip_tags($course->course_desc),20,' .... '.anchor('onlinecourses/detail/'.$course->c_id)?>
											    </div>
											    <br>
										        <p>	
										        	Tutor: <strong>
										        		<?php echo $course->fname.nbs(1).$course->lname; ?>
										        		</strong>
										        </p>
											      <ul class="list-inline">
												     <li>
													      <p>
													      Views:
													      	<strong>
													      		<?php echo course_views($course->c_id)+$course->c_views;?>
													      	</strong>
													      </p>
													 </li>
													 <li>
													      <p>
													      Level:
													      	<strong>
													      		<?php echo $course->course_level;?>
													      	</strong>
													      </p>
													 </li>
												    </ul>
										      </div>
										    </div>		                        		
										</div>
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