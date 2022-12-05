<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="{{asset('index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('product/create')}}">Add products</a>
                                </li>
                                <li>
                                    <a href="{{asset('product')}}">view products </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Brand <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('Brand/create')}}">Add brand</a>
                                </li>
                                <li>
                                    <a href="{{asset('Brand')}}">view brand</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('category/create')}}">Add category</a>
                                </li>
                                <li>
                                    <a href="{{asset('category')}}">view category</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Store<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('Store/create')}}">Store Management</a>
                                </li>
                                <li>
                                    <a href="{{asset('Store')}}">Select Store</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> HR Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Department<span class="fa arrow"></span></a>
                                    <ul class="nav nav">

                                </li>
                                <li>
                                    <a href="{{asset('Department/create')}}">Add Department</a>
                                </li>
                                <li>
                                
                                    <a href="{{asset('Department')}}">View Department</a>
                                </li>
                               
</ul>
                            <li>
                                    <a href="#">Degination<span class="fa arrow"></span></a>
                                    <ul class="nav nav">

                                </li>
                                <li>
                                    <a href="{{asset('Degination/create')}}">Add Degination</a>
                                </li>
                                <li>
                                
                                    <a href="{{asset('Degination')}}">View Degination</a>
                                </li>
</ul>
                                <li>
                                    <a href="#">Employee<span class="fa arrow"></span></a>
                                    <ul class="nav nav">

                                </li>
                                <li>
                                    <a href="{{asset('Employee/create')}}">Add Employee</a>
                                </li>
                                <li>
                                
                                    <a href="{{asset('Employee')}}">View Employee</a>
                                </li>
</ul>
<li>
                                    <a href="#">Payment<span class="fa arrow"></span></a>
                                    <ul class="nav nav">

                                </li>
                                <li>
                                    <a href="{{asset('payment/create')}}">Add Payment</a>
                                </li>
                                <li>
                                
                                    <a href="{{asset('payment')}}">View payment</a>
                                </li>
</ul>
                    
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Customer <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('customer/create')}}">Add Customer</a>
                                </li>
                                <li>
                                    <a href="{{asset('customer')}}">view Customer</a>
                                </li>
                            </ul>
                            <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> users <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('admin/create')}}">Add user</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin')}}">view user</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        