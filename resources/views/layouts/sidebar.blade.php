<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color:white">
        <!-- Brand Logo -->
        <a href="home" class="brand-link" style="display:flex; flex-direction:column; gap:3px;">
          <img src="{{ asset('assets/dist/img/logo-isef.png') }} " alt="AdminLTE Logo" class="brand-image"
               style="opacity: .8">
          <span class="brand-text font-weight-light" style="color:black; font-weight:600;">Toko Buku Halal<span/>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            <div class="image">
              <img src="{{ asset('assets/dist/img/person.png') }} " class="" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">
                    {{ Auth::user()->email }}
                  {{-- Alexander Pierce --}}
                </a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2" id="menu-sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{ (request()->is('users')) ? 'active' : '' }}">
                      <i class="nav-icon fa fa-user-circle"></i>
                      <p>
                        Data Pengguna
                      </p>
                    </a>
                  </li>

            <li class="nav-item">
              <a href="{{ route('categories.index') }}" class="nav-link {{ (request()->is('categories')) ? 'active' : '' }}">
                    <i class="nav-icon fa fa-server"></i>
                    <p>
                    Data Kategori
                    </p>
                </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('books.index') }}" class="nav-link {{ (request()->is('books')) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                        Data Buku
                        </p>
                    </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('orders.index') }}" class="nav-link {{ (request()->is('orders')) ? 'active' : '' }}">
                              <i class="nav-icon fa fa-shopping-basket"></i>
                              <p>
                              Data Order
                              </p>
                          </a>
                          </li>

              <li class="nav-item">
                <form action="{{ route("logout") }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-block" style="cursor:pointer"><i class="nav-icon fa fa-sign-out"></i> Sign Out</button>
                </form>
    
                {{-- <a href="{{ route('logout') }}" class="nav-link">
                  <i class="nav-icon fa fa-sign-out"></i>
                  <p>
                    Sign Out
                  </p>
                </a> --}}
              </li>
            </ul>
            <img src="{{asset("assets/dist/img/logo-alhazen.png")}}" alt="" style="height:52px; margin:32px auto;">
            <img src="{{asset("assets/dist/img/logo-fesyar.png")}}" alt="" style="height:72px; margin:0 auto;">
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>