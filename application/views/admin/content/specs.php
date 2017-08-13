<div class="content-wrapper">
	<div class="col-md-8 col-md-offset-2 m_cont_top">
		<?php c_error();?>
		<?php if($all_specs): ?>
			<table class="table table-bordered">
				<th>ID</th>
				<th>Model Name</th>
				<th>Spec Name</th>
				<th>Created</th>
				<th>View</th>
				<th>Edit</th>
				<th>Spec Values</th>
				<th>Delete</th>

				<?php foreach($all_specs as $spec):?>
					<tr class="spd<?php echo $spec->s_id?>">
						<td>
							<?php echo $spec->s_id?>
						</td>
						<td>
							<?php echo $spec->m_name?>
						</td>
						<td>
							<?php echo $spec->sp_name?>
						</td>
						<td>
							<?php echo $spec->sp_created?>
						</td>
						<td>
							<a href="" class="btn btn-primary">
								View
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/editspec/'.$spec->s_id)?>" class="btn btn-primary">
								edit
							</a>
						</td>
						<td>
							<a href="javascrip:void(0)" class="btn btn-primary spv" data-text="<?php echo $this->encrypt->encode($spec->s_id)?>" data-id="<?php echo $spec->s_id?>">
								View
							</a>
						</td>
						<td>
							<a href="javascrip:void(0)" class="btn btn-primary spcd" data-text="<?php echo $this->encrypt->encode($spec->s_id)?>" data-id="<?php echo $spec->s_id?>">
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
all_specs