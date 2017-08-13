<div class="container">
	<div class="mcint">
		<?php if($serach_blogs): ?>
			<div class="row ssct91">
				<h2 class="sact99">Videos | <?php echo count($serach_blogs);?></h2>
					<?php //var_dump($videos); ?>
					<?php foreach($serach_blogs as $blogs):?>
						<div class="col-md-3">
							<div class="thumbnail">
						      <a href="<?php echo site_url('blogs/readblog/'.$blogs->b_id.'/'.$blogs->blog_title);?>">
							      <img src="<?php echo base_url('assets/images/blogs/'.$blogs->blog_cover)?>" alt="<?php echo $blogs->blog_title?>">
							  </a>
						     
						      <div class="caption">
						        	 <a href="<?php echo site_url('blogs/readblog/'.$blogs->b_id.'/'.$blogs->blog_title);?>">
						        	<h4 class="scpr"><?php echo $blogs->blog_title?></h4>
						        	</a>
						        	
						        	<div class="scdshr">
											 <?php echo strip_tags(base64_decode($blogs->blog)),20,' .... '.anchor('onlinecourses/detail/'.$blogs->b_id)?>
									</div>
						      </div>					
						   </div>
						</div>
					<?php endforeach;?>
				<?php echo $links;?>
			</div>
			<?php else: ?>
				<div class="alert alert-warning" role="alert">
					<strong class="rnfer90"><?php echo $key?></strong> not found.
				</div>

		<?php endif;?>
	</div>
</div>