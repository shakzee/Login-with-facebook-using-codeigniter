<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				<?php echo $blog[0]['blog_title']?>
			</h1>
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo base_url('') ?>">Home</a>
				</li>
                    <span class="divider">/</span>

            	<li>
            		<a href="<?php echo base_url('blogs') ?>">Blogs</a>
            	</li>
				<li class="active">
					<?php echo $blog[0]['blog_title']?>
				</li>
			</ul>
		</div>
<!-- 		<aside class="col-md-4 col-sm-4">
			<div class="col-left">
				<div class="sidebar">
					<div class="widget">
            			<div class="form-group">
							<form class="form-search form-inline">
								<input type="text" class="input-medium form-control">
								<button type="submit" class="button_medium" style="position:relative; top:2px;">Search</button>
							</form>
                		</div>
					</div>
					<div class="widget">
						<h4>Text widget</h4>
						<p>
							Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
						</p>
					</div>
					<hr>
					<div class="widget">
						<h4>Recent post</h4>
						<ul class="recent_post">
							<li>
                    			<i class="icon-calendar-empty"></i> 16th July, 2020 
                    			<div>
                    				<a href="#">
                    					It is a long established fact that a reader will be distracted 
                    				</a>
                    			</div>
		                    </li>
							<li>
                		    	<i class="icon-calendar-empty"></i> 16th July, 2020 
                		    	<div>
                		    		<a href="#">
                		    			It is a long established fact that a reader will be distracted 
                		    		</a>
                		    	</div>
                    		</li>
							<li>
                    			<i class="icon-calendar-empty"></i> 16th July, 2020 
                    			<div>
                    				<a href="#">
                    					It is a long established fact that a reader will be distracted 
                    				</a>
                    			</div>
                    		</li>
						</ul>
					</div>
					<hr>
					<div class="widget tags">
						<h4>Tags</h4>
						<a href="#">Lorem ipsum</a>
						<a href="#">Dolor</a>
						<a href="#">Long established</a>
						<a href="#">Sit amet</a>
						<a href="#">Latin words</a>
						<a href="#">Excepteur sint</a>
					</div>
				</div>
			</div>
		    <p>
		    	<img src="" alt="Banner" class="img-rounded img-responsive" >
		    </p>
		</aside>
 -->		<section class="col-md-12 col-sm-12 col-xs-12">
			<div class="col-right">
				<div class="post">
					<h2>
						<a href="<?php echo base_url('blogs/readblog/'.$blog[0]['b_id'].'/'.word_limiter(url_title($blog[0]['blog_title'],'dash', true),20,'...')) ?>">
							<?php echo $blog[0]['blog_title']?>
						</a>
					</h2>
    					<img src="<?php echo base_url('assets/images/blogs/'.$blog[0]['blog_cover']) ?>" alt="<?php echo $blog[0]['blog_title']?>" class="img-responsive bvimg">
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li>
									<i class="icon-calendar-empty"></i>On 
									<span>
										<?php echo date('d M Y',strtotime($blog[0]['b_created']))?>
									</span>
								</li>
								<li>
									<i class="icon-user"></i>By 
									<a href="#"><?php echo $blog[0]['fname'].nbs(1).$blog[0]['lname']; ?></a>
								</li>
								<li>
									<i class="icon-tags"></i>Tags 
									<?php 
			                        		$b_tags = get_comments($blog[0]['b_id']);
			                        		if($b_tags->num_rows() > 0):
			                        			foreach($b_tags->result() as $blog_tag):
			                        	?>
				                        	<a href="<?php echo site_url('blogs/tagged').'?t='.$blog_tag->tag_name?>"><?php echo $blog_tag->tag_name; ?></a> 
			                        	<?php endforeach; ?>
			                        	<?php endif; ?>
			                        	<?php ?>
								</li>
                                <li>
                                    Views <strong><?php echo blog_views($blog[0]['b_id']); ?></strong>
                                </li>
							</ul>
						</div>
						<div class="post-right">
							<i class="icon-comments"></i>
							<a href="#"><?php echo totsl_blog_comment($blog[0]['b_id']); ?> </a>Comments
						</div>
					</div>
					<div class="bhylcon">
						<?php echo base64_decode($blog[0]['blog']); ?>
					</div>


				</div>
				<h3>Share</h3>
				 <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_google_plus"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_pinterest"></a>
                        <a class="a2a_button_whatsapp"></a>
                    </div>
				<hr>
				<h4><?php echo totsl_blog_comment($blog[0]['b_id']); ?> comments</h4>
				
    			
    			<div class="well">
                    <h4>Leave a Comment:</h4>
                    <?php if(is_logedin()): ?>
                        <div class="form-group">
                            <textarea class="form-control cmnts" rows="7" cols="7"></textarea>
                            <input type="hidden" value="<?php echo $this->encrypt->encode($blog[0]['b_id']); ?>" class="y67xp">
                        </div>
                        <div class="form-grup">
                            <button class="btn btn-primary mntsb6_8" disabled="disabled">Submit</button>
                        </div>
                        <br>
                        <div class="form-group xpw3">
                            
                        </div>
                    <?php else: ?>
                    <form action="<?php echo site_url('blogs/add_guest_user'); ?>" method="post">
                        <div class="form-group">
                            <label><span class="red">*</span></label>
                            <input type="text" name="name" id="uname" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label><span class="red">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your email address">
                        </div>
                        <div class="form-group">
                            <label><span class="red">*</span></label>
                            <textarea name="comment" class="form-control cmnts" rows="7" cols="7"></textarea>
                            <input type="hidden" name="b998" value="<?php echo $this->encrypt->encode($blog[0]['b_id']); ?>" class="y67xp">
                        </div>
                        <div class="form-grup">
                            <button type="sumbit" class="btn btn-primary">Submit</button>
                            OR
                             <a href="javascript:void(0)" class="btn btn-primary" id="login_dro">Login with your account</a>
                        </div>
                        <br>
                        <div class="form-group xpw3">
                            
                        </div>
                    </form>
                    <?php endif; ?>
                </div>

                <hr>

                <!-- Posted Comments -->
                <div class="bcmnts">
                    <?php if($b_comments->num_rows() > 0): ?>
                        <?php foreach($b_comments->result() as $comments): ?>
                            <div class="media mopw domobj<?php echo $comments->bc_id?>">
                                <?php if(is_logedin() && $comments->user_id === user_id()): //checkig if user logdedin?>
                                <div class="dropdown  pull-right">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="fa fa-sort-desc" aria-hidden="true"></span>
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <?php if($comments->user_id === user_id())://if comments and logedin id same ?>
                                        <li>
                                            <a href="javascript:void(0)" data-text="<?php echo $this->encrypt->encode($comments->bc_id);?>" data-id="<?php echo $comments->bc_id?>" class="cdt87">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-text="<?php echo $this->encrypt->encode($comments->bc_id);?>" data-id="<?php echo $comments->bc_id?>" class="dlcom">Delete</a>
                                        </li>
                                        <?php endif; ?>
                                      </ul>
                                </div>
                                <?php endif;//if user logdedin ?>
                                <a class="pull-left" href="#">
                                    <?php if($comments->bc_guest): ?>
                                            <img class="media-object" src="<?php echo base_url('assets/images/users/male.jpg')?>" alt="<?php echo $comments->fname.nbs(1).$comments->lname?>">
                                        <?php else: ?>
                                            <img class="media-object" src="<?php echo user_img($comments->user_id)?>" alt="<?php echo $comments->gu_name?>">
                                        <?php endif; ?>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?php if($comments->bc_guest): ?>
                                            <?php echo $comments->gu_name?>
                                        <?php else: ?>
                                            <?php echo $comments->fname.nbs(1).$comments->lname?>
                                        <?php endif; ?>
                                        <small>
                                            <?php echo timeago($comments->bc_date);?>
                                        </small>
                                        <a href="javascript:void(0)" class="brep" data-id="<?php echo $comments->bc_id ?>">
                                            Reply
                                        </a>
                                    </h4>
                                    <div class="orc<?php echo $comments->bc_id;?>">
                                        <?php echo $comments->bc_comment;?>
                                    </div>
                                </div>
                                <div class="replies">
                                <?php 
                                    $replies = blog_replies($comments->bc_id);
                                    if ($replies->num_rows() > 0):
                                    foreach($replies->result() as $reply):
                                ?>
                                    <div class="media mrep domobjrep<?php echo $reply->bcp_id?>">
                                        <?php if(is_logedin()): ?>
                                         <div class="dropdown  pull-right domobjrep<?php echo $reply->bcp_id?>">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span class="fa fa-sort-desc" aria-hidden="true"></span>
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <?php if($reply->user_id === user_id()): ?>
                                                <li>
                                                    <a href="javascript:void(0)" data-text="<?php echo $this->encrypt->encode($reply->bcp_id);?>" data-id="<?php echo $reply->bcp_id?>" class="rdt87">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" data-text="<?php echo $this->encrypt->encode($reply->bcp_id);?>" data-id="<?php echo $reply->bcp_id?>" class="dlrp">Delete</a>
                                                </li>
                                                <?php endif; //if users comment?>
                                              </ul>
                                        </div>    
                                    <?php endif; ?>
                                          <div class="media-left">
                                            <a href="#">
                                              <img class="media-object" src="<?php echo user_img($reply->user_id)?>" alt="<?php echo $reply->fname.nbs(1).$reply->lname?>">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <h4 class="media-heading">
                                                <small>
                                                    <?php echo timeago($reply->bcp_date);?>
                                                </small>
                                                <?php echo $reply->fname.nbs(1).$reply->lname?>
                                            </h4>
                                            <div class="rx8e crep<?php echo $reply->bcp_id;?>">
                                                 <?php echo $reply->pcp_reply?>
                                            </div>
                                          </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                                </div>
                             </div> 
                            <div class="r_cm<?php echo $comments->bc_id ?> dn">
                                 <div class="form-group">
                                    <input type="text" class="form-control rpbr rpt<?php echo $comments->bc_id?>" > 
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary bcrep" data-id="<?php echo $comments->bc_id?>" data-text="<?php echo $this->encrypt->encode($comments->bc_id);?>">Reply</button>
                                </div>
                            </div> 
                        <?php endforeach;?>
                    <?php endif; ?>
                </div>
			</div>
		</section>
	</div>
</div>
  