<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/faviconimg/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000000">

    <title>Yplus - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/font-awesome/css/font-awesome47.min.css') }}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">

    <!-- Custom styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->


</head>


<body class="dark">

    <style>
        body {
            max-width: 100%;
            overflow-x: hidden !important;
        }

        .largebtn {
            height: auto;
        }


        /* custom scrollbar */
        ::-webkit-scrollbar {
            width: 20px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #777;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }

        @media (max-width: 767px) {
            body {
                overflow: auto !important;
                -webkit-overflow-scrolling: touch !important;
                padding-bottom: 50px !important;
            }

            .bottom-nav {
                display: block !important;
            }

            .largebtn {
                height: 40px;
                font-size: 18px;
            }
        }
    </style>
    <div style="display:none" id="tkyplus">{{ session('tkyplus') }}</div>
    <!-- container section start -->
    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
                </div>
            </div>

            <!--logo start yplus/yplus.vsmsystem.com/img/Yplus-logo-sm.png-->
            <a href="{{route('home.dashboard')}}" class="logo"><img src="{{ asset('img/Yplus-logo-sm.png') }}"></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>
            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- alert contas a receber start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-signin"></i>
                            <span class="badge bg-warning">3</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">Você tem 2 contas a receber</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon-sitemap"></i></span>
                                    Fabiano [222b]
                                    <span class="small italic pull-right">10/02/2016</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    Patricia [161]
                                    <span class="small italic pull-right">10/02/2016</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">Ver todas as contas</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert contas a receber end-->
                    <!-- alert contas a pagar start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-signout"></i>
                            <span class="badge bg-warning">3</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">Você tem 3 contas a pagar</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Copel / Luz
                                    <span class="small italic pull-right">07/02/2016</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    Aluguel
                                    <span class="small italic pull-right">30/02/2016</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Condomínio
                                    <span class="small italic pull-right">05/02/2016</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    GVT / internet
                                    <span class="small italic pull-right"> 15/02/2016</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert contas a pagar end-->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-calendar-empty"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Greg Martin</span>
                                        <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Bob Mckenzie</span>
                                        <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                        Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Phillip Park</span>
                                        <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Ray Munoz</span>
                                        <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-check"></i>
                                <span class="badge bg-info">5</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                            aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->

                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-globe"></i>
                            <span class="badge bg-info">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img width="30px" alt="" src="{{ session('avatar') ?? asset('img/avatar-mini.jpg') }}">
                            </span>
                            <span class="username">{{ session('name') }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="{{route('home.dashboard')}}">
                            <i class="icon_desktop"></i>
                            <span>Y-Painel</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="index.html">
                            <i class="icon-tasks"></i>
                            <span>Tarefas</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a class="" href="javascript:;">
                            <i class="icon_currency"></i>
                            <span>Financeiro</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                            <span class="label label-info pull-right mail-info ">5</span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="general.html">Contas a pagar</a></li>
                            <li><a class="" href="buttons.html">Contas a receber</a></li>
                            <li><a class="" href="sliders.html">+Despesa</a></li>
                            <li><a class="" href="font_awesome.html">+Receita</a></li>
                            <li><a class="" href="elegant-icon-font.html">Fatura cartão</a></li>
                            <li><a class="" href="grids.html">Gerenciar</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a class="" href="javascript:;">
                            <i class="icon-edit"></i>
                            <span>Estudos</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="general.html">Faculdade</a></li>
                            <li><a class="" href="buttons.html">Cursos</a></li>
                            <li><a class="" href="sliders.html">Autodidata</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a class="" href="javascript:;">
                            <i class="icon-heart"></i>
                            <span>Saúde</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="general.html">Alimentação</a></li>
                            <li><a class="" href="buttons.html">Acompanhamento</a></li>
                            <li><a class="" href="sliders.html">Remédios</a></li>
                            <li><a class="" href="sliders.html">Exames</a></li>
                            <li><a class="" href="sliders.html">Prevenção</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="calendar.html">
                            <i class="icon_calendar"></i>
                            <span>Calendário</span>

                        </a>
                    </li>
                    <li>
                        <a class="" href="{{route('mercado.index')}}">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Mercado</span>

                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('carro.index') }}">
                            <i class="fa fa-car"></i>
                            <span>Carros</span>

                        </a>
                    </li>
                    <li>
                        <a class="" href="desejos.html">
                            <i class="fa fa-gift"></i>
                            <span>Desejos</span>

                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('logout.perform') }}">
                            <i class="s"></i>
                            <span>Logout</span>

                        </a>
                    </li>
                    <span style="display:none;">
                        <li class="active">
                            <a class="" href="index.html">

                                <br><br>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_desktop"></i>
                                <span>UI Kit</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="general.html">General</a></li>
                                <li><a class="" href="buttons.html">Buttons</a></li>
                                <li><a class="" href="sliders.html">Sliders</a></li>
                                <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                                <li><a class="" href="elegant-icon-font.html">Elegant Icon Font</a></li>
                                <li><a class="" href="grids.html">Grids</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="widgets.html">
                                <i class="icon_genius"></i>
                                <span>Widgets</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_piechart"></i>
                                <span>Charts</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="chart-chartjs.html">ChartJs</a></li>
                                <li><a class="" href="chart-morris.html">Morris</a></li>
                                <li><a class="" href="chart-sparkline.html">Sparkline</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_document_alt"></i>
                                <span>Form Stuff</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="form_component.html">Form Components</a></li>

                                <li><a class="" href="form_validation.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="inbox.html">
                                <i class="icon_mail_alt"></i>
                                <span>Mail </span>
                                <span class="label label-danger pull-right mail-info badge">2</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="calendar.html">
                                <i class="icon_calendar"></i>
                                <span>Calendar</span>
                                <span class="label label-danger pull-right mail-info badge">5</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_table"></i>
                                <span>Tables</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="basic_table.html">Basic Table</a></li>
                                <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_documents_alt"></i>
                                <span>Pages</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="profile.html">Profile</a></li>
                                <li><a class="" href="invoice.html">Invoice</a></li>
                                <li><a class="" href="timeline.html">Timeline</a></li>
                                <li><a class="" href="chat.html">Chat</a></li>
                                <li><a class="" href="faqs.html">FAQs</a></li>
                                <li><a class="" href="blank.html">Blank Page</a></li>
                                <li><a class="" href="404.html">404 Error</a></li>
                                <li><a class="" href="500.html">500 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="login.html">
                                <i class="icon_key_alt"></i>
                                <span>Login Page</span>
                            </a>
                        </li>
                    </span>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
        </section>

    </section>

    <!--main content end-->

    <!-- container section start -->


    <style>
        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #313131;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            z-index: 999;
            box-sizing: border-box;
        }

        .bottom-nav ul {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 55px;
            margin: 0;
            padding: 0;
        }

        .bottom-nav li {
            list-style: none;
        }

        .bottom-nav button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            padding: 8px;
            border: none;
            background-color: transparent;
            color: #ddd;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
        }

        .bottom-nav button i {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .bottom-nav button.active {
            color: #00a8cc;
        }
    </style>
    <nav class="bottom-nav">
        <ul>
            <li><button><i class="fa fa-home"></i><span>Home</span></button></li>
            <li><button><i class="fa fa-gift"></i><span>Desejos</span></button></li>
            <li><button><i class="fa fa-child"></i><span>Kids</span></button></li>
            <li><button><i class="fa fa-plus"></i><span>Entrada</span></button></li>
            <li><button><i class="fa fa-credit-card"></i><span>Saída</span></button></li>
        </ul>
    </nav>

    <!-- javascripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- nice scroll -->
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <!-- jQuery full calendar -->
    <script src="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.min.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('js/calendar-custom.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('js/jquery.customSelect.min.js')}}"></script>
    <!--custome script for all page-->
    <script src="{{asset('js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('js/sparkline-chart.js')}}"></script>
    <script src="{{asset('js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('app.js')}}"></script>

    <script>
        //knob
        $(function() {
            $(".knob").knob({
                'draw': function() {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });
    </script>

</body>

</html>
