<div class="content-wrapper">
	<div class="col-md-10 col-md-offset-1 m_cont_top">
		<?php c_error();?>
		<?php if($all_blog_categories): ?>
			<table class="table table-bordered">
				<th>ID</th>
				<th>admin Name</th>
				<th>Category Name</th>
				<th>Category Created</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>
				<?php foreach($all_blog_categories as $blog_cat):?>
					<tr class="spd<?php echo $blog_cat->bc_id?>">
						<td>
							<?php echo $blog_cat->bc_id?>
						</td>
						<td>
							<?php echo $blog_cat->fname?>
						</td>

						<td>
							<?php echo $blog_cat->bc_name?>
						</td>
						<td>
							<?php echo $blog_cat->bc_created?>
						</td>
						<td>
							<a href="" class="btn btn-primary">
								View
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('tutor/edit_blog_category/'.$blog_cat->bc_id)?>" class="btn btn-primary">
								edit
							</a>
						</td>
						<td>
							<a href="javascrip:void(0)" class="btn btn-primary bcat" data-text="<?php echo $this->encrypt->encode($blog_cat->bc_id)?>" data-id="<?php echo $blog_cat->bc_id?>">
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