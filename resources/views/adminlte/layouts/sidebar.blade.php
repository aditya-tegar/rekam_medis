<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><img src="{{ ('../../images/logo.jpg') }}" width="130" height="70">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Jadwal dan Visi & Misi </p>
                    </a>
                    
                    @if(Auth::user()->role->id == 1 || Auth::user()->role->id == 2 || Auth::user()->role->id == 3)
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('jadwal.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Jadwal Praktek</p>
                            </a>
                        </li>
                    </ul>
                    @endif
                </li>

                

                    
                

                @if(Auth::user()->role->id == 4);
                <li class="nav-header">MANAGEMENT FARMASI</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            DATA FARMASI
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    
                    <ul class="nav nav-treeview">
                        @if(Auth::user()->role->id == 4);
                        <li class="nav-item">
                            <a href="{{ route('farmasi.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Obat</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                

                @if(Auth::user()->role->id == 2 || Auth::id() == 3)
                <li class="nav-header">MANAGEMENT DATA REKAM MEDIS</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            DATA REKAM MEDIS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    
                 <ul class="nav nav-treeview">
                        @if(Auth::user()->role->id == 2)
                        <li class="nav-item">
                            <a href="{{ route('pasien.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Pasien</p>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->role->id == 3);
                        <li class="nav-item">
                            <a href="{{ route('pasien.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Diagnosa Pasien </p>
                            </a>
                        </li>
                        @endif
                    
                        @if(Auth::user()->role->id == 2)
                        <li class="nav-item">
                            <a href="{{ route('laporan') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Laporan Rekam Medis</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif

                

                @if(Auth::user()->role->id == 1)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>User </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dokter.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Data Dokter</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('perawat.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Data Perawat</p>
                            </a>
                        </li>
                    </ul>

                    
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>