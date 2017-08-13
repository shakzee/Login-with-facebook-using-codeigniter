<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="col-right">
			<?php if($notifications): ?>
				<?php foreach($notifications as $noti): ?>
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
				<?php endforeach; ?>
				<br><br>
				<div class="text-center">
					<ul class="pagination custmpag">
						<li>
							<?php echo $links;?>
						</li>
					</ul>
				  </div>
			<?php else: ?>
				Notification not available
			<?php endif; ?>
		</div>
	</div>
</div>