<aside class="main-sidebar sidebar-light-secondary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: #1E88E5">
        <img src="{{ asset('gambar/reka.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #64B5F6">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/department" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Department
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/shift" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Shift
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/karyawan" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Karyawan
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="/lokasi" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Lokasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/report" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Report
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Presensi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/presensi-masuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presensi Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/presensi-keluar" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presensi Keluar</p>
                            </a>
                        </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
