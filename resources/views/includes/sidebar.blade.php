<aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
              <span class="user-avatar user-avatar-lg">
                <img src="{{URL::to('/')}}/assets/images/user.png" alt="">
              </span> 
              <span class="account-icon">
                <span class="fa fa-caret-down fa-lg"></span>
              </span> 
              <span class="account-summary">
                <span class="account-name">{{Auth::user()->fullname}}</span> 
                <span class="account-description">{{Auth::user()->username}}</span>
              </span>
            </button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="{{route('logout')}}">
                  <span class="dropdown-icon oi oi-account-logout"></span> Logout
                </a>
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="{{route('dashbord')}}" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link">
                    <span class="menu-icon fas fa-building"></span> 
                    <span class="menu-text">Properties</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('properties.add')}}" class="menu-link">Add New</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('properties.all')}}" class="menu-link">All Properties</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <li class="menu-header">Settings </li>
                <li class="menu-item">
                  <a href="{{route('settings.phone')}}" class="menu-link">
                    <span class="menu-icon fas fa-phone"></span> <span class="menu-text">Phones</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('settings.areas')}}" class="menu-link">
                    <span class="menu-icon fas fa-city"></span> <span class="menu-text">Areas</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('settings.source')}}" class="menu-link">
                    <span class="menu-icon fas fa-database"></span> <span class="menu-text">Source</span>
                  </a>
                </li>
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <a href="{{route('logout')}}" class="btn btn-light btn-block text-primary"><span class="d-compact-menu-none">Logout</span> <i class="oi oi-account-logout"></i></a>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside>