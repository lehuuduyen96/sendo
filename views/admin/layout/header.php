<?php $url= boostrap::url();
if(empty($url[1])){
    $url[1]  ="dashboard";
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/public/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/public/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/public/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/public/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="/public/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="/public/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/public/index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="/public/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="/public/#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="/public/#">
                                            <div class="pull-left">
                                                <img src="/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="/public/#">
                                            <div class="pull-left">
                                                <img src="/public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <div class="pull-left">
                                                <img src="/public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <div class="pull-left">
                                                <img src="/public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <div class="pull-left">
                                                <img src="/public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="/public/#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="/public/#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="/public/#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/public/#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="/public/#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="/public/#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="/public/#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="/public/#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="/public/#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="/public/#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="/public/#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="/public/#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="/public/#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="/public/#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="/public/#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/public/#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/public/#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="/public/#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="/public/#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="/<?=$url[0]?>/dashboard/index">
                        <i class="fa fa-th"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">Hot</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="/<?=$url[0]?>/category">
                        <i class="fa fa-th"></i> <span>Category</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">Hot</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-files-o"></i>
                        <span>Layout Options</span>
                        <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/public/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                        <li><a href="/public/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                        <li><a href="/public/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                        <li><a href="/public/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/public/pages/widgets.html">
                        <i class="fa fa-th"></i> <span>Widgets</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/public/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="/public/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="/public/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="/public/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/public/pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="/public/pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="/public/pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="/public/pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="/public/pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="/public/pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/public/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                        <li><a href="/public/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                        <li><a href="/public/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/public/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="/public/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/public/pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="/public/pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/public/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="/public/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="/public/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="/public/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="/public/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="/public/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="/public/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="/public/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="/public/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="/public/#">
                        <i class="fa fa-share"></i> <span>SubTable</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
<!--                        subtable-->
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Origin
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/origin/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/origin/list"><i class="fa fa-circle-o"></i> List

                    </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Color
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/color/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/color/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Compatible
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/compatible/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/compatible/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Design
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/design/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/design/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Electricity
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/electricity/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/electricity/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> LCDscreen
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/LCDscreen/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/LCDscreen/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Length
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/length/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/length/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Manufacturer
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/manufacturer/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/manufacturer/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Material
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/material/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/material/list"><i class="fa fa-circle-o"></i> List
                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Maximum_aperture
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/maximum_aperture/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/maximum_aperture/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Megapixel
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/megapixel/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/megapixel/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Size
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/size/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/size/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> PantsSize
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/pantssize/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/pantssize/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Source
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/source/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/source/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Trademark
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/trademark/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/trademark/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Warranty
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/warranty/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/warranty/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/public/#"><i class="fa fa-circle-o"></i> Warranty_method
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/<?=$url[0]?>/warranty_method/create"><i class="fa fa-circle-o"></i> Create</a></li>
                                <li class="treeview">
                                    <a href="/<?=$url[0]?>/warranty_method/list"><i class="fa fa-circle-o"></i> List

                                        </span>
                                    </a>

                                </li>
                            </ul>
                        </li>


                        <!--subtable-->
                    </ul>
                </li>
                <li><a href="/public/https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="/public/#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="/public/#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="/public/#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?=ucfirst($url[1])?>
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/<?=$url[0]?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

                <?php if(isset($url[2])){?>
                    <li class=""><?=ucfirst($url[1])?></li>
                <li class="active"><?=ucfirst($url[2])?></li>
                <?php
                }
                else{?>
                <li class="active"><?=ucfirst($url[1])?></li>
                    <?php
                }?>
            </ol>
        </section>

        <!-- Main content -->
        <!-- /.content -->
