    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" title="adDev is a azOneDev product" href="#">adDev</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="{{url('/')}}" target="_blank"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                {{-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a> --}}
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> {{Session('username')}} <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{url('/user/profile/')}}" target="_blank"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a  href="{{url('/user/account/')}}" target="_blank"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    {{-- <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li> --}}
                    <li>
                        <a href="{{url('/admin')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> Messages <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('admin/new-messages')}}"><i class="fa fa-bell"></i> New messages</a>
                            </li>
                            <li>
                                <a href="{{url('admin/all-messages')}}"><i class="fa fa-inbox"></i> All messages</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> User <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="{{url('admin/admin-list')}}"><i class="fa fa-list"></i> Admin List</a>
                            </li>
                            <li>
                                <a href="{{url('admin/add-new')}}"><i class="fa fa-plus"></i> Admin Add</a>
                            </li>
                            <li>
                                <a href="{{url('admin/user-list')}}"><i class="fa fa-user"></i> Customers</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('admin/section-settings')}}"><i class="fa fa-list-alt"></i>  Section Settings</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sliders"></i> Page Settings <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('admin/about-us')}}"><i class="fa fa-address-card"></i> About-us</a>
                            </li>
                            <li>
                                <a href="{{url('admin/terms')}}"><i class="fa fa-user-secret"></i> Terms & condition</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/admin/setting')}}"><i class="fa fa-cogs"></i> Settings</a>
                       
                    </li>
                    <li>
                        <a href="{{url('/admin/export-data')}}"><i class="fa fa-file-excel-o"></i> Export data</a>
                       
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>