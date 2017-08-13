<div class="container">
	<div class="mcint">
			<?php if(count($videos) > 0 ): ?>
				<div class="row ssct91">
					<h2 class="sact99">Videos | <?php echo count($videos);?></h2>
						<?php //var_dump($videos); ?>
						<?php foreach($videos as $video):?>
							<div class="col-md-3 col-sm-12 col-xs-12">
								<a href="<?php echo site_url('courses/video/'.$video['v_id'].'/'.$video['video_name']); ?>">
									<div class="thumbnail">
								      <img src="<?php echo base_url('assets/images/courses/'.$video['course_cover'])?>" alt="<?php echo $video['video_name']?>">
								      <div class="caption">
								        	<h4 class="scpr"><?php echo $video['video_name']?></h4>
								      </div>					
								   </div>
								</a>
							</div>
						<?php endforeach;?>
					<?php if(count($videos) == 16): ?>
						<div class="text-center">
							<a href="<?php echo site_url('search/videos?q='.$key);?>" class="btn btn-primary ">View More</a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif;?>

			<?php if(count($course) > 0 ): ?>
				<div class="row ssct91">
					<h2 class="sact99">Courses | <?php echo count($course);?></h2>
						<?php //var_dump($course); ?>
						<?php foreach($course as $freecourse):?>
							<div class="col-md-3 col-sm-12 col-xs-12">
										<div class="cnt_09">
											<div class="thumbnail">
												<a href="<?php echo site_url('courses/detail/'.$freecourse['c_id'].'/'.$freecourse['course_name'])?>">
											      <img src="<?php echo base_url('assets/images/courses/'.$freecourse['course_cover']);?>" alt="<?php echo $freecourse['course_name']?>" class="img-responsive">
										    	</a>
										      <div class="caption">
										        <a href="<?php echo site_url('courses/detail/'.$freecourse['c_id'].'/'.$freecourse['course_name'])?>">
										        	<h4>
											        	<?php echo $freecourse['course_name']?>
											        </h4>
											    </a>
											    <div class="scdshr">
											    		<?php echo strip_tags($freecourse['course_desc']),20,' .... '.anchor('onlinecourses/detail/'.$freecourse['c_id'])?>
											    </div>
											    <br>
										        <p>	
										        	Tutor: <strong>
										        		<?php echo $freecourse['fname'].nbs(1).$freecourse['lname']; ?>
										        		</strong>
										        </p>
											      <ul class="list-inline">
												     <li>
													      <p>
													      Views:
													      	<strong>
													      		<?php echo course_views($freecourse['c_id'])+$freecourse['c_views'];?>
													      	</strong>
													      </p>
													 </li>
													 <li>
													      <p>
													      Level:
													      	<strong>
													      		<?php echo $freecourse['course_level'];?>
													      	</strong>
													      </p>
													 </li>
												    </ul>
										      </div>
										    </div>		                        		
										</div>
			                </div>
						<?php endforeach;?>
					<?php if(count($course) == 16): ?>
						<div class="text-center">
							<a href="<?php echo site_url('search/courses?q='.$key);?>" class="btn btn-primary ">View More</a>
						</div>
					<?php endif; ?>

				</div>
			<?php endif;?>


			<?php if(count($pro_course) > 0 ): ?>
				<div class="row ssct91">
					<h2 class="sact99">Online Courses | <?php echo count($pro_course);?></h2>
						<?php //var_dump($course); ?>
						<?php foreach($pro_course as $p_course):?>
							<!-- <div class="col-md-3">
								<div class="thumbnail">
							      <img src="<?php echo base_url('assets/images/p_courses/'.$p_course['uc_cover'])?>" alt="<?php echo $p_course['uc_coursename']?>">
							      <div class="caption">
							        	<h4 class="scpr"><?php echo $p_course['uc_coursename']?></h4>
							      </div>					
							   </div>
							</div> -->
							<div class="col-md-3 col-sm-12 col-xs-12">
										<div class="cnt_09">
											<div class="thumbnail">
												<a href="<?php echo site_url('onlinecourses/detail/'.$p_course['uc_id'])?>">
											      <img src="<?php echo base_url('assets/images/p_courses/'.$p_course['uc_cover']);?>" alt="<?php echo $p_course['uc_coursename']?>" class="img-responsive">
										    	</a>
										      <div class="caption">
										        <a href="<?php echo site_url('onlinecourses/detail/'.$p_course['uc_id'])?>">
										        	<h4>
											        	<?php echo $p_course['uc_coursename']?>
											        </h4>
											    </a>
											    <div class="scdshr">
											    		<?php echo strip_tags($p_course['uc_detail']),20,' .... '.anchor('onlinecourses/detail/'.$p_course['uc_id'])?>
											    </div>
											    <br>
										        <p>	
										        	Tutor: <strong>
										        		<?php echo $p_course['fname'].nbs(1).$p_course['lname']; ?>
										        		</strong>
										        </p>
										        	<div class="pprce">
											      	<span>
											      		RS:
											      			<strong>
											      			<?php echo $p_course['uc_fess']?>
											      			</strong>
											      	</span>
										     	 </div>
											      <ul class="list-inline">
											      	<li>
													      <p>
													      Duration:
													      	<strong>
													      		<?php echo $p_course['uc_duration']?>
													      	</strong>
													      </p>
												     </li>
												     <li>
													      <p>
													      Views:
													      	<strong>
													      		<?php echo pro_course_views($p_course['uc_id']);?>
													      	</strong>
													      </p>
													 </li>
													 <li>
													      <p>
													      Level:
													      	<strong>
													      		<?php echo $p_course['uc_level'];?>
													      	</strong>
													      </p>
													 </li>
													 <li>
													      <p>
													      Days:
													      	<strong>
													      		<?php echo $p_course['uc_day_from'];?>
													      	</strong>
													      	To:
													      	<strong>
													      		<?php echo $p_course['uc_day_to'];?>
													      	</strong>
													      </p>
													 </li>
												    </ul>
										      </div>
										    </div>		                        		
										</div>
			                </div>
						<?php endforeach;?>
					<?php if(count($pro_course) == 16): ?>
						<div class="text-center">
							<a href="<?php echo site_url('search/onlinecourses?q='.$key);?>" class="btn btn-primary ">View More</a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif;?>

			<?php if(count($blogs) > 0 ): ?>
				<div class="row ssct91">
					<h2 class="sact99">Blogs | <?php echo count($blogs);?></h2>
						<?php //var_dump($course); ?>
						<?php foreach($blogs as $blog):?>
							<div class="col-md-3 col-sm-12 col-xs-12">
								<div class="thumbnail">
							      <a href="<?php echo site_url('blogs/readblog/'.$blog['b_id'].'/'.$blog['blog_title']);?>">
								      <img src="<?php echo base_url('assets/images/blogs/'.$blog['blog_cover'])?>" alt="<?php echo $blog['blog_title']?>">
							      </a>
							      <div class="caption">
							        	 <a href="<?php echo site_url('blogs/readblog/'.$blog['b_id'].'/'.$blog['blog_title']);?>">
									        	<h4 class="scpr"><?php echo $blog['blog_title']?></h4>
							        	</a>
									<div class="scdshr">
											 <?php echo strip_tags(base64_decode($blog['blog'])),20,' .... '.anchor('onlinecourses/detail/'.$blog['b_id'])?>
									</div>							        	
							      </div>					
							   </div>
							</div>
						<?php endforeach;?>
					<?php if(count($blogs) == 16): ?>
						<div class="text-center">
							<a href="<?php echo site_url('search/blogs?q='.$key);?>" class="btn btn-primary ">View More</a>
						</div>
					<?php endif;?>
				</div>
			<?php endif;?>
		<?php if(empty($videos) && empty($course) && empty($pro_course) && empty($blogs)):?>
			<div class="alert alert-warning" role="alert">
				<strong class="rnfer90"><?php echo $key?></strong> not found.
			</div>
		<?php endif; ?>
	</div>
</div>