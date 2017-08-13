

<div class="content-wrapper">
	<div class="col-md-6 col-md-offset-2" style="margin-top:100px;">
		<?php c_error();?>
		<div class="form-group">
			<?php 
				echo form_open_multipart('tutor/addblog');
				$coursename = array(
						'name' =>'blog_title',
						'class'=>'form-control',
						'placeholder'=>'Blog title',
						'id'=>'xp_8',
						'value'=>''
					 );
				echo form_input($coursename);
			?>
		</div>

		<div class="form-group">
			<?php 
				$blog = array(
						'name' =>'blog',
						'class'=>'form-control',
						'placeholder'=>'Blog',
						'id'=>'cd_9',
						'value'=>''
					 );
				echo form_textarea($blog);
			?>
		</div>
		<div  class="form-group">
			<?php
				$blog_tags = array(
						'name' =>'blog_tags',
						'class'=>'form-control',
						'placeholder'=>'Blog title',
						'id'=>'tgs',
						'value'=>''
					 );
				echo form_input($blog_tags);
			?>
		</div>
		<div class="form-group" >
				<ul id="i_gz_x" class="inline">
					
				</ul>
			</div>
		<div class="form-group">
			<?php 
				$att = array(
						'name' =>'blog_cover',
						'class'=>'tp_3'
					 );
				echo form_upload($att);
			?>
		</div>
		<div class="form-group">
			<?php 
				echo form_submit('AddProduct','AddProduct','class="btn btn-primary"');
				echo form_close();
			?>
		</div>

	</div>
</div>