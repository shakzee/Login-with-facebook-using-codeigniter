
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<h3>Demo Pagination in Codeigniter</h3>
				<?php if ($users): ?>
					<table class="table table-dashed">
						<?php foreach($users as $myuser): ?>
							<tr>
								<td>
									<?php echo $myuser->id;?>
								</td>
								<td>
									<?php echo $myuser->fname;?>
								</td>
								<td>
									<?php echo $myuser->lname;?>
								</td>
								<td>
									<?php echo $myuser->email;?>
								</td>
								<td>
									<?php echo $myuser->gender;?>
								</td>
							</tr>
						<?php endforeach; ?>
						</table>
					<?php echo $links;?>
				<?php else: ?>
				<?php endif; ?>
		</div>
	</div>
</div>