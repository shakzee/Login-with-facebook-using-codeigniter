<div class="content-wrapper">
	<div class="col-md-10 col-md-offset-1 m_cont_top">
		<div class="form-group">
			<?php c_error();?>
		</div>
		<div class="form-group">
			<?php
				echo form_open('tutor/add_blog_category');
			?>
			<label><span class="red">*</span></label>

			<?php
				$catname = array(
								'name' =>'category', 
								'class' =>'form-control', 
								'placeholder' =>'Category Name', 
								'id' =>'xp89', 
								); 
				echo form_input($catname);
			?>
		</div>
		<div class="form-group">
			<?php echo form_submit('addcategoey','Add Category','class="btn btn-primary"');?>
		</div>
		<?php form_close();?>
	</div>
</div>