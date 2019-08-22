<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="z-index: 1;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    {{-- <img src="/img/logo.png" alt="Laravel Starter" class="brand-image img-circle elevation-3"
   style="opacity: .8"> --}}
<span class="brand-text font-weight-light g-color-white pl-5">Backend</span>
</a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block g-color-white-user-i"> {{auth()->user()->name!=null ? auth()->user()->name : "Administrator"}} </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="home" class="nav-link">
                <i class="nav-icon fa fa-dashboard g-color-white"></i>
                <p class="g-color-white">
                  Dashboard
                </p>
              </a>
                </li>
                <li class="nav-item">
                    <a href="userman" class="nav-link">
                <i class="nav-icon fas fa-users g-color-white"></i>
                <p class="g-color-white">
                  User Manager
                </p>
              </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt g-color-white"></i>
              <p class="g-color-white">
                Ticker Manager
              </p>
            </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
            <i class="nav-icon fas fa-exchange-alt g-color-white"></i>
            <p class="g-color-white">
              Transactions
            </p>
          </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>