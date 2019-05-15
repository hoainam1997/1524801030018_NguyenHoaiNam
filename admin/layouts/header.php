<?php session_start() ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="<?= modules('dashboard') ?>" class="logo">
  
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Trang Quản Trị</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
       
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="hidden-xs">xin chào: <?=   $_SESSION['admin'] ?></span>
            </a>
            <ul class="dropdown-menu">

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= base_url() ?>admin/logout.php" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>