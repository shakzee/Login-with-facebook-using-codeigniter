<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo anchor('onlinecourses/detail/'.$course[0]['uc_id'],$course[0]['uc_coursename']);?></h1>
            <ul class="breadcrumb">
              <li>
                  <a href="<?php echo base_url('') ?>">Home</a> 
              </li>
              <li>
                  <a href="<?php echo base_url('onlinecourses') ?>">Online courses</a> 
              </li>
              <li class="active">
                  Detail
              </li>
            </ul>
        </div>
        <section class="col-md-4">
            <div class="col-left">
                <?php
                   // var_dump($rel_pro_courses->result());
                ?>
                <div class="">
                    <?php if($rel_pro_courses->num_rows() > 0): ?>
                        <h3 class="text-center">You May Also Learn</h3>
                        <ul class="rpcul">
                            <?php foreach($rel_pro_courses->result() as $p_course): ?>
                                <li>
                                    <div class="prel">
                                        <a href="<?php echo site_url('onlinecourses/detail/'.$p_course->uc_id);?>">
                                            <img src="<?php echo base_url('assets/images/p_courses/'.$p_course->uc_cover)?>" class="img-responsive" alt="<?php echo $p_course->uc_coursename?>">
                                        </a>
                                        <p class="prco">
                                            <?php echo $p_course->uc_coursename?>
                                        </p>
                                    </div>
                                </li>
                                <hr>
                            <?php endforeach;?>
                        </ul>
                    <?php else: ?>
                        Related course not available.
                     <?php endif; ?>
               </div>
            </div>
        </section>
        <section class="col-md-8 col-sm-8">
           <div class="col-right">
    	       <div class="main-img">
                    <img src="<?php echo base_url('assets/images/p_courses/'.$course[0]['uc_cover']) ?>" alt="<?php echo $course[0]['uc_coursename']?>" class="img-responsive">
                    <p class="lead">
                        <?php echo $course[0]['uc_coursename'];?>
                    </p>
                </div>
                  <?php
                    if(is_logedin()):
                 $pcourse_wish = get_pro_course_wish(user_id(),$course[0]['uc_id']);

                ?>
                    <p class="pcwlst" data-text="<?php echo $this->encrypt->encode($course[0]['uc_id']);?>">
                        <?php if(!empty($pcourse_wish) && count($pcourse_wish) > 0 && $pcourse_wish[0]['pcw_status'] == 1): ?>
                             <span id="pwlh" class="fa fa-heart" aria-hidden="true"> Wishlist </span>
                        <?php else:?>
                             <span id="pwlh" class="fa fa-heart-o" aria-hidden="true"> Wishlist </span>
                        <?php endif; ?>
                    </p>
                <?php else: ?>
                    <p class="pcwlstwlog">
                        <span id="wlh" class="fa fa-heart-o" aria-hidden="true"> Wishlist</span>
                    </p>
                <?php endif;?>                
                 <p class="pull-right xfes">
                    <strong>
                        RS.    
                        <?php echo $course[0]['uc_fess'];?>
                    </strong>
                </p>
                 <h3>Detail</h3>
                 <div class="cdetl">
                    <?php echo $course[0]['uc_detail'];?>
                </div>

                 <hr>
                  <h3>Required Course</h3>
                  <div class="creq">
                     <?php echo $course[0]['uc_required_course'];?>
                  </div>
                 <hr>
                 <?php echo '<strong>' . $course[0]['uc_level'] . ' </strong>' . ' level';?>
                <br><br>
                <ul class="data-lessons">
                   <li>
                        Date: <strong>
                            <?php echo date('d M Y',strtotime($course[0]['uc_date']));?>
                            </strong>
                    </li>
                    <li>
                        Venue:
                        <strong>
                            <?php echo $course[0]['uc_course'];?>
                        </strong>
                    </li>
                    <li>
                        Teacher
                        <strong>
                            <a href="">
                                <?php echo $course[0]['fname'].nbs(1).$course[0]['lname'];?>
                            </a>
                        </strong>
                    </li>
                    <li>
                        Views
                        <strong>
                                <?php echo pro_course_views($course[0]['uc_id']);?>
                        </strong>
                    </li>
                    <li>
                        Days
                        <strong>
                                <?php echo $course[0]['uc_day_from'] . '</strong> To <strong>' . $course[0]['uc_day_to'] . '</strong>' ;?>
                    </li>
                </ul> 
					<hr>
				    <h3>Share</h3>
			         	<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_google_plus"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_pinterest"></a>
                        <a class="a2a_button_whatsapp"></a>
                </div>
            </div><!-- end col right-->	
        </section>
    </div><!-- end row-->
</div> <!-- end container-->
  