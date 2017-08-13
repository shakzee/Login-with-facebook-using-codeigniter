<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="vtl99"><?php echo anchor('courses/detail/'.$my_video[0]['v_id'],$my_video[0]['video_name']);?></h1>
            <ul class="breadcrumb">
              <li>
                  <a href="<?php echo base_url('') ?>">Home</a> 
              </li>
              <li>
                  <a href="<?php echo base_url('courses') ?>">Courses</a> 
              </li>
              <li class="active">
                  <?php echo $my_video[0]['video_name'];?>
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
              <div class="frco">
        	      <?php if($my_video[0]['video_cat'] == 'dailymotion'): ?>
                 <iframe  frameborder="0"  src="//www.dailymotion.com/embed/video/<?php echo $my_video[0]['d_link']?>" allowfullscreen></iframe>                
              <?php else: ?>
                  <iframe  frameborder="0"  src="https://www.youtube.com/embed/<?php echo $my_video[0]['y_link']?>" allowfullscreen></iframe> 
              <?php endif; ?>               

                   <div class="c_v_vs9"> 
                      <!--<div class="pull-right ldl">
                          <span class="lnksp vlk">
                            <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                            <span class="al_lk">
                              <?php /*echo get_videos_likes(
                                array(
                                      'video_id'=>$my_video[0]['v_id'],
                                      'like'=>1
                                    )
                                )*/?>                              
                            </span>
                          </span>
                          <span class="lnksp vdk">
                            <span class="fa fa-thumbs-o-down" aria-hidden="true"></span>
                            <span class="al_dk">
                              <?php /*echo get_videos_dlikes(
                                array(
                                      'video_id'=>$my_video[0]['v_id'],
                                      'dlike'=>1

                                    )
                                )*/?>
                            </span>
                          </span>
                      </div>-->

                     <p class="vvws">
                        <span>
                            <?php echo video_views($my_video[0]['v_id']);?> 
                        </span>
                          Views
                      </p>
                  </div>
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
                  <?php if($all_comments->num_rows() > 0 ): ?>
                    <?php foreach($all_comments->result() as $comment): ?>    
                      <div class="cc_76">
                        <div class="ncom dltcm<?php echo $comment->c_id;?>">
                          <ol class="molc">
                            <li>
                              <div class="avatar">
                                <a href="#">
                                  <img src="<?php echo user_img($comment->user_id); ?>" alt="" class="img-responsive">
                                </a>
                              </div>
                              <div class="comment_right clearfix">
                                 <?php if(is_logedin()): ?>
                                 <div class="dropdown pull-right crop_9">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <?php if(user_id() == $comment->user_id): ?>
                                          <li>
                                            <a href="javascript:void(0)" data-text="<?php echo $this->encrypt->encode($comment->c_id)?>" class="edcnt" data-id="<?php echo $comment->c_id;?>">
                                              Edit
                                            </a>
                                          </li>
                                          <li>
                                            <a href="javascript:void(0)" class="dmcnt" data-text="<?php echo $this->encrypt->encode($comment->c_id)?>" data-id="<?php echo $comment->c_id;?>">
                                              Delete
                                            </a>
                                          </li>
                                        <?php endif; ?>
                                        <?php if(user_id() != $comment->user_id): ?>
                                        <li>
                                          <a href="javascript:void(0)" class="vcrp_77" data-text="<?php echo $this->encrypt->encode($comment->c_id)?>" data-id="<?php echo $comment->c_id;?>">
                                            Report
                                          </a>
                                        </li>
                                      <?php endif; //user can't report?>
                                      </ul>
                                  </div>
                                <?php endif; ?>
                                <div class="comment_info">
                                  Posted by 
                                  <a href="#">
                                    <?php echo $comment->fname.nbs(1).$comment->lname?>
                                  </a>
                                  <span>|</span>
                                    <?php echo date('d M Y',strtotime($comment->c_date))?> 
                                  <span>|</span>
                                  <?php if(is_logedin()): ?>
                                    <a href="javascript:void(0)" class="rpcl" data-id="<?php echo $comment->c_id?>">
                                      Reply
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <div class="vcom<?php echo $comment->c_id;?>">
                                    <?php echo $comment->comment;?>
                                </div>
                              </div>
                               <ul class="vcrp rpcnt<?php echo $comment->c_id;?>">
                                 <?php 
                                  $reply = v_comment_reply($comment->c_id);
                                  if($reply->num_rows() > 0): 
                                  ?>
                                  <?php foreach($reply->result() as $vc_reply):?>   
                                    <li class="dcrp dcrp<?php echo $vc_reply->vcr_id;?>">
                                      <div class="avatar">
                                        <a href="#">
                                          <img src="<?php echo user_img($vc_reply->user_id); ?>" alt="" class="img-responsive">
                                        </a>
                                      </div>
                                      <div class="comment_right clearfix">
                                          <?php if(is_logedin())://checking session ?>
                                          <div class="dropdown pull-right crop_9">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              
                                              <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                              <?php if($vc_reply->user_id == user_id()): ?>
                                                <li>
                                                  <a class="edcntrep" href="javascrip:void(0)" data-text="<?php echo $this->encrypt->encode($vc_reply->vcr_id)?>" data-id="<?php echo $vc_reply->vcr_id;?>">
                                                    Edit
                                                  </a>
                                                </li>
                                                <li>
                                                  <a class="dmcntrep" href="javascrip:void(0)" data-text="<?php echo $this->encrypt->encode($vc_reply->vcr_id)?>" data-id="<?php echo $vc_reply->vcr_id;?>">
                                                    Delete
                                                    </a>
                                                </li>
                                                <?php endif; ?>
                                            <?php if($vc_reply->user_id != user_id()): ?> 
                                              <li>
                                                <a hhref="javascrip:void(0)" data-text="<?php echo $this->encrypt->encode($vc_reply->vcr_id)?>" data-id="<?php echo $vc_reply->vcr_id;?>">
                                                  Report
                                                </a>
                                              </li>
                                            <?php endif; ?>
                                            </ul>
                                          </div>
                                        <?php endif; //checking session?>
                                        <div class="comment_info">
                                          Posted by 
                                          <a href="#">
                                            <?php echo $vc_reply->fname.nbs(1).$vc_reply->lname;?>
                                          </a>
                                          <span>|</span>
                                             <?php echo date('d M Y',strtotime($vc_reply->vcr_date))?> 
                                          <span>|</span>
                                        </div>
                                        <div class="vcomrep<?php echo $vc_reply->vcr_id;?>">
                                           <?php echo $vc_reply->vc_reply;?>
                                        </div>
                                      </div>
                                    </li>
                                  <?php endforeach; ?>
                                    <li> 
                                      <div class="form-group crptb" id="crp<?php echo $comment->c_id?>">
                                          <input type="text" class="form-control vcri<?php echo $comment->c_id?>">
                                          <button class="button_medium crepl" data-id="<?php echo $comment->c_id?>" data-text="<?php echo $this->encrypt->encode($comment->c_id)?>">reply</button>
                                      </div>
                                      <input type="hidden" value="<?php echo $this->encrypt->encode($comment->user_id)?>" class="curs<?php echo $comment->c_id?>" >
                                    </li>
                                <?php else: ?>
                                  <li> 
                                      <div class="form-group crptb" id="crp<?php echo $comment->c_id?>">
                                          <input type="text" class="form-control vcri<?php echo $comment->c_id?>">
                                          <button class="button_medium crepl" data-id="<?php echo $comment->c_id?>" data-text="<?php echo $this->encrypt->encode($comment->c_id)?>">reply</button>
                                      </div>
                                      <input type="hidden" class="curs<?php echo $comment->c_id?>" value="<?php echo $this->encrypt->encode($comment->user_id)?>" class="curs<?php echo $comment->c_id?>">
                                    </li>
                                 <?php endif; ?>                                
                              </ul>
                            </li>
                          </ol>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php else: //if commetns not available?>
                    <div class="cc_76">
                      
                    </div>
                  <?php endif; ?>

                  <?php if(is_logedin()): ?>
                    <div class="form-group">
                      <textarea class="form-control" cols="10" rows="10" id="vc_91"></textarea>
                      <button type="button" id="vcsb_98" class="button_medium" disabled="disabled">Add Comment</button>
                    </div>
                    <div class="form-group vc_r0p">
                      
                    </div>
                    <input type="hidden" id="rc_9" value="<?php echo $this->encrypt->encode($my_video[0]['user_id'])?>">
                    <input type="hidden" id="vd_34" value="<?php echo $this->encrypt->encode($my_video[0]['v_id'])?>">
                  <?php endif; ?>
               </div>
            </div><!-- end col right-->	
        </section>
    </div><!-- end row-->
</div> <!-- end container-->
  