<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="z-index: 1;">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
  {{-- <img src="/img/logo.png" alt="Laravel Starter" class="brand-image img-circle elevation-3"
 style="opacity: .8"> --}}
<span class="brand-text font-weight-light g-color-white pl-5">Synapsis</span>
</a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-0 mb-0 d-flex pl-5">
          <div class="image mt-0 mb-0 pb-0">
              <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info mt-0 pt-0">
              <p class="g-color-info f-size-12 mb-0">Welcome!</p>
              <a href="#" id="sideusername" class="d-block g-color-white-user-i f-size-12 mt-0"> {{auth()->user()->name .' '.auth()->user()->lastname}} </a>
          </div>
      </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @hasanyrole('admin|agent|loader')
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
                  <a href="tickerman" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt g-color-white"></i>
              <p class="g-color-white">
                Ticker Manager
              </p>
            </a>
              </li>
              <li class="nav-item">
                <a href="trademan" class="nav-link">
            <i class="nav-icon fas fa-exchange-alt g-color-white"></i>
            <p class="g-color-white">
              Trades Manager
            </p>
          </a>
            </li>
          @else
            <li class="nav-item">
                <a href="/home" class="nav-link">
                <i class="nav-icon fa fa-dashboard g-color-white"></i>
                <p class="g-color-white">
                Dashboard
                </p>
                </a>
            </li>  
            <li class="nav-item">
            <a href="/mydetails" class="nav-link">
                <i class="nav-icon fas fa-user-circle g-color-white"></i>
                <p class="g-color-white">
                My Account
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/mytrades" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt g-color-white"></i>
                <p class="g-color-white">
                Trades
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/myholdings" class="nav-link">
                <i class="nav-icon fas fa-hand-holding-usd g-color-white"></i>
                <p class="g-color-white">
                Holdings
                </p>
                </a>
            </li>
          @endhasanyrole
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>