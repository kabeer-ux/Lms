  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('hod/Home/index'); ?>" class="brand-link">
      <img src="<?php echo base_url('assets/media/logo/icon2.png'); ?>" alt="hodLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HOD hod</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/media/faculty/'.$show_hod[0]->pic); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('hod/Home/index'); ?>" class="d-block"> <?php echo $show_hod[0]->name ?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="<?php echo base_url('hod/Home/index'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('hod/Hod_Session/index'); ?>" class="nav-link">
              <i class="nav-icon fa fa-bullhorn" aria-hidden="true"></i>
              <p>
                Session
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('hod/Term/index'); ?>" class="nav-link">
              <i class="nav-icon fa fa-book" aria-hidden="true"></i>
              <p>
                Term
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('hod/Hod_class/index'); ?>" class="nav-link">
              <i class="nav-icon fa fa-book" aria-hidden="true"></i>
              <p>
                Class
              </p>
            </a>
          </li>
     

          
            
        

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>