</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
<header class="main-header">

        <!-- Logo -->
        <a href="<?php echo site_url('home');?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b>Zee</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Shakzee</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('assets/images/users/'.$this->session->userdata('u_dp')); ?>" class="user-image" alt="<?php echo $this->session->userdata('fname').nbs(2).$this->session->userdata('lname')?>">
                  <span class="hidden-xs"><?php echo $this->session->userdata('fname')?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/images/users/'.$this->session->userdata('u_dp')); ?>" class="img-circle" alt="<?php echo $this->session->userdata('fname').nbs(2).$this->session->userdata('lname')?>">
                    <p>
                      <?php echo $this->session->userdata('fname').nbs(2).$this->session->userdata('lname')?>
                      <small>
                        <strong>Join Date: </strong>
                        <?php echo date('d M Y',strtotime($this->session->userdata('u_created')))?>
                      </small>
                    </p>
                  </li>
                 
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo site_url('tutor/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </nav>
      </header>