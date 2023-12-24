<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                {{-- <li class="menu-title">Main</li> --}}
                <li class="active">
                    <a href="{{ route('deshboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ url('users') }}"><i class="fa fa-user"></i> <span>Users</span></a>
                </li>
                <li>
                    <a href="{{ url('trips') }}"><i class="fa fa-bus"></i> <span>Trips</span></a>
                </li>
                <li>
                    <a href="{{ url('tickets') }}"><i class="fa fa-ticket"></i> <span>Tickets</span></a>
                </li>
                <li>
                    <a href="{{ url('locations') }}"><i class="fa fa-map-marker"></i> <span>Locations</span></a>
                </li>
                        
                      
            </ul>
        </div>
    </div>
</div>