

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
			<li role="presentation" class="<?php if(!empty($cl_all)){echo $cl_all;} ?>">
				<a href="<?php echo site_url('search?q='.$key);?>">All</a>
			</li>
			  <li role="presentation" class="<?php if(!empty($cl_videos)){echo $cl_videos;} ?>">
			  	<a href="<?php echo site_url('search/videos?q='.$key);?>">Videos</a>
			  </li>
			  <li role="presentation" class="<?php if(!empty($cl_courses)){echo $cl_courses;} ?>">
			  	<a href="<?php echo site_url('search/courses?q='.$key);?>">Courses</a>
			  </li>
			  <li role="presentation" class="<?php if(!empty($cl_pro_courses)){echo $cl_pro_courses;} ?>">
			  	<a href="<?php echo site_url('search/onlinecourses?q='.$key);?>">Online Courses</a>
			  </li>
			  <li role="presentation" class="<?php if(!empty($cl_blogs)){echo $cl_blogs;} ?>">
			  	<a href="<?php echo site_url('search/blogs?q='.$key);?>">blogs</a>
			  </li>
			</ul>			
		</div>
	</div>
</div>
