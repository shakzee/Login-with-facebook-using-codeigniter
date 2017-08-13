<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?php echo site_url('tutor')?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            
            
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Courses</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('tutor/newcourse'); ?>">
                  <i class="fa fa-circle-o"></i>Add Course</a>
                </li>
                <li>
                   <a href="<?php echo site_url('tutor/courses'); ?>">
                  <i class="fa fa-circle-o"></i>Views Courses</a>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Videos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('tutor/newvideo'); ?>">
                  <i class="fa fa-circle-o"></i>Add Course</a>
                </li>
                <li>
                   <a href="<?php echo site_url('tutor/videos'); ?>">
                  <i class="fa fa-circle-o"></i>Views Videos</a>
                </li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Pro Courses</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('tutor/newprocourse'); ?>">
                  <i class="fa fa-circle-o"></i>Add Pro Course</a>
                </li>
                <li>
                   <a href="<?php echo site_url('tutor/procourses'); ?>">
                  <i class="fa fa-circle-o"></i>Views Videos</a>
                </li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Blogs</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('tutor/newcategory'); ?>">
                  <i class="fa fa-circle-o"></i>newcategory</a>
                </li>
                <li>
                   <a href="<?php echo site_url('tutor/all_blog_categories'); ?>">
                  <i class="fa fa-circle-o"></i>All Blog Categories</a>
                </li>
                <li>
                   <a href="<?php echo site_url('tutor/newblog'); ?>">
                  <i class="fa fa-circle-o"></i>New Blog</a>
                </li>

                <li>
                   <a href="<?php echo site_url('tutor/all_blogs'); ?>">
                   <i class="fa fa-circle-o"></i>All Blog</a>
                </li>

              </ul>
            </li>

            <?php if(admin_id()): ?>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Messages</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('tutor/all_messages'); ?>">
                  <i class="fa fa-circle-o"></i>All Messages</a>
                </li>
                
              </ul>
            </li>
            <?php endif; ?>
            <?php if(admin_id()): ?>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Messages</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('tutor/user_messages'); ?>">
                  <i class="fa fa-circle-o"></i>Message Request</a>
                </li>
                
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>