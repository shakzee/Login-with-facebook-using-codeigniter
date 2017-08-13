<div class="content-wrapper">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 m_cont_top">
			<?php c_error();?>
			<?php if($all_messages): ?>
				<table class="table table-bordered">
					<th>ID</th>
					<th>admin Name</th>
					<th>Blog title</th>
					<th>Blog Created</th>
					<th>View</th>
					<th>Delete</th>
					<?php foreach($all_messages as $message):?>
						<tr class="spd<?php echo $message->c_id?>">
							<td>
								<?php echo $message->c_id?>
							</td>
							<td>
								<?php echo $message->fname . $message->lname?>
							</td>
							<td>
								<?php echo $message->m_title?>
							</td>

							<td>
								<?php echo $message->m_created?>
							</td>
							<td>
								<a href="javascript:void(0)" class="btn btn-primary vmsgx90" data-id="<?php echo $message->c_id?>">
									View
								</a>
							</td>
							<td>
								<a href="javascript:void(0)" class="btn btn-primary ablog" data-text="<?php echo $this->encrypt->encode($message->c_id)?>" data-id="<?php echo $message->c_id?>">
									delete
								</a>
							</td>
							<input type="hidden" class="shmsg<?php echo $message->c_id?>" value="<?php echo $message->message?>" >
						</tr>
					<?php endforeach; ?>
				</table>
				<?php echo $links;?>
			<?php else: ?>
				<?php no_data('alert-danger','There is no data to display');?>
			<?php endif ?>
		</div>
	</div>
</div>
