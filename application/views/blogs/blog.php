
<div class="container">
	<div class="row">
		<div class="com-md-12">
			<h1>Blog</h1>
		    <ul class="breadcrumb">
		      <li>
		      	<a href="<?php echo base_url('') ?>">Home</a> 
		      </li>
				<span class="divider">/</span>
				<li>
		      		<a href="<?php echo base_url('Blogs') ?>">Blogs</a> 
		      	</li>
		      <li class="active">
		      	Blog
		      </li>
		    </ul>
		</div>
		<aside  class="col-md-4 col-sm-12 col-xs-12">
			<div class="col-left">
				<div class="sidebar">
					<div class="widget">
						  <div class="recb">
						          <h3>
						            <u>Most Viewed</u>
						          </h3>
						          <?php 
						            if($mvblog->num_rows() > 0): 
						              $count = 1;
						            foreach($mvblog->result() as $most_blog): 
						          ?>
						              <div class="row">
						                <div class="col-md-4 col-sm-12 col-xs-12">
						                  <img src="<?php echo base_url('assets/images/blogs/'.$most_blog->blog_cover)?>" class="img-responsive" alt="<?php echo $most_blog->blog_title;?>">
						                </div>
						                <div class="col-md-8 plrz">
						                  <h4 >
						                    <a href="<?php echo site_url('blogs/readblog/'.$most_blog->b_id)?>" class="lmv">
						                      <span class="spancolor"><?php echo $count;?>.</span>
						                      <span class="spanyellow">
						                        <?php echo word_limiter(
						                            $most_blog->blog_title,
						                            10
						                          ) ?>
						                      </span>
						                    </a>
						                  </h4>
						                    <div class="nds">
						                     <?php echo word_limiter(
						                          base64_decode($most_blog->blog),
						                          10
						                        ) ?>
						                    <a href="<?php echo site_url('blogs/readblog/'.$most_blog->b_id)?>">
						                      <span class="spanyellow">Readmore</span>
						                    </a>
						                    </div>
						                </div>
						              </div>
						            <hr>
						          <?php $count++;endforeach; ?>
						          <?php else: ?>
						          <?php endif; ?>
						  </div>						
					</div>
					<div class="widget tags">
						<h4>Tags</h4>
						<?php $tags = get_blog_tags();
			              if($tags->num_rows() > 0): 
            			?>
		            		 <?php foreach($tags->result() as $tag): ?>
								<a href="<?php echo site_url('blogs/tagged').'?t='.$tag->tag_name?>"> <?php echo $tag->tag_name?></a>
							<?php endforeach; ?>
						<?php endif; ?>
					</div><!-- End widget -->
				</div><!-- end siedebar  -->
			</div><!-- end  col left -->
		  	
		</aside>
		<section class="col-md-8 col-sm-12 col-xs-12">
			<div class="col-right">
		    	<?php if($allblogs): ?>
		    		<?php foreach($allblogs as $blog): ?>
			    	<div class="post">
			           	<h2 class="bhnd">
				           	<a href="<?php echo base_url('blogs/readblog/'.$blog->b_id.'/'.word_limiter(url_title($blog->blog_title,'dash', true),20,'...')) ?>">
				           		<?php echo word_limiter($blog->blog_title,20,'...'); ?>
				           	</a>
			           	</h2>
			           	<a href="<?php echo base_url('blogs/readblog/'.$blog->b_id.'/'.word_limiter(url_title($blog->blog_title,'dash', true),20,'...')) ?>">
			           		<img src="<?php echo base_url('assets/images/blogs/'.$blog->blog_cover) ?>" alt="<?php echo $blog->blog_title; ?>" class="img-responsive">
			           	</a>
				        <div class="post_info clearfix">
			               	<div class="post-left">
			                    <ul>
			                    	<li>
			                    		<i class="icon-calendar-empty"></i>On 
			                    		<span>	
			                    			<?php echo date('d M Y',strtotime($blog->b_created))?>
			                    		</span>
			                    	</li>
			                        <li>
			                        	<i class="icon-user"></i>By 
			                        	<a href="#"><?php echo $blog->fname.nbs(1).$blog->lname; ?></a>
			                        </li>
			                        <li>
			                        	<i class="icon-tags"></i>Tags 
			                        	<?php 
			                        		$b_tags = get_comments($blog->b_id);
			                        		if($b_tags->num_rows() > 0):
			                        			foreach($b_tags->result() as $blog_tag):
			                        	?>
				                        	<a href="<?php echo site_url('blogs/tagged').'?t='.$blog_tag->tag_name?>"><?php echo $blog_tag->tag_name; ?></a> 
			                        	<?php endforeach; ?>
			                        	<?php endif; ?>
			                        	<?php ?>
			                        </li>
									 <li>
                                  		  Views <strong><?php echo blog_views($blog->b_id); ?></strong>
                               		 </li>			                        
			                    </ul>
			               	</div>
			               	<div class="post-right">
			               		<i class="icon-comments"></i>
			               		<a href="#"><?php echo totsl_blog_comment($blog->b_id); ?> </a>Comments
			               	</div>  
			            </div>                                
			            <div class="bl_cnt">
			            	<?php echo word_limiter(base64_decode($blog->blog),60,'...') ?>
			            </div>
		           		<p>
		           			<a href="<?php echo site_url('blogs/readblog/'.$blog->b_id)?>" class="button_medium">Read more</a>
		           		</p>
				    </div>
				  	<?php endforeach;?>
				<?php else: ?>
				<?php endif ?>
				<hr>
	           	<div class="text-center">
		          	<?php echo $links?>
	          	</div>
		   	</div>
		</section> 
	</div><!-- end row-->
</div> <!-- end container-->
  