<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a  href="{{route('admin_home') }}" class="nav-link">
                <i class="icon-grid menu-icon"> </i>
                <span class="menu-title">Home</span>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a class="nav-link" href="{{route('admin_category') }}" >
                <p>
                <i class="icon-layout menu-icon"> </i>
                   Category
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{route('admin_products')}}" class="nav-link">
                <p>
                    <i class="icon-paper menu-icon">  </i>
                    Vehicle
                </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="{{route('admin_message')}}" class="nav-link">
                <p>
                    <i class="icon-paper menu-icon">  </i>
                    Contact Message
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{route('admin_review')}}" class="nav-link">
                <p>
                    <i class="icon-paper menu-icon">  </i>
                    Reviews
                </p>
            </a>

        <li class="nav-item has-treeview">
            <a href="{{route('admin_faq')}}" class="nav-link">
                <p>
                    <i class="icon-columns menu-icon">  </i>
                    FAQ
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a class="nav-link" href="{{route('admin_city')}}" >
                <p>
                    <i class="icon-layout menu-icon"> </i>
                    City
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a class="nav-link" href="{{route('admin_location')}}" >
                <p>
                    <i class="icon-layout menu-icon" > </i>
                   Location
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a class="nav-link" href="{{route('admin_users')}}" >
                <p>
                    <i class="icon-head menu-icon" > </i>
                    Users
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Rezervation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column ">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin_rezervationlist_list',['status'=>'new'])}}"> New Rezervation </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin_rezervationlist_list',['status'=>'accepted'])}}"> Accepted Rezervation </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin_rezervationlist_list',['status'=>'canceled'])}}"> Cenceled Rezervation </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin_rezervationlist_list',['status'=>'shipping'])}}"> Shipping Rezervation </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin_rezervationlist_list',['status'=>'completed'])}}"> Completed Rezervation </a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item has-treeview">
            <a href="{{route('admin_setting')}}" class="nav-link">
                <p>
                    <i class="icon-paper menu-icon">  </i>
                   Setting
                </p>

            </a>
        </li>
      <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>  -->

        <!-- <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> -->
    </ul>
</nav>
