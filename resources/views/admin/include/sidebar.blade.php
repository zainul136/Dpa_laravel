<div class="main-sidebar sidebar-style-2 ">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('/')}}"> <img  src="" clas="header-lsogo " alt="" /> <span
                    class="logo-name"><i data-feather="home" class="mr-3" > </i> ADMIN DPA</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown active">
                <a href="{{url('/')}}" class="nav-link">
                    <i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Properties</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-property')}}">Add Properties</a></li>
                    <li><a class="nav-link" href="{{route('all-property')}}">All Properties</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('all-users')}}">All Users</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>Contact Message</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('all-message')}}">All Contact User</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>Agent</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('all-agents')}}">All Agents</a></li>
                    <li><a class="nav-link" href="{{route('add-agents')}}">Add Agents</a></li>

                </ul>
            </li>
        </ul>
    </aside>
</div>
