<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Kanakku </title>

<link rel="shortcut icon" href="{{asset('admin/img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('admin/style/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset ('admin/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset ('admin/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset ('admin/plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset ('admin/style/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset ('admin/plugins/datatables/datatables.min.css')}}">

<link rel="stylesheet" href="{{asset ('admin/style/style.css')}}">
</head>
<body>

<div class="main-wrapper">

<div class="header header-one">

<a href="javascript:void(0);" id="toggle_btn">
<span class="toggle-bars">
<span class="bar-icons"></span>
<span class="bar-icons"></span>
<span class="bar-icons"></span>
<span class="bar-icons"></span>
</span>
</a>


<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><img src="{{asset('admin/img/icons/search.svg')}}" alt="img"></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav nav-tabs user-menu">

<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
<img src="{{asset ('admin/img/flags/us1.png')}}" alt height="20"><span>English</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{asset ('admin/img/flags/us.png')}}" alt height="16"><span>English</span>
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{('admin/img/flags/fr.png')}}" alt height="16"><span>French</span>
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{asset ('admin/img/flags/es.png')}}" alt height="16"><span>Spanish</span>
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="{{asset ('admin/img/flags/de.png')}}" alt height="16"><span>German</span>
</a>
</div>
</li>

<li class="nav-item  has-arrow dropdown-heads ">
<a href="javascript:void(0);" class="toggle-switch">
<i class="fe fe-moon"></i>
</a>
</li>
<li class="nav-item dropdown  flag-nav dropdown-heads">
<a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
<i class="fe fe-bell"></i> <span class="badge rounded-pill"></span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt src="{{asset ('profiles/avatar-02.jpg')}}">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt src="{{asset ('img/profiles/avatar-03.jpg')}}"">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">New user registered</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt src="{{asset ('img/profiles/avatar-04.jpg')}}">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="profile.html">
<div class="media d-flex">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="notifications.html">View all Notifications</a>
</div>
</div>
</li>
<li class="nav-item  has-arrow dropdown-heads ">
<a href="javascript:void(0);" class="win-maximize">
<i class="fe fe-maximize"></i>
</a>
</li>

<li class="nav-item dropdown">
<a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img src="{{asset('img/profiles/avatar-07.jpg')}}" alt="img" class="profilesidebar">
<span class="animate-circle"></span><span class="user-details">{{ auth()->user()->name }}</span>
<span class="user-name">{{ auth()->user()->email }}</span>
</span>

</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilemenu">
<div class="subscription-menu">
<ul>
<li>
<a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a>
</li>
<li>
<a class="dropdown-item" href="">Settings</a>
</li>
</ul>
</div>
<div class="subscription-logout">
<ul>
<li class="pb-0">
<a class="dropdown-item" href="{{ route('admin.logout') }}">Log Out</a>
</li>
</ul>
</div>
</div>
</div>
</li>

</ul>

</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
    <div class="sidebar-logo">
    <a href="index.html">
    <img src="{{asset('img/logo.png')}}" class="img-fluid logo" alt>
    </a>
    <a href="index.html">
    <img src="{{asset('img/logo-small.png')}}" class="img-fluid logo-small" alt>
    </a>
    </div>
    </div>
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    
    <ul>
    <li class="menu-title"><span>Main</span></li>
    <li class="submenu">
    <a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span> Dashboard</span> </a>
    
    </li>
    <li class="submenu">
    <a href="{{route('logout')}}"><i class="fe fe-grid"></i> <span> Logout</span></a>
   
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Customers</span></li>
    <li>
    <a href="{{route('customers')}}"><i class="fe fe-users"></i> <span>Customers</span></a>
    </li>
   </ul>
    
    
    <ul>
    <li class="menu-title"><span>Estimate</span></li>

<li>
    <a href="Estimate.html"><i class="fe fe-user"></i> <span>Estimate</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Invoices</span></li>
    <li class="submenu">
    <a href="#"><i class="fe fe-file"></i> <span>Invoices</span></a>
    
    </li>
   
   
    <li class="menu-title"><span>Payment</span></li>
    <li>
    <a href="purchases.html"><i class="fe fe-shopping-cart"></i> <span>Payment</span></a>
    </li>
    <li>
   
   
    <li class="menu-title"><span>Finance & Accounts</span></li>
    <li>
    <a href="expenses.html"><i class="fe fe-file-plus"></i> <span>Expenses</span></a>
    </li>
    <li>
    <a href="payments.html"><i class="fe fe-credit-card"></i> <span>Payments</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Quotations</span></li>
    <li>
    <a href="quotations.html"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
    </li>
    <li>
    <a href="delivery-challans.html"><i class="fe fe-file-text"></i> <span>Delivery Challans</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Reports</span></li>
    <li>
    <a href="quotations.html"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
    </li>
    <li>
    <a href="payment-summary.html"><i class="fe fe-credit-card"></i> <span>Payment Summary</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>User Management</span></li>
    <li class="submenu">
    <a href="#"><i class="fe fe-user"></i> <span> Manage Users</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="add-user.html">Add User</a></li>
    <li><a href="users.html">Users</a></li>
    </ul>
    </li>
    <li>
    <a href="roles-permission.html"><i class="fe fe-clipboard"></i> <span>Roles & Permission</span></a>
    </li>
    <li>
    <a href="delete-account-request.html"><i class="fe fe-trash-2"></i> <span>Delete Account Request</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Membership</span></li>
    <li class="submenu">
    <a href="#"><i class="fe fe-book"></i> <span> Membership</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="membership-plans.html">Membership Plans</a></li>
    <li><a href="membership-addons.html">Membership Addons</a></li>
    <li><a href="subscribers.html">Subscribers</a></li>
    <li><a href="transactions.html">Transactions</a></li>
    </ul>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Content (CMS)</span></li>
    <li class="submenu">
    <a href="#"><i class="fe fe-folder"></i> <span> Pages</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="add-page.html">Add Page</a></li>
    <li><a href="pages.html">Pages</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-book"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="all-blogs.html">All Blogs</a></li>
    <li><a href="add-blog.html">Add Blog</a></li>
    <li><a href="categories.html">Categories</a></li>
    <li><a href="blog-comments.html">Blog Comments</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-map-pin"></i> <span> Location</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="countries.html">Countries</a></li>
    <li><a href="states.html">States</a></li>
    <li><a href="cities.html">Cities</a></li>
    </ul>
    </li>
    <li>
    <a href="testimonials.html"><i class="fe fe-message-square"></i> <span>Testimonials</span></a>
    </li>
    <li>
    <a href="faq.html"><i class="fe fe-alert-circle"></i> <span>FAQ</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Support</span></li>
    <li>
    <a href="contact-messages.html"><i class="fe fe-printer"></i> <span>Contact Messages</span></a>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-save"></i> <span> Tickets</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="tickets.html">Tickets</a></li>
    <li><a href="tickets-list.html">Tickets List</a></li>
    <li><a href="tickets-kanban.html">Tickets Kanban</a></li>
    <li><a href="ticket-details.html">Ticket Overview</a></li>
    </ul>
    </li>
    </ul>
    
    
    <ul>
    <li class="submenu">
    <a href="#"><i class="fe fe-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="login.html"> Login </a></li>
    <li><a href="register.html"> Register </a></li>
    <li><a href="forgot-password.html"> Forgot Password </a></li>
    <li><a href="lock-screen.html"> Lock Screen </a></li>
    </ul>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Pages</span></li>
    <li>
    <a href="profile.html"><i class="fe fe-user"></i> <span>Profile</span></a>
    </li>
    <li>
    <a href="error-404.html"><i class="fe fe-x-square"></i> <span>Error Pages</span></a>
    </li>
    <li>
    <a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
    </li>
    <li>
    <a href="maps-vector.html"><i class="fe fe-image"></i> <span>Vector Maps</span></a>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title">
    <span>UI Interface</span>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="alerts.html">Alerts</a></li>
    <li><a href="accordions.html">Accordions</a></li>
    <li><a href="avatar.html">Avatar</a></li>
    <li><a href="badges.html">Badges</a></li>
    <li><a href="buttons.html">Buttons</a></li>
    <li><a href="buttongroup.html">Button Group</a></li>
    <li><a href="breadcrumbs.html">Breadcrumb</a></li>
    <li><a href="cards.html">Cards</a></li>
    <li><a href="carousel.html">Carousel</a></li>
    <li><a href="dropdowns.html">Dropdowns</a></li>
    <li><a href="grid.html">Grid</a></li>
    <li><a href="images.html">Images</a></li>
    <li><a href="lightbox.html">Lightbox</a></li>
    <li><a href="media.html">Media</a></li>
    <li><a href="modal.html">Modals</a></li>
    <li><a href="offcanvas.html">Offcanvas</a></li>
    <li><a href="pagination.html">Pagination</a></li>
    <li><a href="popover.html">Popover</a></li>
    <li><a href="progress.html">Progress Bars</a></li>
    <li><a href="placeholders.html">Placeholders</a></li>
    <li><a href="rangeslider.html">Range Slider</a></li>
    <li><a href="spinners.html">Spinner</a></li>
    <li><a href="sweetalerts.html">Sweet Alerts</a></li>
    <li><a href="tab.html">Tabs</a></li>
    <li><a href="toastr.html">Toasts</a></li>
    <li><a href="tooltip.html">Tooltip</a></li>
    <li><a href="typography.html">Typography</a></li>
    <li><a href="video.html">Video</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="ribbon.html">Ribbon</a></li>
    <li><a href="clipboard.html">Clipboard</a></li>
    <li><a href="drag-drop.html">Drag & Drop</a></li>
    <li><a href="rating.html">Rating</a></li>
    <li><a href="text-editor.html">Text Editor</a></li>
    <li><a href="counter.html">Counter</a></li>
    <li><a href="scrollbar.html">Scrollbar</a></li>
    <li><a href="notification.html">Notification</a></li>
    <li><a href="stickynote.html">Sticky Note</a></li>
    <li><a href="timeline.html">Timeline</a></li>
    <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
    <li><a href="form-wizard.html">Form Wizard</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-bar-chart"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="chart-apex.html">Apex Charts</a></li>
    <li><a href="chart-js.html">Chart Js</a></li>
    <li><a href="chart-morris.html">Morris Charts</a></li>
    <li><a href="chart-flot.html">Flot Charts</a></li>
    <li><a href="chart-peity.html">Peity Charts</a></li>
    <li><a href="chart-c3.html">C3 Charts</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
    <li><a href="icon-feather.html">Feather Icons</a></li>
    <li><a href="icon-ionic.html">Ionic Icons</a></li>
    <li><a href="icon-material.html">Material Icons</a></li>
    <li><a href="icon-pe7.html">Pe7 Icons</a></li>
    <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
    <li><a href="icon-themify.html">Themify Icons</a></li>
    <li><a href="icon-weather.html">Weather Icons</a></li>
    <li><a href="icon-typicon.html">Typicon Icons</a></li>
    <li><a href="icon-flag.html">Flag Icons</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-sidebar"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
    <li><a href="form-input-groups.html">Input Groups </a></li>
    <li><a href="form-horizontal.html">Horizontal Form </a></li>
    <li><a href="form-vertical.html"> Vertical Form </a></li>
    <li><a href="form-mask.html">Form Mask </a></li>
    <li><a href="form-validation.html">Form Validation </a></li>
    <li><a href="form-select2.html">Form Select2 </a></li>
    <li><a href="form-fileupload.html">File Upload </a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="tables-basic.html">Basic Tables </a></li>
    <li><a href="data-tables.html">Data Table </a></li>
    </ul>
    </li>
    </ul>
    
    
    <ul>
    <li class="menu-title"><span>Settings</span></li>
    <li>
    <a href="settings.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
    </li>
    <li>
    <a href=""><i class="fe fe-power"></i> <span>Logout</span></a>
    </li>
    </ul>
    
    </div>
    </div>
    </div>

    <script src="{{asset('admin/script/jquery-3.6.3.min.js')}}"></script>

    <script src="{{asset('admin/script/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('admin/script/feather.min.js')}}"></script>
    
    <script src="{{asset('admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('admin/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/plugins/apexchart/chart-data.js')}}"></script>
    
    <script src="{{asset('admin/js/script.js')}}"></script>
    </body>
    <script>
      function toggleDropdown() {
        var dropdown = document.querySelector("#userDropdown .dropdown-menu");
        if (dropdown.style.display === "block") {
          dropdown.style.display = "none";
        } else {
          dropdown.style.display = "block";
        }
      }
    </script>
    </html>