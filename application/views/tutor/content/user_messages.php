<div class="content-wrapper">
	<div class="col-md-11 m_cont_top tbbc">
		<div class="form-group fdap">
			<?php c_error();?>
			<h3>All Orders</h3>
		</div>
		<?php if($user_messages): ?>
			<form action="<?php echo site_url('tutor/update_user_message')?>" method="post" class="blfmd">
			<div class="row">
				<div class="col-md-4">
					<div class="from-group">
					<label>Mass Action</label>
						<select class="form-control" name="action" id="adction_090">
							<option>Action</option>
							<option value="accept">Accept</option>
							<option value="reject">Reject</option>
						</select>
					</div>
				</div>
				<div class="admr col-md-4 xyp">
					<div class="form-group mmac">
					</div>
				</div>
				<div class="ncln">
					
				</div>
			</div>
			<table class="table table-bordered ctbl">
				<th>
					<input type="checkbox" id="checkall_07">
				</th>
				<th>ID</th>
				<th>User Name</th>
				<th>Message</th>
				<th>Date</th>
				<th>Status</th>
				<?php foreach($user_messages as $u_message):?>
					<tr class="dp<?php echo $u_message->m_id?>">
						<td><input type="checkbox" class="al_cb_09" name="blkapl[]" value="<?php echo  $u_message->m_id?>"></td>
						</td>
						<td>
							<?php echo  $u_message->m_id?>
						</td>
						<td>
							<?php echo  $u_message->fname.$u_message->lname?>
						</td>
						<td>
							<?php echo  $u_message->message?>
						</td>
						<td>
							<?php echo  $u_message->m_created?>
						</td>							
						<td>
							<?php echo  $u_message->m_status?>
						</td>							
					</tr>
				<?php endforeach; ?>
			</table>
			<?php echo $links;?>
			</form>
		<?php else: ?>
			<?php no_data('alert-danger','There is no data to display');?>
		<?php endif ?>
	</div>
</div>
