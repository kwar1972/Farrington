 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand border-bottom g-bg-black-opacity-0_9" style="z-index: 1;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link g-color-white" data-widget="pushmenu" href="#"><i class="fa fa-bars g-color-white"></i></a>
        </li>
        <li class="nav-item mt-2 g-color-white">Synapsis Trade System v1.0</li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#"><i class="fa fa-user g-color-white"></i></a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right g-bg-black-opacity-0_9  text-center">
                <span class="dropdown-header g-color-white  "><b>My Account</b></span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item  g-color-white-i"><i class="fa fa-envelope mr-2"></i>Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item  g-color-white-i" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i>{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
        </li> 
    </ul>
</nav>
<!-- /.navbar -->