<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Courses</h1>
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo base_url('') ?>">Home</a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          Courses
        </li>
      </ul>
    </div>
    <aside  class="col-md-4 col-sm-4">
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
    </aside>
    <section class="col-md-8 col-sm-8">
      <div class="col-right">
  	    <div class="main-img">
          <img src="<?php echo base_url('assets/home/img/pic-2.jpg') ?>" alt="" class="img-responsive">
          <p class="lead">
            Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri ullamcorper id. 
          </p>
        </div>
        <?php c_error();?>
        <?php if($allcoures): ?> 
          <?php foreach($allcoures as $course):?> 
              <div class="strip-courses">
           		  <div class="title-course">
       			      <h3>
                     <?php echo $course->course_name?>
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
                    <?php echo word_limiter($course->course_desc,80,' ... ')?>
                  </p>
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
                     <li>
                      <i class="icon-user"></i> 
                        <?php 
                              echo $course->fname.nbs(2).$course->lname;
                          ?>
                    </li>
                  </ul>
                  <a href="<?php echo base_url('courses/detail/'.$course->c_id) ?>" class="button_medium button-align-2">Read more </a>
                </div>
              </div>
          <?php endforeach;?>
          <p><?php echo $links;?></p>
        <?php else: ?>
          Courses not available
        <?php endif; ?>
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
        </div><!-- end pagination-->
      </div><!-- end col right-->
    </section>
  </div><!-- end row-->
</div> <!-- end container-->
