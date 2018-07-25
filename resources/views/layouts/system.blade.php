<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - backend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $titulo or "Gesfarm" }}</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="../image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="{{ url('assets/plugins/selectize/css/selectize.css') }}">
        <link rel="stylesheet" href="{{ url('assets/plugins/flot/css/flot.css') }}">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="{{ url('assets/stylesheet/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('assets/stylesheet/layout.css') }}">
        <link rel="stylesheet" href="{{ url('assets/stylesheet/uielement.css') }}">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="{{ url('assets/plugins/modernizr/js/modernizr.js') }}"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class=""></span>
                    <span class="">Gest Farm</span>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Sidebar shrink -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->


                    <!-- Notification dropdown -->
                    <li class="dropdown custom" id="header-dd-notification">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="icon"><i class="ico-bell"></i></span>
                                <span class="hasnotification hasnotification-danger"></span>
                            </span>
                        </a>


                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-header">
                                <span class="title">Notificações <span class="count"></span></span>
                                <span class="option text-right"><a href="javascript:void(0);"></a></span>
                            </div>
                            <div class="dropdown-body slimscroll">
                                <!-- indicator -->
                                <div class="indicator inline"><span class="spinner spinner16"></span></div>
                                <!--/ indicator -->

                                <!-- Message list -->
                                <div class="media-list">
                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-basket2 bgcolor-info"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">2d</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>


                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-alarm2"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Excepteur sint <span class="text-primary semibold">occaecat</span> cupidatat non.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">12w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-checkmark3 bgcolor-success"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Lorem ipsum dolor sit amet, <span class="text-primary semibold">consectetur</span> adipisicing elit.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">14w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
                                </div>
                                <!--/ Message list -->
                            </div>
                        </div>
                        <!--/ Dropdown menu -->
                    </li>
                    <!--/ Notification dropdown -->


                </ul>
                <!--/ END Left nav -->


                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="../image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5">{{ Auth::user()->name }}</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="pa15">
                                <h5 class="semibold hidden-xs hidden-sm">
                                    <p class="nm">60%</p>
                                    <small class="text-muted">Profile complete</small>
                                </h5>
                                <h5 class="semibold hidden-md hidden-lg">
                                    <p class="nm">Erich Reyes</p>
                                    <small class="text-muted">60% Profile complete</small>
                                </h5>
                                <div class="progress progress-xs nm mt10">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-question"></i></span> Help</a></li>
                            <li class="divider"></li>
                            @if (Auth::guard())
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn btn-default"><span class="icon"><i class="ico-exit"></i></span> Sair</button>
                                </form>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <!-- Profile dropdown -->

                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <h5 class="heading">Menu Principal</h5>
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li class="active open">
                        <a href="{{ url('/home') }}" data-target="#dashboard" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-dashboard2"></i></span>
                            <span class="text">Dashboard</span>                            
                        </a>                        
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-aid"></i></span>
                            <span class="text">Medicamento</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Medicamento</li>
                            <li >
                                <a href="{{ route('medicamento.create') }}">
                                    <span class="text">Novo Medicamento</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('medicamento.index') }}">
                                    <span class="text">Listar Medicamentos</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#error" data-parent="#topmenu">
                                    <span class="text">Forma de Medicamento</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="error" class="submenu collapse ">
                                    <li >
                                        <a href="{{ route('forma.create') }}"><span class="text">Nova Forma</span></a>
                                    </li>
                                    <li >
                                        <a href="{{ route('forma.index') }}"><span class="text">Listar Formas</span></a>
                                    </li>

                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li> 
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-calendar6"></i></span>
                            <span class="text">Entrada</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="form" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Entrada</li>
                            <li >
                                <a href="{{ route('entrada.create') }}">
                                    <span class="text">Nova Entrada</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('entrada.index') }}">
                                    <span class="text">Listar Entradas</span>
                                </a>
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class="ico-cart6"></i></span>
                            <span class="text">Venda</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Venda</li>
                            <li >
                                <a href="{{ route('carrinho.index') }}">
                                    <span class="text">Pesquidar Medicamento</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('carrinho.create') }}">
                                    <span class="text">Ver Carrinho</span>
                                </a>
                            </li>
                            <li>
                                <a href="table-datatable.html">
                                    <span class="text">Vendas Realizadas</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="table-datatable.html">
                                    <span class="text">Datatable</span>
                                </a>
                            </li>                            
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
                            <span class="figure"><i class="ico-stack3"></i></span>
                            <span class="text">Stock</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="page" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Stock</li>
                            <li >
                                <a href="page-task.html">
                                    <span class="text">Task</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="page-starter.html">
                                    <span class="text">Blank / starter</span>
                                </a>
                            </li>

                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#timeline" data-parent="#page">
                                    <span class="text">Timeline</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="timeline" class="submenu collapse ">
                                    <li >
                                        <a href="page-timeline-v1.html"><span class="text">Version 1</span></a>
                                    </li>
                                    <li >
                                        <a href="page-timeline-v2.html"><span class="text">Version 2</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#chart" data-parent=".topmenu">
                            <span class="figure"><i class="ico-stats-up"></i></span>
                            <span class="text">Relatórios</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="chart" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Relatórios</li>
                            <li >
                                <a href="chart-flot.html">
                                    <span class="text">Flot</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>

                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#layout" data-parent=".topmenu">
                            <span class="figure"><i class="ico-user"></i></span>
                            <span class="text">Usuários</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="layout" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Usuários</li>
                            <li >
                                <a href="layout-default.html">
                                    <span class="text">Novo</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-default.html">
                                    <span class="text">Listar Usuários</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#theme" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screwdriver"></i></span>
                            <span class="text">Configurações</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="theme" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Configurações</li>
                            <li >
                                <a href="theme-1.html">
                                    <span class="text">Dados da Empresa</span>
                                </a>
                            </li>
                            <li >
                                <a href="theme-2.html">
                                    <span class="text">Licença</span>
                                </a>
                            </li>                            
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                </ul>
                <!--/ END Template Navigation/Menu -->

                <!-- START Sidebar summary -->

                <!--/ END Sidebar summary -->
            </section>
            <!--/ END Sidebar Container -->
        </aside>
        <!--/ END Template Sidebar (Left) -->


        @yield('content')

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="{{ url('assets/javascript/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/javascript/core.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/javascript/backend/app.js') }}"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="{{ url('assets/plugins/selectize/js/selectize.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/plugins/flot/js/jquery.flot.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/plugins/flot/js/jquery.flot.resize.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/plugins/flot/js/jquery.flot.categories.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/plugins/flot/js/jquery.flot.time.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/plugins/flot/js/jquery.flot.tooltip.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/plugins/flot/js/jquery.flot.spline.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/javascript/backend/pages/dashboard-v1.js') }}"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>