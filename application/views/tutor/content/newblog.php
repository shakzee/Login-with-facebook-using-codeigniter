<div class="content-wrapper">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 m_cont_top">
			<div class="form-group">
				<h1>Post a New Blogs</h1>
			</div>
		
			<div class="form-group">
				<?php c_error();?>
			</div>
			<?php
				$farr = array('id' => 'x_b_s' ); 
				echo form_open_multipart('tutor/adddblog',$farr);
			?>
			<div class="form-group">
				<?php
					$catname = array(
									'name' =>'b_name', 
									'class' =>'form-control', 
									'placeholder' =>'Blog Title', 
									'id' =>'b_name', 
									); 
					echo form_input($catname);
					?>
			</div>
			<div class="form-group">
				<?php
					if($b_cat->num_rows() > 0 ):
					foreach($b_cat->result() as $bcategory):
					$blog_category[$bcategory->bc_id] = $bcategory->bc_name
				?>
				<?php endforeach; ?>
				<?php
					echo form_dropdown('category',$blog_category,'','class="form-control"');
				?>
				<?php else: ?>
					category not found.
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php
					$blog = array(
									'name' =>'blog', 
									'class' =>'cleditor form-control edit', 
									'placeholder' =>'Blog', 
									'id' =>'edit', 
									'rows'=>'3'
									); 
				echo form_textarea($blog);
				?>
			</div>
			<div class="form-group">
				<input type="text"  id="tgs" placeholder="Add Tags" class="form-control">
			</div>

			<div class="control-group">
				<ul id="i_gz_x" class="list-inline">
					
				</ul>
			</div>
			
			<div class="col-md-12">
                <div class="cropping">
                    <div class="bdppic">
                        <div class="canmy" style="display:none">

                        </div>

                        <input type="hidden" id="x" name="x" />
                        <input type="hidden" id="y" name="y" />
                        <input type="hidden" id="w" name="w" />
                        <input type="hidden" id="h" name="h" />
                        <div class="form-group">
                            <input type="file" id="imgInp" name="bdp">
                            <input type="hidden" id="testimage" name="testimage" value="male.png">
                            <div id="croppfed"></div>
                        </div>
                    </div>  
                </div>
            </div>
			<div class="f_igx form-group">
					
			</div>
			
			<div class="control-group">
				<button  class="btn btn-primary" type="submit">Post Blog</button>
			</div>
		<?php echo form_close();?>
		</div>
	</div>
</div>

