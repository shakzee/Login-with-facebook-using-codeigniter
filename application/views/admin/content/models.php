<div class="content-wrapper">
	<div class="col-md-8 col-md-offset-2 m_cont_top">
		<?php c_error();?>
		<?php if($all_models): ?>
			<table class="table table-bordered">
				<th>ID</th>
				<th>Product Name</th>
				<th>Model Name</th>
				<th>Created</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>

				<?php foreach($all_models as $model):?>
					<tr class="mdp<?php echo $model->m_id?>">
						<td>
							<?php echo $model->m_id?>
						</td>
						<td>
							<?php echo $model->p_name?>
						</td>
						<td>
							<?php echo $model->m_name?>
						</td>
						<td>
							<?php echo $model->m_created?>
						</td>
						<td>
							<a href="" class="btn btn-primary">
								View
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/editmodel/'.$model->m_id)?>" class="btn btn-primary">
								edit
							</a>
						</td>
						<td>
							<a href="javascrip:void(0)" class="btn btn-primary mdcp" data-text="<?php echo $this->encrypt->encode($model->m_id)?>" data-id="<?php echo $model->m_id?>">
								delete
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			<?php echo $links;?>
		<?php else: ?>
			<?php no_data('alert-danger','There is no data to display');?>
		<?php endif ?>
	</div>
</div>
