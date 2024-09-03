<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta name="description" content="POS - Bootstrap Admin Template" />
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects" />
    <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.jpg')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />

</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left active">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src=" {{ asset('assets/img/logo.png') }}" alt="" />
                </a>
                <a href="{{ route('admin.dashboard') }}" class="logo-small">
                    <img src=" {{ asset('assets/img/logo-small.png') }}" alt="" />
                </a>
                <a id="toggle_btn" href="javascript:void(0);"> </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ..." />
                                <div class="search-addon">
                                    <span><img src=" {{ asset('assets/img/icons/closes.svg') }}" alt="img" /></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src=" {{ asset('assets/img/icons/search.svg') }}" alt="img" /></a>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                        <img src=" {{ asset('assets/img/flags/us1.png') }}" alt="" height="20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src=" {{ asset('assets/img/flags/us.png') }}" alt="" height="16" /> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src=" {{ asset('assets/img/flags/fr.png') }}" alt="" height="16" /> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src=" {{ asset('assets/img/flags/es.png') }}" alt="" height="16" /> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src=" {{ asset('assets/img/flags/de.png') }}" alt="" height="16" /> German
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src=" {{ asset('assets/img/icons/notification-bing.svg') }}" alt="img" />
                        <span class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src=" {{ asset('assets/img/profiles/avatar-02.jpg') }}" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">John Doe</span> added new task
                                                    <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src=" {{ asset('assets/img/profiles/avatar-03.jpg') }}" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Tarah Shropshire</span> changed the task name
                                                    <span class="noti-title">Appointment booking with payment gateway</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src=" {{ asset('assets/img/profiles/avatar-06.jpg') }}" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Misty Tison</span> added
                                                    <span class="noti-title">Domenic Houston</span> and
                                                    <span class="noti-title">Claire Mapes</span> to project
                                                    <span class="noti-title">Doctor available module</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src=" {{ asset('assets/img/profiles/avatar-17.jpg') }}" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Rolland Webber</span> completed task
                                                    <span class="noti-title">Patient and Doctor video conferencing</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src=" {{ asset('assets/img/profiles/avatar-13.jpg') }}" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Bernardo Galaviz</span> added new task
                                                    <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src=" {{ asset('assets/img/profiles/avator1.jpg') }}" alt="" />
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src=" {{ asset('assets/img/profiles/avator1.jpg') }}" alt="" />
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <a class="dropdown-item" href="profile.html">
                                <i class="me-2" data-feather="user"></i> My Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
                            <hr class="m-0" />

                            <form action="{{ route('admin.logout') }}"method="POST">
                                @csrf
                                <button class="dropdown-item logout pb-0" href="signin.html">
                                    <img src=" {{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img" />
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="signin.html">Logout</a>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}"><img src=" {{ asset('assets/img/icons/dashboard.svg') }}" alt="img" /><span>
                                    Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src=" {{ asset('assets/img/icons/product.svg') }}" alt="img" /><span>
                                    Product</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.products.productlist') }}">Product List</a></li>
                                <li><a href="{{ route('admin.products.productcreate') }}">Add Product</a></li>
                                <li><a href="{{ route('admin.categorys.categoryslist') }}">Category List</a></li>
                                <li><a href="{{ route('admin.categorys.categoryscreate') }}">Add Category</a></li>
                                <li><a href="{{ route('admin.subcategorys.subcategoryslist') }}">Sub Category List</a></li>
                                <li><a href="{{ route('admin.subcategorys.subcategoryscreate') }}">Add Sub Category</a></li>
                                <li><a href="{{ route('admin.brand.brandlist') }}">Brand List</a></li>
                                <li><a href="{{ route('admin.brands.brandcreate') }}">Add Brand</a></li>
                                <li><a href="{{ route('admin.color.list') }}">Color List</a></li>
                                <li><a href="{{ route('admin.color.create') }}">Color add</a></li>
                                <li><a href="importproduct.html">Import Products</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src=" {{ asset('assets/img/icons/users1.svg') }}" alt="img" /><span>
                                    People</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customerlist.html">Customer List</a></li>
                                <li><a href="addcustomer.html">Add Customer </a></li>
                                <li><a href="supplierlist.html">Supplier List</a></li>
                                <li><a href="addsupplier.html">Add Supplier </a></li>
                                <li><a href="userlist.html">User List</a></li>
                                <li><a href="adduser.html">Add Admin User</a></li>
                                <li><a href="storelist.html">Store List</a></li>
                                <li><a href="addstore.html">Add Store</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src=" {{ asset('assets/img/icons/time.svg') }}" alt="img" /><span>
                                    Report</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li>
                                    <a href="purchaseorderreport.html">Purchase order report</a>
                                </li>
                                <li><a href="inventoryreport.html">Inventory Report</a></li>
                                <li><a href="salesreport.html">Sales Report</a></li>
                                <li><a href="invoicereport.html">Invoice Report</a></li>
                                <li><a href="purchasereport.html">Purchase Report</a></li>
                                <li><a href="supplierreport.html">Supplier Report</a></li>
                                <li><a href="customerreport.html">Customer Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src=" {{ asset('assets/img/icons/users1.svg') }}" alt="img" /><span>
                                    Users</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newuser.html">New User </a></li>
                                <li><a href="userlists.html">Users List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src=" {{ asset('assets/img/icons/settings.svg') }}" alt="img" /><span>
                                    Settings</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="generalsettings.html">General Settings</a></li>
                                <li><a href="emailsettings.html">Email Settings</a></li>
                                <li><a href="paymentsettings.html">Payment Settings</a></li>
                                <li><a href="currencysettings.html">Currency Settings</a></li>
                                <li><a href="grouppermissions.html">Group Permissions</a></li>
                                <li><a href="taxrates.html">Tax Rates</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/feather.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js')}}"></script>


</body>

</html>
