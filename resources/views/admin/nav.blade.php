<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="{{ asset('admin/img/profile_small.jpg') }}" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">David Williams</strong>
                            </span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li>
                            <a href="contacts.html">Contacts</a>
                        </li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">IN+</div>
            </li>
            {{-- Dashboard --}}
            <li class="active">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span></a>
            </li>
            {{-- Posts --}}
            <li>
                <a href="#"><i class="fa fa-edit"></i>
                    <span class="nav-label">Posts</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="index.html">All Posts</a></li>
                    <li><a href="index.html">Add New Post</a></li>
                    <li>
                        <a href="dashboard_2.html">Post Categories</a>
                    </li>
                </ul>
            </li>
            {{-- Banner --}}
            <li>
                <a href="#"><i class="fa fa-picture-o"></i>
                    <span class="nav-label">Banner</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.banner') }}">All Banners</a></li>
                    <li><a href="index.html">Add New Banner</a></li>
                </ul>
            </li>
            {{-- Products --}}
            <li>
                <a href="#"><i class="fa fa-cube"></i>
                    <span class="nav-label">Products</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.product') }}">All Products</a></li>
                    <li><a href="index.html">Add New Product</a></li>
                    <li>
                        <a href="dashboard_2.html">Product Categories</a>
                    </li>
                    <li>
                        <a href="dashboard_2.html">Product Tags</a>
                    </li>
                </ul>
            </li>
            {{-- Orders --}}
            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i>
                    <span class="nav-label">Orders</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.product') }}">New Orders</a></li>
                    <li><a href="index.html">Add New Orders</a></li>
                    <li>
                        <a href="dashboard_2.html">Canceled Orders</a>
                    </li>
                    <li>
                        <a href="dashboard_2.html">Delivered Orders</a>
                    </li>
                </ul>
            </li>
            {{-- Users --}}
            <li>
                <a href="index.html"><i class="fa fa-user-o"></i>
                    <span class="nav-label">Users</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="index.html">All Users</a></li>
                    <li><a href="index.html">Add New User</a></li>
                    <li>
                        <a href="dashboard_2.html">Profiles</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
