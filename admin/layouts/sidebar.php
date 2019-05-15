<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree" style="margin-top: 40px">
      <li >
        <a href="<?= modules('dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>

        </a>

      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Nhóm sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= modules('nhomsanpham/add.php') ?>"><i class="fa fa-circle-o"></i> Thêm nhóm sản phẩm</a></li>
          <li><a href="<?= modules('nhomsanpham')?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Loại sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= modules('loaisanpham/add.php') ?>"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
          <li><a href="<?= modules('loaisanpham') ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Quản lý sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= modules('sanpham/add.php') ?>"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
          <li><a href="<?= modules('sanpham') ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Đơn hàng</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Khách
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="<?= modules('donhang/khach/index.php') ?>"><i class="fa fa-circle-o"></i> Đơn hàng</a></li>
              <li>
                <a href="<?= modules('donhang/khach/dagiaiquyet.php') ?>"><i class="fa fa-circle-o"></i> Đơn hàng đã giải quyết
                  
                </a>
                
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Thành viên
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="<?= modules('donhang/thanhvien/index.php') ?>"><i class="fa fa-circle-o"></i> Đơn hàng</a></li>
              <li>
                <a href="<?= modules('donhang/thanhvien/dagiaiquyet.php') ?>"><i class="fa fa-circle-o"></i> Đơn hàng đã giải quyết
                 
                </a>
                
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li><a href="<?= modules('thanhvien/index.php') ?>"><i class="fa fa-user"></i> <span>Thành viên</span></a></li>

      <li><a href="<?= modules('lienhe/index.php') ?>"><i class="fa fa-phone"></i> <span>Liên hệ</span></a></li>
      <li>
        <a href="../calendar.html">
          <i class="fa fa-calendar"></i> <span>Lịch</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow"><?php echo date("Y") ?></small>

            <small class="label pull-right bg-red"><?php echo date("m") ?></small>
            <small class="label pull-right bg-blue"><?php echo date("d") ?></small>
          </span>
        </a>
      </li>


      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>