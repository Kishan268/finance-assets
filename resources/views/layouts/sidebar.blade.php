 
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
          <p class="app-sidebar__user-designation">Backend Developer</p>
        </div>
      </div>

      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>


@role('finance_assets_superadmin')

      <li class="treeview {{ Request::segment(1) == 'assets' ? 'is-expanded ' : 'active' }}"><a class="app-menu__item" href="{{route('assets.index')}}" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Assets</span></a>
         
        </li>

       <li class="treeview {{ Request::segment(1) == 'company' ? 'is-expanded ' : '' || Request::segment(1) == 'employee' ? 'is-expanded ' : '' || Request::segment(1) == 'department' ? 'is-expanded ' : ''||  Request::segment(1) == 'designation' ? 'is-expanded ' : ''||  Request::segment(1) == 'grade' ? 'is-expanded ' : '' ||  Request::segment(1) == 'add-branch' ? 'is-expanded ' : '' ||  Request::segment(1) == 'entitleclass' ? 'is-expanded ' : '' }}">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Master</span><i class="treeview-indicator fa fa-angle-right"></i>
        </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('company.index')}}"><i class="icon fa fa-circle-o"></i> Company</a></li>
            <li><a class="treeview-item" href="{{route('employee.index')}}"><i class="icon fa fa-circle-o"></i> Employee</a></li>
            <li><a class="treeview-item" href="{{route('department.index')}}"><i class="icon fa fa-circle-o"></i> Department</a></li>
            <li><a class="treeview-item" href="{{route('designation.index')}}"  ><i class="icon fa fa-circle-o"></i> Designation</a></li>
            <li><a class="treeview-item" href="{{route('grade.index')}}"><i class="icon fa fa-circle-o"></i> Grade</a></li>
            <li><a class="treeview-item" href="{{route('entitleclass.index')}}"><i class="icon fa fa-circle-o"></i> EntitleClass</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::segment(1) == 'users' ? 'is-expanded ' : '' || Request::segment(1) == 'roles' ? 'is-expanded ' : '' || Request::segment(1) == 'permissions' ? 'is-expanded ' : '' }}"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-key"></i><span class="app-menu__label">Role & Permission</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('users.index')}}"><i class="icon fa fa-circle-o"></i> Users</a></li>
            <li><a class="treeview-item" href="{{route('roles.index')}}"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            <li><a class="treeview-item" href="{{route('permissions.index')}}"><i class="icon fa fa-circle-o"></i> Permission</a></li>
          </ul>
        </li>
@endrole

@role('finance_assets_user')

  <li class="treeview {{ Request::segment(1) == 'assets' ? 'is-expanded ' : 'active' }}"><a class="app-menu__item" href="{{route('assets.index')}}" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Assets</span></a>
           
  </li>

@endrole


        <li class="treeview"><a class="app-menu__item"  href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" data-toggle="treeview"><i class="app-menu__icon glyphicon glyphicon-log-out"></i><span class="app-menu__label">Log Out</span></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        
      </ul>
    </aside>