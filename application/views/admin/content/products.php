<div class="content-wrapper">
	<div class="col-md-8 col-md-offset-2" style="margin-top:100px;">
		<?php if($all_products): ?>
			<table class="table table-bordered">
				<th>ID</th>
				<th>Category Name</th>
				<th>Product Name</th>
				<th>Created</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>

				<?php foreach($all_products as $category):?>
					<tr class="dp<?php echo $category->p_id?>">
						<td>
							<?php echo $category->p_id?>
						</td>
						<td>
							<?php echo $category->c_name?>
						</td>
						<td>
							<?php echo $category->p_name?>
						</td>
						<td>
							<?php echo $category->p_created?>
						</td>
						<td>
							<a href="" class="btn btn-primary">
								View
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/productedit/'.$category->p_id)?>" class="btn btn-primary">
								edit
							</a>
						</td>
						<td>
							<a href="javascrip:void(0)" class="btn btn-primary dcp" data-text="<?php echo $this->encrypt->encode($category->p_id)?>" data-id="<?php echo $category->p_id?>">
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
