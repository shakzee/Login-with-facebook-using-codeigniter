</head>
<body>
<?php if(is_logedin()){
	$userid = user_id();
	}
?>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]--> <!-- Border radius fixed IE10-->
<header>
    <div class="container">
	    <div class="row">
	        <div class="col-md-4 col-sm-4" id="logo">
	        	<a href="<?php echo base_url('') ?>">
	        		<img src="<?php echo base_url('assets/images/250x60.png') ?>" alt="Logo">
	        	</a>
	        </div>
	        <div class="col-md-8 col-sm-8">
	            <div id="phone" class="hidden-xs">
	            	<strong>+923111848452</strong>
	            	Shakzee
	            </div>
	            <!-- <div id="menu-top">
	                <ul>
	                    <li>
	                    	<a href="<?php echo base_url('') ?>" title="Home">Home</a> | 
	                    </li>
	                    <li>
	                    	<a href="<?php echo base_url('contact') ?>" title="Contact">Contact</a>
	                    </li>
	                </ul>
	            </div> -->
	        </div><!-- End col-md-8-->
	    </div><!-- End row-->
    </div><!-- End container-->
</header><!-- End Header-->

<nav>
<div class="megamenu_container">
	<a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->
    <ul class="megamenu megamn_hr">
	    <li>
        	<a href="<?php echo base_url('') ?>" class="nodrop-down">
        		Home
        	</a>
        </li>
        <li>
        	<a href="javascript:void(0)" class="drop-down">Courses</a>
        	<div class="drop-down-container">
            	<div class="row">
                	<div class="col-md-3">
                    	<h4>Quick links</h4>
	                    <ul class="list-menu">
	                        <li>
	                        	<a href="<?php echo site_url('courses') ?>" title="All courses">
	                        		All courses
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo site_url('courses/coursedetail') ?>" title="Course detail">
	                        		Course detail
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo site_url('aboutus') ?>" title="About">
	                        		About 
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo site_url('contact') ?>" title="Contact">
	                        		Ask for more information
	                        	</a>
	                        </li>
	                    </ul>
	                    <p>
	                    	<a href="<?php echo site_url('courses') ?>" title="Courses" class="button_medium add-bottom-20">
	                    		View all courses
	                    	</a>
	                    </p>
                	</div>
 	               	<div class="col-md-9">
                    	<div class="row">
                    		<?php
								$course = array(1,3,9,12,13,14);
								$course_nav = $this->mod_home->corses_for_nav($course);
                    		?>
                    		<?php if($course_nav): ?>
                    			<?php foreach($course_nav->result() as $course): ?>
		                        	<div class="col-md-4">
		                            	<h5>
		                            		<a href="<?php echo base_url('courses/detail/'.$course->c_id) ?>">
		                            			<i class="icon-book"></i>
		                            			<?php 
		                            				echo $course->course_name; 
		                            			?>
		                            		</a> 
		                            		<?php 
		                            			$video_count = $this->mod_home->total_courses_nav($course->c_id);
		                            			echo '('.$video_count.')';
		                            		?>
		                            	</h5>
			                            <p>
			                            	<?php 
					                            echo word_limiter($course->course_desc,10,' .. ');
		                            		?>
			                            </p>
			                            <p>
			                            	<a href="<?php echo base_url('courses/detail/'.$course->c_id) ?>" class="button_red_small">Read more</a>
			                            </p>
			                        </div>
		                    <?php endforeach; ?>
	                    <?php else: ?>
	                    	courses not available
	                    <?php endif; ?>
	                    </div><!-- End row -->

	                </div><!-- End col-md-9 -->
	            </div><!-- End row -->
	        </div><!-- End Item Container -->
        </li><!-- End Item -->
        
        <li>
        	<a href="javascript:void(0)" class="drop-down">Popular Courses</a>
	        <div class="drop-down-container">
	            <div class="row">
	                <div class="col-md-7">
	                    <iframe height="300"  frameborder="0" src="//www.dailymotion.com/embed/video/x2jp8nd" allowfullscreen></iframe>
	                </div>
	                <div class="col-md-5">
	                	<?php 
	                		$popular_course = $this->mod_courses->popular_course(14)
	                	?>
	                    <h4><?php echo $popular_course[0]['course_name']?></h4>
	                    <p>
	                    	<?php echo word_limiter($popular_course[0]['course_desc'],115,' ... ')?>
	                    </p>
<!-- 	                    <p>
	                        An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam.
	                    </p>
	                    <p>
	                        An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam.
	                    </p>
 -->					
	                    <p>
	                    	<a href="<?php echo base_url('courses/detail/'.$popular_course[0]['c_id']) ?>" title="All courses" class="button_red_small">Read more</a>
	                    </p>
	                </div>
	            </div><!-- End row -->
	            <hr>
	            <div class="row">
	            <div class="col-md-3">
	                    <h5>Web Designing / Front-end</h5>
	                    <ul class="list-menu">
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/4') ?>" title="All courses">
	                        		HTML
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/5') ?>" title="All courses">
	                        		HTML5
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/7') ?>" title="All courses">
	                        		CSS
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/8') ?>" title="All courses">
	                        		CSS3
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/1') ?>" title="All courses">
	                        		jQuery
	                        	</a>
	                        </li>
	                    </ul>
	                </div>
	                <div class="col-md-3">
	                    <h5>Frameworks</h5>
	                    <ul class="list-menu">
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/3') ?>" title="All courses">
	                        		Bootstrap
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/14') ?>" title="All courses">
	                        		CodeIgniter
	                        	</a>
	                        </li>
<!-- 	                        <li>
	                        	<a href="<?php echo base_url('allcourses') ?>" title="All courses">
	                        		President of the College
	                        	</a>
	                        </li>
 -->	                    </ul>
	                </div>
	                <div class="col-md-3">
	                    <h5>Languages</h5>
	                    <ul class="list-menu">
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/13') ?>" title="All courses">
	                        		PHP
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/2') ?>" title="All courses">
	                        		JavaScript
	                        	</a>
	                        </li>

	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/12') ?>" title="All courses">
	                        		C language
	                        	</a>
	                        </li>
	                    </ul>
	                </div>
	                <div class="col-md-3">
	                    <h5>Content management system</h5>
	                    <ul class="list-menu">
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/1') ?>" title="All courses">
	                        		Wordpress
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo base_url('courses/detail/1') ?>" title="All courses">
	                        		Wordrpess customizing
	                        	</a>
	                        </li>

	                    </ul>
	                </div>
	            </div><!-- End row -->
	        </div><!-- End Item Container -->
        </li><!-- End Item -->
        <li>
        	<a href="javascript:void(0)" class="drop-down">About</a>
	        <div class="drop-down-container">
	            <div class="row">
	                <div class="col-md-3">
	                    <h4>Quick links</h4>
	                    <ul class="list-menu">
	                        <li>
	                        	<a href="<?php echo site_url('courses') ?>" title="All courses">
	                        		All courses
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo site_url('courses/coursedetail') ?>" title="Course detail">
	                        		Course detail
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo site_url('aboutus') ?>" title="About">
	                        		About 
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="<?php echo site_url('contact') ?>" title="Contact">
	                        		Ask for more information
	                        	</a>
	                        </li>
	                    </ul>
	                    <p>
	                    	<a href="<?php echo base_url('allcourses') ?>" title="Courses" class="button_medium add-bottom-20">
	                    		View all courses
	                    	</a>
	                    </p>
	                </div>
                    <div class="col-md-9">
                        <ul class="tabs">
                            <li>
                            	<a class="active" href="#section-1">
                            		Staff
                            	</a>
                            </li>
                            <li>
                            	<a href="#section-2">
                            		History
                            	</a>
                            </li>
                        </ul>
                        <ul class="tabs-content">
                            <li class="active" id="section-1">
                            	<?php
                            		$teachers = $this->mod_home->get_tutors();
                            		if(count($teachers) == 1):
                            	?>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <p>
	                                    	<img src="<?php echo base_url('assets/images/users/'.$teachers[0]['u_dp']) ?>" class="img-rounded shadow img-responsive" alt="">
	                                    </p>
	                                    <h5>
	                                    	<?php echo $teachers[0]['fname'].nbs(1).$teachers[0]['lname']?>
	                                    </h5>
	                                    <p>
	                                    	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei.
	                                    </p>
	                                    <p>
	                                    	<a href="#" class="button_red_small" title="staff">Read more</a>
	                                    </p>
	                                </div>
	                            </div>
		                        <?php else: ?>
		                        	teacher not available
		                        <?php endif; ?>
                            </li>
                            <li id="section-2">
	                            <p class="lead ">
	                            	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. An utinam reprimique duo, putant mandamus cu qui.
	                            </p>
	                            <hr>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <h5>History</h5>
	                                    <p>
	                                    	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei.
	                                    </p>
	                                </div>
	                                <div class="col-md-6">
	                                    <h5>Mission</h5>
	                                    <p>
	                                    	An utinam reprimique duo, putant mandamus cu qui. 
	                                    	<strong>Autem possim his cu</strong>, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei.
	                                    </p>
	                                </div>
	                            </div><!-- End row -->
                            </li>
                        </ul><!-- End tabs-->
                    </div><!-- End col-md-9 -->
	            </div><!-- End row -->
	        </div><!-- End Item Container -->
        </li><!-- End Item -->
       
        <li>
        	<a href="<?php echo base_url('blog') ?>" class="nodrop-down">
        		Blog
        	</a>
        </li>

        <li>
        	<a href="<?php echo base_url('onlinecourses') ?>" class="nodrop-down">
        		Online Courses
        	</a>
        </li>
        <li>
        	<a href="javascript:void(0)" class="drop-down">Contacts</a>
	        <div class="drop-down-container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div id="map_1"></div>
	                </div>
	                <div class="col-md-6">
	                    <h4>Address</h4>
	                    <ul>
	                        <li>
	                        	<i class="icon-home"></i> 11 Fifth Ave, Loftus - NEW JERSEY, US
	                        </li>
	                        <li>
	                        	<i class="icon-phone"></i> Telephone: +923111848452
	                        </li>
	                        <li>
	                        	<i class="icon-phone-sign"></i> Fax: +61 (2) 9542 3599
	                        </li>
	                        <li>
	                        	<i class="icon-envelope"></i> Email: 
		                        	info@shakzee.com
	                        </li>
	                    </ul>
	                    <br>
	                    <hr>
	                    <div class="row">
	                        <div class="col-md-6">
	                            <h5>Questions?</h5>
	                            <p>
	                            	If you have any question fell free to ask.
	                            </p>
	                            <p>
	                            	<a href="<?php echo base_url('contact') ?>" class="button_red_small">Contact Now</a>
	                            </p>
	                        </div>
<!-- 	                        <div class="col-md-6">
	                            <h5>Apply now</h5>
	                            <p>
	                            	An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei.
	                            </p>
	                            <p>
	                            	<a href="<?php echo base_url('contact') ?>" class="button_red_small" title="Contact">Contact us</a>
	                            </p>
	                        </div> -->
	                    </div><!-- End row -->
	                </div><!-- End col-md-6 -->
	            </div><!-- End row-->
	        </div><!-- End Item Container -->
        </li><!-- End Item -->
        <?php if(!is_logedin()): ?>
	        <li>
	        	<a href="<?php echo site_url('Login'); ?>" class="nodrop-down">
	        		Login
	        	</a>
	        </li>
        <?php endif; ?>
        <li>
        	<?php if(is_logedin()): ?>
        	<ul class="nav navbar-nav navbar-right rnvb">
	         <li class="dropdown not_9">
	          <a href="#" class="dropdown-toggle" id="cnti" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	         	 <div class="prel">
		         	 <span class="fa fa-bell-o" aria-hidden="true"></span>
		         	 <?php

		         	 	$tnot = get_total_noti($userid,get_session_element('last_noti_date')); 
		         	 	if($tnot > 0 ): 
		         	 ?>
			         	 <span class="hmnot"><?php echo $tnot;?></span>
			         <?php endif; ?>
	         	 </div>
	         </a>
	          <ul class="dropdown-menu">
	          	<li class="nvnt">Notifications</li>
	          	<?php $allnoti = get_notification($userid,30);?>
	          	<?php if($allnoti->num_rows() > 0 ): ?>
		           <?php foreach($allnoti->result() as $noti): ?>
			           	 <li>
							<a href="<?php echo $noti->n_link; ?>" class="manc">
								<div class="media nprof">
								  <div class="media-left">
								      <img class="media-object" src="<?php echo user_img($noti->u_id);?>" alt="<?php echo $noti->fname.nbs(1).$noti->lname?>">
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">
								    	<?php echo $noti->fname.nbs(1).$noti->lname?>
								    </h4>
								    <span class="mgs">
								    	<?php echo $noti->n_message?>
								    </span>
								    <p class="time">
								    	<?php echo time_ago($noti->n_created);?>
								    </p>
								  </div>
								</div>	
							</a>            
			            </li>
		           <?php endforeach;?>
	          	<?php else: ?>
	          		Notification not available
	          	<?php endif;?>
	            <li role="separator" class="divider"></li>
	            <li class="text-center"><a href="<?php echo site_url('notifications')?>">View All</a></li>
	          </ul>
	         </li>
	         
	        <li>
	        	<a href="<?php echo u_s_data('u_id'); ?>" class="rnw">
	        		<span class="spn">
		        		<img src="<?php echo user_img($userid); ?>" class="ldpw">
		        		<?php echo $this->session->userdata('fname'); ?>
	        		</span>
	        	</a>
	        </li>
	        <li class="dropdown rnwx">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li>
	            	<?php if(u_s_data('teacher')): ?>
		            	<a href="<?php echo site_url('tutor')?>">Dashboard</a>
		            <?php else: ?>
		            	<a href="<?php echo site_url('user')?>">Dashboard</a>
		            <?php endif;  ?>
	            </li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?php echo site_url('user/logout')?>">Logout</a></li>
	          </ul>
	         </li>
          </ul>
	      <?php endif; ?>
        </li>
    </ul><!-- End Mega Menu -->
</div>
</nav><!-- /navbar -->
