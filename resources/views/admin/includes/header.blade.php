
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-envelope"></i>
            <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock-o mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock-o mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock-o mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-flag"></i>
            <span class="badge badge-success navbar-badge">9</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">You have 9 tasks</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>

    <!-- User Account: style can be found in dropdown.less -->
    <li class="nav-item dropdown" style="margin-top:4px;">
        <a href="#" class="user dropdown-toggle" data-toggle="dropdown" style="margin:10px;">

            <img src="{{ asset('dist/img/user.png') }}" style="height:33.33px; margin-right:5px;" class="img-circle elevation-2" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="background-color: #ffffff; padding: 5px; border-radius: 10px">
            <li class="user-header">
                <img class="user-hd-img"  src="{{ asset('dist/img/user.png') }}" class="img-cir" alt="User Image" style="text-align: center; max-height: 80px;">
                <p class="user-hd-text">
                    {{ strtoupper(Auth::user()->name) }} <br>
                    {{ Auth::user()->role_id }} <br>
                    <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                {{--<div class="row">--}}
                    {{--<div class="col-xs-4 text-center">--}}
                        {{--<a class="text-white" href="#">Followers</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4 text-center">--}}
                        {{--<a class="text-white" href="#">Sales</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4 text-center">--}}
                        {{--<a class="text-white" href="#">Friends</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <a href="{{ action('UserController@profile') }}" class="btn btn-success btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-danger btn-flat" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </li>



    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                    class="fas fa-th-large"></i></a>
    </li>
</ul>