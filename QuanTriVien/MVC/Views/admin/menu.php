<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link">
      <img src="/project/public/assets/image/Logo/logo_luxury.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Empire Luxury</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/project/public/assets/image/Logo/Anh.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] === true): ?>
          <a href="#" class="d-block"><span>Xin chào, <?=$_SESSION['username']['Tendangnhap']?></span></a>
        <?php endif; ?>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
          <li class="nav-item menu-open">
            <a href="http://localhost:3000/project/QuanTriVien/MVC/index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php } ?>
          <!-- Quản Lí Tài Khoản NGười Dùng -->
          <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Quản Lí Tài Khoản
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?url=nguoidung&operation=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Người Dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?url=nguoidung" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt Kê Người Dùng</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <!-- Quản Lí Sản Phẩm -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Quản Lí Sản Phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?url=sanpham&operation=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?url=sanpham" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt Kê Sản Phẩm</p>
                </a>
              </li>
            </ul>
            <!-- Quản Lí Thương Hiệu -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <p>
                    Quản Lí Thương Hiệu
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?url=thuonghieu&operation=add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Thương Hiệu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?url=thuonghieu" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Liệt Kê Thương Hiệu</p>
                  </a>
                </li>
              </ul>

              <!-- Quản Lí loại sản phẩm -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>
                      Quản Lí Loại Sản Phẩm
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="?url=loaisanpham&operation=add" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Loại Sản Phẩm</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="?url=loaisanpham" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liệt Kê Loại Sản Phẩm</p>
                    </a>
                  </li>
                </ul>
                <!-- Phê duyệt Hoá Đơn -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <p>
                        Phê Duyệt Hoá Đơn
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="?url=hoadon" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Liệt Kê Hoá Đơn</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="?url=hoadon&id=1" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Hoá Đơn Đã Phê Duyệt</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="?url=hoadon&id=0" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Hoá Đơn Chưa Phê Duyệt</p>
                        </a>
                      </li>
                  </ul>
                  <!-- Quản lí danh mục -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                          Quản Lí Danh Mục
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="?url=danhmuc&operation=add" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Thêm Danh Mục</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="?url=danhmuc" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Liệt Kê Danh Mục</p>
                        </a>
                      </li>
                    </ul>
                    <!-- Quản Lí Banner -->
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <p>
                            Quản Lí Banner
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                        <!-- Quản lí bình luận -->
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <p>
                                Quản Lí Bình Luận
                              <i class="fas fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="?url=binhluan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liệt Kê Bình Luận</p>
                              </a>
                            </li>
                          </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>