<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details light-blue darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="/images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown-nav" class="dropdown-content">
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">face</i> Profile</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">settings</i> Settings</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">live_help</i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">lock_outline</i> Lock</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">keyboard_tab</i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">{{Auth()->user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">{{'rol'}}</p>
                </div>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                    <a href="{{route('backoffice.admin.show')}}" class="waves-effect waves-cyan">
                        <i class="material-icons">pie_chart_outlined</i>
                        <span class="nav-text">Panel de administracion</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="{{route('backoffice.user.index')}}" class="waves-effect waves-cyan">
                        <i class="material-icons">peoples</i>
                        <span class="nav-text">Usuarios del Sistema</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="{{route('backoffice.role.index')}}" class="waves-effect waves-cyan">
                        <i class="material-icons">perm_identity</i>
                        <span class="nav-text">Roles del sistema</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="{{route('backoffice.permission.index')}}" class="waves-effect waves-cyan">
                        <i class="material-icons">vpn_key</i>
                        <span class="nav-text">Permisos del sistema</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="{{route('backoffice.speciality.index')}}" class="waves-effect waves-cyan">
                        <i class="material-icons">assignment</i>
                        <span class="nav-text">Especialidades medicas</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
        <i class="material-icons">menu</i>
    </a>
</aside>
