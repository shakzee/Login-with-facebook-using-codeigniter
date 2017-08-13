<div class="container">
	<div class="mcint">
		<?php if($serach_online_courses): ?>
			<div class="row ssct91">
				<h2 class="sact99">Videos | <?php echo count($serach_online_courses);?></h2>
					<?php //var_dump($videos); ?>
					<?php foreach($serach_online_courses as $online_course):?>
						<!-- <div class="col-md-3">
							<div class="thumbnail">
						      <img src="<?php echo base_url('assets/images/p_courses/'.$online_course->uc_cover)?>" alt="<?php echo $online_course->uc_coursename?>">
						      <div class="caption">
						        	<h4 class="scpr"><?php echo $online_course->uc_coursename?></h4>
						      </div>					
						   </div>
						</div> -->
						<div class="col-md-3">
										<div class="cnt_09">
											<div class="thumbnail">
												<a href="<?php echo site_url('onlinecourses/detail/'.$online_course->uc_id)?>">
											      <img src="<?php echo base_url('assets/images/p_courses/'.$online_course->uc_cover);?>" alt="<?php echo $online_course->uc_coursename?>" class="img-responsive">
										    	</a>
										      <div class="caption">
										        <a href="<?php echo site_url('onlinecourses/detail/'.$online_course->uc_id)?>">
										        	<h4>
											        	<?php echo $online_course->uc_coursename?>
											        </h4>
											    </a>
											    <div class="scdshr">
											    		<?php echo strip_tags($online_course->uc_detail),20,' .... '.anchor('onlinecourses/detail/'.$online_course->uc_id)?>
											    </div>
											    <br>
										        <p>	
										        	Tutor: <strong>
										        		<?php echo $online_course->fname.nbs(1).$online_course->lname; ?>
										        		</strong>
										        </p>
										        	<div class="pprce">
											      	<span>
											      		RS:
											      			<strong>
											      			<?php echo $online_course->uc_fess?>
											      			</strong>
											      	</span>
										     	 </div>
											      <ul class="list-inline">
											      	<li>
													      <p>
													      Duration:
													      	<strong>
													      		<?php echo $online_course->uc_duration?>
													      	</strong>
													      </p>
												     </li>
												     <li>
													      <p>
													      Views:
													      	<strong>
													      		<?php echo pro_course_views($online_course->uc_id);?>
													      	</strong>
													      </p>
													 </li>
													 <li>
													      <p>
													      Level:
													      	<strong>
													      		<?php echo $online_course->uc_level;?>
													      	</strong>
													      </p>
													 </li>
													 <li>
													      <p>
													      Days:
													      	<strong>
													      		<?php echo $online_course->uc_day_from;?>
													      	</strong>
													      	To:
													      	<strong>
													      		<?php echo $online_course->uc_day_to;?>
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