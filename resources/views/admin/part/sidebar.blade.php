<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Covid 19 LAMBAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('admin/dashboard')}}"
                        class="nav-link {{Request::segment(2)=="dashboard"?'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/berita')}}" class="nav-link {{Request::segment(2)=="berita"?'active':''}}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/tentang')}}" class="nav-link {{Request::segment(2)=="tentang"?'active':''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Tentang Covid 19
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/covid')}}" class="nav-link {{Request::segment(2)=="covid"?'active':''}}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Data Covid
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{url('admin/infografik')}}"
                        class="nav-link {{Request::segment(2)=="infografik"?'active':''}}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            InfoGrafik
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview ">
                    <a href="#"
                        class="nav-link {{Request::segment(2)=="pers"?'active':''}} {{ Request::segment(2)=="dokumen"?'active':''}}">
                        <i class="nav-icon fas fa-newspaper "></i>
                        <p>
                            Publikasi
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/pers')}}"
                                class="nav-link {{Request::segment(2)=="pers"?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Siaran Pers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/dokumen')}}"
                                class="nav-link {{Request::segment(2)=="dokumen"?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokumen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#"
                        class="nav-link {{Request::segment(2)=="footerimage"?'active':''}} {{Request::segment(2)=="kontak"?'active':''}}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Pengaturan
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/footerimage')}}"
                                class="nav-link {{Request::segment(2)=="footerimage"?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Footer Image</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/kontak')}}"
                                class="nav-link {{Request::segment(2)=="kontak"?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    </ul>
                </li>
           
                <li class="nav-item">
                    <a href="{{url('admin/logout')}}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                    </a>
                
                </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
