<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Vacaciones | Holidays</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('/admin/calendar')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/adminlte/img/user1-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/adminlte/img/user8-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/adminlte/img/user3-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
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
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                        class="fas fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('/admin/calendar')}}" class="brand-link">
            <img src="/adminlte/img/logo_sist.png" alt="AdminLTE Logo" class="brand-image elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Sistema Vacaciones</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/adminlte/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{url('/')}}" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{url('/admin/calendar')}}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Calendar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Holidays
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('/admin')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vacation History</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/admin/holiday')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vacation Request</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('/admin/inbox')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/admin/compose')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/admin/read')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Mailbox - Inbox</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Mailbox</li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/admin/compose" class="btn btn-primary btn-block mb-3">Compose</a>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Folders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-inbox"></i> Inbox
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-envelope"></i> Sent
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-trash-alt"></i> Trash
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Inbox</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search Mail">
                                        <div class="input-group-append">
                                            <div class="btn btn-primary">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                            class="far fa-square"></i>
                                    </button>
                                    <div class="float-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i
                                                    class="fas fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i
                                                    class="fas fa-chevron-right"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.float-right -->
                                </div>
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check1">
                                                    <label for="check1"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">5 mins ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check2">
                                                    <label for="check2"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">28 mins ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check3">
                                                    <label for="check3"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">11 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check4">
                                                    <label for="check4"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">15 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check5">
                                                    <label for="check5"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">Yesterday</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check6">
                                                    <label for="check6"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check7">
                                                    <label for="check7"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check8">
                                                    <label for="check8"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check9">
                                                    <label for="check9"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check10">
                                                    <label for="check10"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check11">
                                                    <label for="check11"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">4 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check12">
                                                    <label for="check12"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">12 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check13">
                                                    <label for="check13"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">12 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check14">
                                                    <label for="check14"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">14 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check15">
                                                    <label for="check15"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a
                                                solution to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">15 days ago</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.table -->
                                </div>
                                <!-- /.mail-box-messages -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer p-0">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                            class="far fa-square"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i
                                                class="far fa-trash-alt"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                    <div class="float-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i
                                                    class="fas fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i
                                                    class="fas fa-chevron-right"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.float-right -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.content-wrapper -->
        </section>
        <!-- /.content -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="text-center text-white" style="background-color: #f1f1f1;">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">

                    <!-- Google -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.google.es/"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-google"></i
                        ></a>

                    <!-- Instagram -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.instagram.com/rafa_ortega89/"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-instagram"></i
                        ></a>

                    <!-- Linkedin -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.linkedin.com/in/rafael-a-ortega-valderrama-ab7a1aa8/"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-linkedin"></i
                        ></a>
                    <!-- Github -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://github.com/raortega8906"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-github"></i
                        ></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © {{date('Y')}} Copyright:
                <a class="text-dark" href="#">Rafael A. Ortega</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- ./footer -->
    </div>
    <!-- ./wrapper -->
</div>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- Page Script -->
<script>
    $(function () {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function () {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })

        //Handle starring for glyphicon and font awesome
        $('.mailbox-star').click(function (e) {
            e.preventDefault()
            //detect type
            var $this = $(this).find('a > i')
            var glyph = $this.hasClass('glyphicon')
            var fa = $this.hasClass('fa')

            //Switch states
            if (glyph) {
                $this.toggleClass('glyphicon-star')
                $this.toggleClass('glyphicon-star-empty')
            }

            if (fa) {
                $this.toggleClass('fa-star')
                $this.toggleClass('fa-star-o')
            }
        })
    })
</script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
</body>
</html>
