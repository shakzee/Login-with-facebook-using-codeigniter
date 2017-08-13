<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Online Courses</h1>
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo base_url('') ?>">Home</a> 
        </li>
        <li class="active">
          Online Courses
        </li>
      </ul>
    </div>
    
    <section class="col-md-12 col-sm-12">
      <div class="col-right dcrpd">
        <?php c_error();?>
        <?php if($allcoures): ?> 
          <div class="row">
          <?php foreach($allcoures as $course):?>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
              <div class="xpr_b">
                <div class="main-img cimcr">
                  <a href="<?php echo site_url('onlinecourses/detail/'.$course->uc_id)?>">
                    <img src="<?php echo base_url('assets/images/p_courses/'.$course->uc_cover) ?>" alt="<?php echo base_url('assets/images/courses/'.$course->uc_coursename) ?>" class="img-responsive cimg_8">
                  </a>
                  <p class="lead">
                      <a href="<?php echo site_url('onlinecourses/detail/'.$course->uc_id)?>">
                        <?php echo $course->uc_coursename?>
                      </a>
                  </p>
                </div>
                <div class="strip-courses">
             		  <div class="title-course">
         			      <h3>
                       <?php echo 'RS: ' . $course->uc_fess;?>
                      <!-- <img src="<?php echo base_url('assets/home/img/new.png') ?>"  alt="New"> --> 
                    </h3>
                    <ul>
                     	<li>
                        <i class="icon-calendar"></i> <!-- Start date: 24/06/13 -->
                         Start date: <?php echo date('d/m/Y',strtotime($course->uc_date))?>
                      </li>
                      <li>
                        <i class="icon-bookmark"></i> ID: <?php echo $course->uc_id?>
                      </li>
                    </ul>
                  </div>
                  <div class="description">
                    <p>
                      <?php echo word_limiter(strip_tags($course->uc_detail),20,' .... '.anchor('onlinecourses/detail/'.$course->uc_id,'Read more'))?>
                    </p>
                    <br>
                    <br>
                    <ul>
                      <li>
                          <?php 
                                echo 'Days: ' . $course->uc_day_from . ' To ' . $course->uc_day_to;
                            ?>
                      </li>
                      <li>
                        Venue:
                          <?php
                              echo $course->uc_course; 
                            ?>
                      </li>
                      <li>
                        Views:
                          <?php
                              echo pro_course_views($course->uc_id); 
                            ?>
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
