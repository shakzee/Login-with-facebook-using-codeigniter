<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo anchor('courses/detail/'.$course[0]['c_id'],$course[0]['course_name']);?></h1>
            <ul class="breadcrumb">
              <li>
                  <a href="<?php echo base_url('') ?>">Home</a> 
              </li>
              <li>
                  <a href="<?php echo base_url('courses') ?>">Courses</a> 
              </li>
              <li class="active">
                  Detail
              </li>
            </ul>
        </div>
        <aside  class="col-md-4 col-sm-4">
	        <div class="col-left rmpd">
                <?php if($all_videos->num_rows() > 0): ?>
                    <ul class="vds">    
                        <?php foreach($all_videos->result() as $video): ?>
                            <a href="<?php echo site_url('courses/video/'.$video->v_id)?>">
                                <li>
                                    <?php echo $video->video_name?>
                                </li>
                            </a>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    Video not Available
                <?php endif; ?>
            </div>
<!--             <p>
                <img src="<?php echo base_url('assets/home/img/banner.jpg') ?>" alt="Banner" class="img-rounded img-responsive" >
            </p>
 -->        </aside>
        <section class="col-md-8 col-sm-8">

           <div class="col-right">
    	       <div class="main-img">
                    <img src="<?php echo base_url('assets/images/courses/'.$course[0]['course_cover']) ?>" alt="<?php echo $course[0]['course_name']?>" class="img-responsive">
                    <p class="lead">
                        <?php echo $course[0]['course_name'];?>
                    </p>
                </div>

                <?php
                    if(is_logedin()):
                 $course_wishlist = get_course_wish(user_id(),$course[0]['c_id']);

                ?>
                    <p class="cwlst" data-text="<?php echo $this->encrypt->encode($course[0]['c_id']);?>">
                        <?php if(!empty($course_wishlist) && count($course_wishlist) > 0 && $course_wishlist[0]['cw_status'] == 1): ?>
                             <span id="wlh" class="fa fa-heart" aria-hidden="true"> Wishlist </span>
                        <?php else:?>
                             <span id="wlh" class="fa fa-heart-o" aria-hidden="true"> Wishlist </span>
                        <?php endif; ?>
                    </p>
                <?php else: ?>
                    <p class="cwlstwlog">
                        <span id="wlh" class="fa fa-heart-o" aria-hidden="true"> Wishlist</span>
                    </p>
                <?php endif;?>
                <p class="cwfdb"></p>                    
                 <p class="">
                    <?php echo $course[0]['course_desc'];?>
                </p>
				<h3>Share</h3>
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_google_plus"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_pinterest"></a>
                        <a class="a2a_button_whatsapp"></a>
                </div>
                <br><br>
                <ul class="data-lessons">
                   <li>
                        Date: <strong>
                            <?php echo date('d M Y',strtotime($course[0]['course_date']));?>
                            </strong>
                    </li>
                    <li>
                        Course Level:
                        <strong>
                            <?php echo $course[0]['course_level'];?>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <?php echo $course[0]['course_type'] . ' Course';?>
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
                                <?php echo course_views($course[0]['c_id']) + $course[0]['c_views'];?>
                        </strong>
                    </li>
                </ul>                 
            </div><!-- end col right-->	
        </section>
    </div><!-- end row-->
</div> <!-- end container-->
  