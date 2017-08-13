</head>
<body>
<?php if(is_logedin()){
	$userid = user_id();
	}
?>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]--> <!-- Border radius fixed IE10-->
<header>
    <div class="container">
	    <div class="row">
	        <div class="col-md-4 col-sm-4" id="logo">
	        	<a href="<?php echo base_url('') ?>">
	        		<img src="<?php echo base_url('assets/images/250x60.png') ?>" alt="Logo">
	        	</a>
	        </div>
	        <div class="col-md-8 col-sm-8">
	            <div id="phone" class="hidden-xs">
	            	<strong>+923337276335</strong>
	            	Shakzee
	            </div>
	            <!-- <div id="menu-top">
	                <ul>
	                    <li>
	                    	<a href="<?php echo base_url('') ?>" title="Home">Home</a> | 
	                    </li>
	                    <li>
	                    	<a href="<?php echo base_url('contact') ?>" title="Contact">Contact</a>
	                    </li>
	                </ul>
	            </div> -->
	        </div><!-- End col-md-8-->
	    </div><!-- End row-->
    </div><!-- End container-->
</header><!-- End Header-->

<nav>
<div class="megamenu_container">
	<a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->
    <ul class="megamenu megamn_hr">
	    <li>
        	<a href="http://www.shakzee.com/" class="nodrop-down">
        		Home
        	</a>
        </li>
        
        <li>
        	<a href="http://www.shakzee.com/blogs" class="nodrop-down">
        		Blog
        	</a>
        </li>

        <li>
        	<a href="http://www.shakzee.com/courses" class="nodrop-down">
        		Courses
        	</a>
        </li>

        <li>
        	<a href="http://www.shakzee.com/onlinecourses" class="nodrop-down">
        		Online Courses
        	</a>
        </li>



    </ul><!-- End Mega Menu -->
</div>
</nav><!-- /navbar -->
