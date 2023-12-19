<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box bg-warning">
        <a href="#" class="logo logo-dark ">
            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="65">

        </a>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('dashbord.sales_dashboard')}}">
                        <i class="fa-solid fa-house"></i>
                        <span style="color: white; font-weight:600">Dashbord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="fa-solid fa-bars-progress"></i>
                        <span data-key="t-apps" style="color: white; font-weight:600">Product Managment</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{route('product.add_product')}}" class="nav-link" style="color: white; font-weight:600" data-key="t-chat">
                                    Add Product
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('product.all_product')}}" class="nav-link" style="color: white; font-weight:600" data-key="t-chat">
                                    Product List
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav" id="navbar-nav">


                <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('sales.add_sales')}}">
                        <i class="fa-solid fa-money-bill"></i>
                        <span style="color: white; font-weight:600">Sales Product</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('sales.all_sales_transaction')}}">
                        <i class="fa-solid fa-money-bill"></i>
                        <span style="color: white; font-weight:600">Sales Transaction</span>
                    </a>
                </li>
            </ul>
        </div>
        </li>
        </ul>
    </div>
    </li>
    </ul>
</div>
