<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('agents/property')}}"> <img  src="" class="header-logo" alt="" /> <span
                    class="logo-name">AGENT DPA</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{url('agents/property')}}" class="nav-link">
                    <i data-feather="monitor"></i><span> Agent Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Agent Properties</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-property-agents')}}">Add Agents Properties </a></li>
                    <li><a class="nav-link" href="{{route('all-property-agents')}}">All Agents Properties </a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
