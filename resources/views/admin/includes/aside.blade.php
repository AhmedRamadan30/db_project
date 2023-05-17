<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DB Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          </li>
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard

                    </p>
                </a>
            </li>
          <li class="nav-item">
            <a href="{{route('admin.subjects.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Subjects

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.courses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Courses

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.all.users')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Students

              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{route('admin.lectures.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Lectures

              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-th"></i>
              <p>
                logout

              </p>
            </a>

            <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none">
            @csrf
            </form>
          </li>
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
