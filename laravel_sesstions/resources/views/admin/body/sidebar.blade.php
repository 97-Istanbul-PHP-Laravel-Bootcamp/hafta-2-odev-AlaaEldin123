
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('backend/html/ltr/vertical-menu-template-dark/index.html')}}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Ecommerce</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              



               
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Ecommerce">Manage Admin</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('admin.view')}}"><i class="feather icon-user"></i><span class="menu-item" data-i18n="Shop">View Admins</span></a>
                        </li>                  
                     
                    </ul>
                </li>

                  <li class=" nav-item"><a href="#"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Ecommerce">Manage Category</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('Category.view')}}"><i class="feather icon-grid"></i><span class="menu-item" data-i18n="Shop">View Category</span></a>
                        </li>                    
                     
                    </ul>
                </li>


                  <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title" data-i18n="Ecommerce">Manage Product</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('product.view')}}"><i class="feather icon-package"></i><span class="menu-item" data-i18n="Shop">View Product</span></a>
                        </li>                    
                     
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Manage Sales</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('sales.view')}}"><i class="feather icon-shopping-cart"></i><span class="menu-item" data-i18n="Shop">View Selles</span></a>
                        </li>                    
                     
                    </ul>
                </li>

                  <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce">Manage Customers</span></a>
                    <ul class="menu-content">
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Shop">View Customer</span></a>
                        </li>                    
                     
                    </ul>
                </li>



            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->