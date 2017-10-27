<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ URL::asset('crud/img/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asif</div>
            <div class="email">Asif@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="{{ __('credential.logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="#">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">trending_down</i>
                    <span>HIRE AGREEMENT</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ url('/admin/non_regulated') }}">
                            <span>NON-REGULATED HIRE AGREEMENT</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/hirer_details') }}">
                            <span>HIRER’S DETAILS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/licence_details') }}" >
                            <span>DRIVING LICENCE DETAILS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/hire_rates&charges') }}" >
                            <span>VEHICLE HIRE RATES AND CHARGES</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">trending_down</i>
                    <span>Vehical </span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ url('/admin/addnew') }}">
                            <span>Add New</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/vehicalsview') }}" >
                            <span>All Vehical's</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">trending_down</i>
                    <span>Manage Client's </span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ url('/admin/vehicalsview') }}" >
                            <span>All User's</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy;  <a href="javascript:void(0);">Ani Motors</a>.
        </div>

    </div>
    <!-- #Footer -->
</aside>