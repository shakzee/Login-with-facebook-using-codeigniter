<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Courses</h1>
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo base_url('') ?>">Home</a> 
        </li>
        <li class="active">
          Courses
        </li>
      </ul>
    </div>
    <!-- <aside  class="col-md-3 col-sm-3">
	    <div class="col-left">
    	  <h3>Browse Courses</h3>
        <ul class="submenu-col">
          <li>
            <a href="<?php echo base_url('allcourses') ?>" id="active">
              All Courses
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Administration (10)
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Business (08)
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Communication (05) 
              <img src="<?php echo base_url('assets/home/img/new.png') ?>" alt="New">
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Computing (08) 
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Counseling (04)
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Education (06)
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('allcourses/coursedetail') ?>">
              Engineering (08)
            </a>
          </li>
        </ul>
        <hr>
        <h5>Upcoming Courses</h5>
        <p>
          Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu blandit diam, at faucibus mi ante vel augue.
        </p>
        <p>
          <a href="<?php echo base_url('allcourses/coursedetail') ?>" class=" button_red_small">
            View Courses
          </a>
        </p>
      </div>
      <p>
        <img src="<?php echo base_url('assets/home/img/banner.jpg') ?>" alt="Banner" class="img-rounded img-responsive" >
      </p>
    </aside> -->
    <section class="col-md-12 col-sm-12">
      <div class="col-right dcrpd">
        <?php c_error();?>
        <?php if($allcoures): ?> 
          <div class="row">
          <?php foreach($allcoures as $course):?>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <div class="xpr_b">
                <div class="main-img cimcr">
                  <a href="<?php echo site_url('courses/detail/'.$course->c_id)?>">
                    <img src="<?php echo base_url('assets/images/courses/'.$course->course_cover) ?>" alt="<?php echo base_url('assets/images/courses/'.$course->course_name) ?>" class="img-responsive cimg_8">
                  </a>
                  <p class="lead">
                      <a href="<?php echo site_url('courses/detail/'.$course->c_id)?>">    
                        <?php echo $course->course_name?> 
                      </a>
                  </p>
                </div>
                <div class="strip-courses">
             		  <div class="title-course">
         			      <h3>
                       <?php echo $course->course_type . ' Course'?>
                      <!-- <img src="<?php echo base_url('assets/home/img/new.png') ?>"  alt="New"> --> 
                    </h3>
                    <ul>
                     	<li>
                        <i class="icon-calendar"></i> <!-- Start date: 24/06/13 -->
                         Start date: <?php echo date('d/m/Y',strtotime($course->course_date))?>
                      </li>
                      <li>
                        <i class="icon-bookmark"></i> ID: <?php echo $course->c_id?>
                      </li>
                    </ul>
                  </div>
                  <div class="description">
                    <p>
                      <?php echo word_limiter($course->course_desc,20,' .... '.anchor('courses/detail/'.$course->c_id,'Read more'))?>
                    </p>
                    <br>
                    <br>
                    <ul>
                      <li>
                        <i class="icon-book"></i> 
                          <?php 
                              $video_count = $this->mod_home->total_courses_nav($course->c_id);
                              echo $video_count . ' Lectures';
                          ?>
                      </li>
                      <li>
                        <i class="icon-reorder"></i> 
                          <?php 
                                echo $course->course_level .' Level ';
                            ?>
                      </li>
                       <!-- <li>
                        <i class="icon-user"></i> 
                          <?php 
                                echo $course->fname.nbs(2).$course->lname;
                            ?>
                      </li> -->
                      <li>
                        Views <?php echo course_views($course->c_id) + $course->c_views;?>
                      </li>
                    </ul>

                  </div>
                </div>
            </div>
          </div>
          <?php endforeach;?>
          </div>
		  <hr>
		  <div class="text-center">
			<ul class="pagination custmpag">
				<li>
					<?php echo $links;?>
				</li>
			</ul>
		  </div>
        <?php else: ?>
          Courses not available
        <?php endif; ?>
        <!--
		<hr>
        <div class="text-center">
           <ul class="pagination">
            <li>
              <a href="#">Prev</a>
            </li>
            <li class="active">
              <a href="#">1</a>
            </li>
            <li>
              <a href="#">2</a>
            </li>
             <li>
              <a href="#">3</a>
            </li>
            <li>
              <a href="#">Next</a>
            </li>
          </ul> 

        </div>
		-->
		
      </div><!-- end col right-->
    </section>
  </div><!-- end row-->
</div> <!-- end container-->
