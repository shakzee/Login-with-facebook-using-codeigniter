
<div class="content-wrapper">
	<div class="row">
		<div class="col-md-7 m_cont_top " style="padding-left: 50px;">
				<div class="form-group">
					<?php c_error();?>
				</div>
				<?php
					$farr = array('id' => 'x_b_s' ); 
					echo form_open_multipart('tutor/updatedblog',$farr);
				?>
				<input type="hidden" name="yup" value="<?php echo $this->encrypt->encode($dblog[0]['b_id']); ?>">

				<input type="hidden" name="yig" value="<?php echo $this->encrypt->encode($dblog[0]['b_id']); ?>">

				<div class="form-group">
					<?php
						$catname = array(
										'name' =>'b_name', 
										'class' =>'form-control', 
										'placeholder' =>'Blog Title', 
										'id' =>'b_name', 
										'value'=>$dblog[0]['blog_title']
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
						echo form_dropdown('category',$blog_category,$dblog[0]['bcat_id'],'class="form-control"');
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
										'placeholder' =>'Blog Title', 
										'id' =>'edit', 
										'rows'=>'3',
										'value'=>base64_decode($dblog[0]['blog'])
										); 
					echo form_textarea($blog);
					?>
				</div>
				<div class="form-group">
					<input type="text"  id="tgs" placeholder="Add Tags" class="form-control">
				</div>
				

				<div class="col-md-12">
	                <div class="cropping">
	                    <div class="bdppic">
	                        <div class="canmy" style="display:none">

	                        </div>
	                        <div class="form-group">
	                            <input type="file" id="imgInp" name="bdp">
	                            <input type="hidden" id="testimage" name="testimage" value="male.png">
	                            <div id="croppfed"></div>
	                        </div>
	                    </div>  
	                </div>
	            </div>

				<div class="control-group" >
					<ul id="i_gz_x" class="list-inline">
						<?php if(count($blog_tags) > 0): ?>
							<?php foreach($blog_tags->result() as $btag): ?>
								<li class="<?php echo $btag->tag_name?> lisbtags<?php echo $btag->t_id?>">
									<?php echo $btag->tag_name?>
									<a href="javascript:void(0)" data-id="<?php echo $btag->t_id?>" data-text="<?php echo $this->encrypt->encode($btag->t_id); ?>" class="sbtags">
										<i class="fa fa-times"></i>
									</a>
									</li>					
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
				
				<div class="f_igx form-group">
						
				</div>
				
				<div class="control-group">
					<button type="submit" class="btn btn-primary">Post Blog</button>
				</div>
			<?php echo form_close();?>
			</div>
			<div class="col-md-4 m_cont_top">
				<img src="<?php echo base_url('assets/images/blogs/'.$dblog[0]['blog_cover']) ?>" class="img-responsive">
			</div>
	</div>
</div>


