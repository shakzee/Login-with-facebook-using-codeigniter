<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="<?php echo site_url('user')?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            
            
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('user/settings'); ?>">
                  <i class="fa fa-circle-o"></i>Settings</a>
                </li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Message on shakzee</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('user/message'); ?>">
                  <i class="fa fa-circle-o"></i>Add Message</a>
                </li>
                <li>
                  <a href="<?php echo site_url('user/edit_message'); ?>">
                  <i class="fa fa-circle-o"></i>Edit Message</a>
                </li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>