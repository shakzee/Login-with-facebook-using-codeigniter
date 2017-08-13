<div class="content-wrapper">
	<div class="col-md-8 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<?php if(count($all_cat) > 0): ?>
			<table class="table table-bordered">
				<?php foreach($all_cat as $category):?>
					<tr class="t_cx<?php echo $category->c_id?>">
						<td>
							<?php echo $category->c_id?>
						</td>
						
						<td>
							<?php echo $category->c_name?>
						</td>
						<td>
							<?php echo $category->c_created?>
						</td>
						<td>
							<a href=# class="btn btn-primary">
								View
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/editcategory/'.$category->c_id); ?>" class="btn btn-primary">
								edit
							</a>
						</td>
						<td>
							<a href="javascript:void(0)" class="btn btn-primary dcd" data-text="<?php echo $this->encrypt->encode($category->c_id)?>" data-id="<?php echo $category->c_id?>">
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
