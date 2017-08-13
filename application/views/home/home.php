


<div class="container mtop">
 	<div class="row" id="main-boxes">
	    <div class="col-md-4 col-sm-4">
	        <div class="box-style-2 green">
	            <a href="<?php echo base_url('courses') ?>" title="Courses">
	                <img src="<?php echo base_url('assets/home/img/icon-home-course.png') ?>" alt="Courses">
	                <h3>Courses</h3>
	                <p>
	                	We are providing professionally Web Development and Web Designing courses for FREE.
	                </p>
	            </a>
	        </div>
	    </div>
	    <div class="col-md-4 col-sm-4">
	        <div class="box-style-2 green">
	            <a href="<?php //echo base_url('contact') ?>" title="Apply">
	                <img src="<?php echo base_url('assets/home/img/icon-home-apply.png') ?>" alt="Online Courses">
	                <h3>Online Courses</h3>
	                <p>
	                	Do you want to learn at your Home...? We are also providing Online Courses, so learn everything from basic to advance on SKYPE.
	                </p>
	            </a>
	        </div>
	    </div>
	</div>
</div> <!-- end container-->


<div class="container">
	<div class="row">
<!-- 		<aside  class="col-md-4 col-sm-4">
		    <div class="box-style-1 ribbon borders">
		        <div class="feat">
		          <i class="icon-group icon-3x"></i>
		          <h3>Expert teachers</h3>
		          <p>
		          	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. 
		          </p>
		        </div>
		        <hr class="double">
		        <div class="feat">
		          <i class="icon-film icon-3x"></i>
		          <h3>Video Courses</h3>
		          <p>
		          	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. 
		          </p>
		        </div>
		        
		        <hr class="double">
		        <div class="feat last">
		          <i class="icon-laptop icon-3x"></i>
		          <h3>Online Courses</h3>
		          <p>
		          	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. 
		          </p>
		        </div>
		    </div>
		    <p>
		    	<a  href="<?php echo base_url('all-courses') ?>" title="All courses">
		    		<img src="<?php echo base_url('assets/home/img/banner.jpg') ?>" alt="Banner" class="img-rounded img-responsive" >
		    	</a>
		    </p>
		</aside>
 -->		
 		<section class="col-md-12">
			<div class="col-right">
			    <h2>Welcome on Shakzee</h2>
			    <h4 class="rblfn">
					Why you waste your time and money to get admission in centers.
					They just teach you a part from a course in a Week/Month, so why you waste your time if you have  capability  to learn whole course in a day or week.
					Learn professional courses in Urdu language with <strong><a href="<?php echo site_url('')?>">SHAKZEE</a></strong> for free.
			    </h4>
			    <div class="ovtl">
			    	<h4 class="rblfn">
			    		Over <span><?php echo total_videos();?> </span> free video tutorials for beginners, intermediate, expert and web professionals.So keep improving you skills with SHAKZEE for free.
			    	</h4>
			    </div>
			    <hr>

	           <div class="row">
	           		<h3 class="text-center">Start Learning Today with <strong>Shakzee</strong></h3>
	           		<br><br>
		           	<div class="col-md-4">
		           		<div class="fetr">
		           			<img src="<?php echo site_url('assets/images/unlimited-access.png'); ?>" alt="" clas="img-responsive">
			           		<p>
			           			<strong>
				           			Unlimited Access
			           			</strong>
			           		</p>
			           		<p>
			           			learn the advance programming skills with experts support.
			           		</p>
			           	</div>
		           	</div>
		           	<div class="col-md-4">
		           		<div class="fetr">
			           			<img src="<?php echo site_url('assets/images/ex-teachers.png'); ?>" alt="" clas="img-responsive">
			           		<p>
			           			<strong>
				           			Expert Teachers
			           			</strong>
			           		</p>
			           		<p>
			           			We have expert teachers for guidence, those are working in it industry.
			           		</p>
			           	</div>
		           	</div>

		           	<div class="col-md-4">
		           		<div class="fetr">
			           			<img src="<?php echo site_url('assets/images/learn-anywhere.png'); ?>" alt="" clas="img-responsive">
			           		<p>
			           			<strong>
				           			Learn Anywhere
			           			</strong>
			           		</p>
			           		<p>
			           			Having internet, connecting shakzee and learn from anywhere.
			           		</p>
			           	</div>
		           	</div>
	           </div>
	           <hr>
	           <div class="row">
	           	<div class="col-md-12 text-center">
	           		<h2 class="wpas89">WHAT PEOPLE ARE SAYING</h2>
	           		<?php if(is_logedin()): ?>
	           			<a href="<?php echo site_url('user/message'); ?>" class="">Click to say</a>
	           		<?php endif; ?>
	           	</div>
	           </div>
	           <hr>
	           <?php 
	           if(!empty($all_testimonials) && $all_testimonials->num_rows() > 0):?>
	           <div class="cd-testimonials-wrapper cd-container">
					<ul class="cd-testimonials">
						<?php
						$tcoubnt = 0; 

						foreach($all_testimonials->result() as $testimo): ?>
								<li>
									<p class="cmsgxsl">
										<?php echo $testimo->message?>
									</p>
									<div class="cd-author">
										<img src="<?php echo user_img($testimo->u_id);?>" alt="<?php echo $testimo->fname.nbs(2).$testimo->lname?>">
										<ul class="cd-author-info">
											<li>
												<p class="umane">
													<?php echo $testimo->fname.nbs(2).$testimo->lname?>
												</p>
											</li>
											<li>
												<p class="udesgi">
													<?php echo $testimo->designation; ?>
												</p>
											</li>
										</ul>
									</div>
								</li>
						<?php endforeach; ?>
					</ul> <!-- cd-testimonials -->
					<a href="javascript:void(0)" class="cd-see-all">See all</a>
			   </div> <!-- cd-testimonials-wrapper -->

				<div class="cd-testimonials-all">
					<div class="cd-testimonials-all-wrapper">
						<ul>
						<?php foreach($all_testimonials->result() as $all_testimo): ?>
							<li class="cd-testimonials-item">
								<p class="cmsgx">
									<?php echo $all_testimo->message?>
								</p>
								
								<div class="cd-author">
									<img src="<?php echo user_img($all_testimo->u_id);?>" alt="<?php echo $all_testimo->fname.nbs(2).$all_testimo->lname?>">
									<ul class="cd-author-info">
										<li>
										<span class="umanell">
											<?php echo $all_testimo->fname.nbs(2).$all_testimo->lname?>
										</span>		
										</li>
											<li>
											<span class="udesgill">
												<?php echo $all_testimo->designation; ?>
											</span>
											</li>
									</ul>
								</div> <!-- cd-author -->
							</li>
						<?php endforeach; ?>
						</ul>
					</div>	<!-- cd-testimonials-all-wrapper -->

					<a href="#0" class="close-btn">Close</a>
				</div> <!-- cd-testimonials-all -->
	           <hr>
		      <?php endif; ?>
			    <div class="row mto5">
			    	<h1 class="text-center fhch">Our Top Courses</h1>
			    	<br><br>
                    		<?php
								/*$course = array(14,3,13);
								$course_home = $this->mod_home->corses_for_nav($course);*/
                    		?>
                    		<!-- <div class="owl-carousel owl-theme">
							    <div class="item"></div>
							</div> -->
                    		<?php if($course_home): ?>
                    			<div class="owl-carousel owl-theme">
                    			<?php foreach($course_home->result() as $course): ?>
		                        	<div class="item">
			                        	<div class="card">
											 <a href="<?php echo site_url('courses/detail/'.$course->c_id)?>">
												  <img class="card-img-top" src="<?php echo base_url('assets/images/courses/'.$course->course_cover);?>" alt="<?php echo $course->course_name?>">
											 </a>
										  <div class="card-block cbhx9">
										    <h4 class="card-title">
										    	<?php echo $course->course_name?>
										    </h4>
										    <p class="card-text">
										    	<?php echo word_limiter($course->course_desc,20,'...')?>
										    </p>
										  </div>
										  <ul class="list-group list-group-flush">
										    <li class="list-group-item">
										    	 <?php 
						                              $video_count = $this->mod_home->total_courses_nav($course->c_id);
						                              echo '<strong>' . $video_count . ' </strong> ' . ' Lectures';
						                          ?>
										    </li>
										    <li class="list-group-item">
										    	<?php 
						                                echo '<strong> Levels: </strong>' . $course->course_level;
						                        ?>
										    </li>
										    <li class="list-group-item">
										    	  <?php
										    	  	$lview = course_views($course->c_id) + $course->c_views; 
										    	  	echo '<strong> Views </strong>' . $lview  ;?>
										    </li>
										  </ul>
										</div>
		                        	</div>
		                    <?php endforeach; ?>
							    <!-- <p class="text-center">
							    	<a href="<?php echo site_url('courses') ?>" class="button_large">
							    		View all courses 
							    	</a>
							    </p> -->
							 </div>
	                    <?php else: ?>
	                    	courses not available
	                    <?php endif; ?>
	            </div><!-- End row -->
	            
	           <?php if($pro_courses->num_rows() > 0 ): ?>
		           <hr>
		           <div class="row mto5">
		           		<h1 class="text-center fhch">Online Courses</h1>
		           		<br><br>
		           		<div class="owl-carousel owl-theme">
                    	<?php foreach($pro_courses->result() as $p_course): ?>
							<div class="cnt_09">
								<div class="card">
									<a href="<?php echo site_url('onlinecourses/detail/'.$p_course->uc_id)?>">
										  <img class="card-img-top" src="<?php echo base_url('assets/images/p_courses/'.$p_course->uc_cover);?>" alt="<?php echo $p_course->uc_coursename?>">
									</a>
									  <div class="card-block cbhx9">
									    <h4 class="card-title"><?php echo $p_course->uc_coursename?></h4>
									    <p class="card-text">
									    	<?php echo word_limiter(strip_tags($p_course->uc_detail),20,' .... '.anchor('onlinecourses/detail/'.$p_course->uc_id,'Read more'))?>
									    </p>
									  </div>
									  <ul class="list-group list-group-flush">
									    <li class="list-group-item">
									    	Tutor: <strong>
										        		<?php echo $p_course->fname.nbs(1).$p_course->lname; ?>
										        		</strong>
									    </li>
									    <li class="list-group-item">
									    	RS:
											   <strong>
											      <?php echo $p_course->uc_fess?>
											    </strong>
									    </li>
									    <li class="list-group-item">
									    	 Duration:
													      	<strong>
													      		<?php echo $p_course->uc_duration?>
													      	</strong>
									    </li>
									    <li class="list-group-item">
									    	 Views:
													      	<strong>
													      		<?php echo pro_course_views($p_course->uc_id);?>
													      	</strong>
									    </li>
									    <li class="list-group-item">
									    	  Level:
													      	<strong>
													      		<?php echo $p_course->uc_level;?>
													      	</strong>
									    </li>
									    <li class="list-group-item">
									    	Days:
													      	<strong>
													      		<?php echo $p_course->uc_day_from;?>
													      	</strong>
													      	To:
													      	<strong>
													      		<?php echo $p_course->uc_day_to;?>
													      	</strong>
									    </li>
									  </ul>
								</div>
                        		
							</div>
		                <?php endforeach; ?>
		                </div>
		           </div>
		           <br>
		       <?php endif;?>

		       <hr>
		       <div class="row mto5">
			    	<h1 class="text-center fhch">Our Latest Courses</h1>
			    	<br><br>
                    		<?php if($latest_course): ?>
                    			<div class="owl-carousel owl-theme">
                    			<?php foreach($latest_course->result() as $lcourse): ?>
		                        	<div class="item">
			                        	<div class="card">
												 <a href="<?php echo site_url('courses/detail/'.$lcourse->c_id)?>">
													  <img class="card-img-top" src="<?php echo base_url('assets/images/courses/'.$lcourse->course_cover);?>" alt="<?php echo $lcourse->course_name?>">
												 </a>
											  <div class="card-block cbhx9">
											    <h4 class="card-title">
											    	<?php echo $lcourse->course_name?>
											    </h4>
											    <p class="card-text">
											    	<?php echo word_limiter($lcourse->course_desc,20,'...')?>
											    </p>
											  </div>
											  <ul class="list-group list-group-flush">
											    <li class="list-group-item">
											    	 <?php 
							                              $video_count = $this->mod_home->total_courses_nav($lcourse->c_id);
							                              echo '<strong>' . $video_count . ' </strong> ' . ' Lectures';
							                          ?>
											    </li>
											    <li class="list-group-item">
											    	<?php 
							                                echo '<strong> Levels: </strong>' . $lcourse->course_level;
							                        ?>
											    </li>
											    <li class="list-group-item">
											    	  <?php
											    	  	$l_pview = course_views($lcourse->c_id) + $lcourse->c_views; 
											    	  	echo '<strong> Views </strong>' . $l_pview  ;?>
											    </li>
											  </ul>
											</div>
		                        	</div>
		                    <?php endforeach; ?>
							    <!-- <p class="text-center">
							    	<a href="<?php echo site_url('courses') ?>" class="button_large">
							    		View all courses 
							    	</a>
							    </p> -->
							 </div>
	                    <?php else: ?>
	                    	courses not available
	                    <?php endif; ?>
	            </div><!-- End row -->
	            <hr>
		       <div class="row mto5">
			    	<h1 class="text-center fhch">Latest Blogs</h1>
			    	<br><br>
                    		<?php if($latest_blogs): ?>
                    			<div class="owl-carousel owl-theme">
                    			<?php foreach($latest_blogs->result() as $blog): ?>
		                        	<div class="item">
		                        		<div class="card">
											  <img class="card-img-top" src="<?php echo base_url('assets/images/blogs/'.$blog->blog_cover);?>" alt="<?php echo $blog->blog_title?>">
											  <div class="card-block cbhx9">
											    <h4 class="card-title">
											    	<?php echo $blog->blog_title?>
											    </h4>
											    <p class="card-text">
											    	<?php echo word_limiter(base64_decode($blog->blog),20,'...')?>
											    </p>
											  </div>
											  <ul class="list-group list-group-flush">
											    <li class="list-group-item">
											    	<?php echo '<strong> On </strong>' . date('d M Y',strtotime($blog->b_created))?>
											    </li>

											    <li class="list-group-item">
											    	<?php echo '<strong> By </strong>' . $blog->fname?>
											    </li>

											    <li class="list-group-item">
											    	<?php echo '<strong> Views </strong>' . blog_views($blog->b_id);?>
											    </li>
											  </ul>
											</div>
		                        	</div>
		                    <?php endforeach; ?>
							    <!-- <p class="text-center">
							    	<a href="<?php echo site_url('courses') ?>" class="button_large">
							    		View all courses 
							    	</a>
							    </p> -->
							 </div>
	                    <?php else: ?>
	                    	Blogs not available
	                    <?php endif; ?>
	            </div><!-- End row -->
	            <hr>
			</div>
		</section>
	</div>
</div><!-- end container-->















