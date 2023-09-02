<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index2.html" class="brand-link">
      <img src="../../dist/img/powerball.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Powerball Fitness</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
             </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="updatemembers.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Members
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="member_register.php" class="nav-link">
                  
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="updatemembers.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Members</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-receipt"></i>
              <p>
                Payments
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="monthly_payment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="updatepayment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="payment_info.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Report</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="attendance.php" class="nav-link">
              <i class="nav-icon fas fa-hand"></i>
              <p>
                Attendance
               
               
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="remindersms_info.php" class="nav-link">
              <i class="nav-icon fas fa-message"></i>
              <p>
                Reminder SMS
               </p>
            </a>
            
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>