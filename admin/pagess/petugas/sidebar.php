<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <!-- <a href="dashboard.php" class="nav-link">Home</a> -->
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i>Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="../../" class="dropdown-item dropdown-footer">LogOut</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="dashboard.php" class="d-block">AbMas</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="ti.php" class="nav-link">
                                <p>Teknik Informatika</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="ti.php" class="nav-link">
                                  Pendidikan Pancasila
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="ppkni.php" class="nav-link">PPKN</a>
                              </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="tm.php" class="nav-link">
                                <p>Teknik Mesin</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                              <li class="nav-item">

                                <a href="tm.php" class="nav-link">
                                  Pendidikan Pancasila
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="ppkn.php" class="nav-link">PPKN</a>
                              </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="tme.php" class="nav-link">
                                <p>Teknik Mekatronika</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="tme.php" class="nav-link">
                                  Pendidikan Pancasila
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="Ppkne.php" class="nav-link">PPNK</a>
                              </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>