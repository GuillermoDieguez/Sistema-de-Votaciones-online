<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DATAGX DashBoard</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="plugins/kalendar/kalendar.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
    <link href="plugins/morris/morris.css" rel="stylesheet" />
</head>

<body class="dark_theme  fixed_header left_nav_fixed">
    <div class="wrapper">
        <!--\\\\\\\ wrapper Start \\\\\\-->
        <div class="header_bar">
            <!--\\\\\\\ header Start \\\\\\-->
            <div class="brand">
                <!--\\\\\\\ brand Start \\\\\\-->
                <div class="logo" style="display:block"><span class="theme_color">DATAGX</span> Board</div>

            </div>
            <!--\\\\\\\ brand end \\\\\\-->
            <div class="header_top_bar ">
                <!--\\\\\\\ header top bar start \\\\\\-->
                <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
                <div class="top_left">
                    <div class="top_left_menu">
                        <ul>
                            <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
                                <ul class="drop_down_task dropdown-menu" style="margin-top:50px">
                                    <div class="top_left_pointer"></div>
                                    <li>
                                        <div class="checkbox">
                                            <label>
                    <input type="checkbox" name="remember">
                    Recordarme </label>
                                        </div>
                                    </li>
                                    <li> <a href="help.html"><i class="fa fa-question-circle"></i> Ayuda</a> </li>
                                    <li> <a href="settings.html"><i class="fa fa-cog"></i> Configuración </a></li>
                                    <li> <a href="login.php"><i class="fa fa-power-off"></i> LogOut</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> Nueva Tarea</span> </a>
                <div class="top_right_bar">
                    <div class="top_right">
                        <div class="top_right_menu">
                            <ul>
                                <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tareas <span class="badge badge">8</span> </a>
                                    <ul class="drop_down_task dropdown-menu">
                                        <div class="top_pointer"></div>
                                        <li>
                                            <p class="number">Tienes 7 Tareas Pendientes</p>
                                        </li>
                                        <li>
                                            <a href="task.html" class="task">
                                                <div class="green_status task_height" style="width:80%;"></div>
                                                <div class="task_head"> <span class="pull-left">Toma de Inventarios</span> <span class="pull-right green_label">80%</span> </div>
                                                <div class="task_detail">Pendiente la toma de inventario</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="task.html" class="task">
                                                <div class="yellow_status task_height" style="width:50%;"></div>
                                                <div class="task_head"> <span class="pull-left">Instalacion de Camaras</span> <span class="pull-right yellow_label">50%</span> </div>
                                                <div class="task_detail">Instalacion de camaras de la Bodega</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="task.html" class="task">
                                                <div class="blue_status task_height" style="width:70%;"></div>
                                                <div class="task_head"> <span class="pull-left">Mantenimiento Preventivo</span> <span class="pull-right blue_label">70%</span> </div>
                                                <div class="task_detail">Servidor de Base de Datos</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="task.html" class="task">
                                                <div class="red_status task_height" style="width:85%;"></div>
                                                <div class="task_head"> <span class="pull-left">Desarrollo de APP</span> <span class="pull-right red_label">85%</span> </div>
                                                <div class="task_detail">App de Inventario</div>
                                            </a>
                                        </li>
                                        <li> <span class="new"> <a href="task.html" class="pull_left">Agregar Tarea</a> <a href="task.html" class="pull-right">Ver Tareas</a> </span> </li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Correo Electronico <span class="badge badge color_1">4</span> </a>
                                    <ul class="drop_down_task dropdown-menu">
                                        <div class="top_pointer"></div>
                                        <li>
                                            <p class="number">Tienes 4 Correos</p>
                                        </li>
                                        <li>
                                            <a href="readmail.html" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span>                                                </a>
                                        </li>
                                        <li>
                                            <a href="readmail.html" class="mail"> <span class="photo"><img src="images/us-name.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span>                                                </a>
                                        </li>
                                        <li>
                                            <a href="readmail.html" class="mail red_color"> <span class="photo"><img src="images/us-name.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span>                                                </a>
                                        </li>
                                        <li>
                                            <a href="readmail.html" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span>                                                </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Herramientas <span class="badge badge color_2">6</span> </a>
                                    <div class="notification_drop_down dropdown-menu">
                                        <div class="top_pointer"></div>
                                        <div class="box">
                                            <a href="inbox.html"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a>
                                        </div>
                                        <div class="box">
                                            <a href="calendar.html"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendario</span> </a>
                                        </div>
                                        <div class="box">
                                            <a href="maps.html"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Mapas</span> </a>
                                        </div>
                                        <div class="box">
                                            <a href="todo.html"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a>
                                        </div>
                                        <div class="box">
                                            <a href="task.html"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tareas</span> </a>
                                        </div>
                                        <div class="box">
                                            <a href="timeline.html"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="user_admin dropdown">
                        <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname">David Orantes</span> <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <div class="top_pointer"></div>
                            <li> <a href="profile.html"><i class="fa fa-user"></i> Perfil</a> </li>
                            <li> <a href="help.html"><i class="fa fa-question-circle"></i> Ayuda</a> </li>
                            <li> <a href="settings.html"><i class="fa fa-cog"></i> Configuracion </a></li>
                            <li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
                        </ul>
                    </div>

                    <!-- <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a> -->

                </div>
            </div>
            <!--\\\\\\\ header top bar end \\\\\\-->
        </div>
        <!--\\\\\\\ header end \\\\\\-->
        <div class="inner">
            <!--\\\\\\\ inner start \\\\\\-->
            <div class="left_nav">

                <!--\\\\\\\left_nav start \\\\\\-->
                <div class="search_bar"> <i class="fa fa-search"></i>
                    <input name="" type="text" class="search" placeholder="Buscar..." />
                </div>
                <div class="left_nav_slidebar">
                    <ul>
                        <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
                            <ul class="opened" style="display:block">
                                <li>
                                    <a href="index.html"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Dashboard</b> </a>
                                </li>
                                <li>
                                    <a href="Config.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Configuracion</b> </a>
                                </li>
                                <li>
                                    <a href="Clientes.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Clientes</b> </a>
                                </li>
                                <li>
                                    <a href="Tiendas.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tiendas</b> </a>
                                </li>
                                <li>
                                    <a href="Productos.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Productos</b> </a>
                                </li>
                                <li>
                                    <a href="Calendario.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Calendario</b> </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--\\\\\\\left_nav end \\\\\\-->
            <div class="contentpanel">
                <!--\\\\\\\ contentpanel start\\\\\\-->
                <!-- Inicia la barra de Tutulo en right -->
                <div class="pull-left breadcrumb_admin clear_both">
                    <div class="pull-left page_title theme_color">
                        <h1>Estatus de Inventario</h1>
                        <h2 class="">Referencia grafica del Inventario...</h2>
                    </div>
                    <div class="pull-right">
                        <ol class="breadcrumb">
                            <li><a href="#">DataGX</a></li>
                            <li><a href="#">DASHBOARD</a></li>
                            <li class="active">Inventarios</li>
                        </ol>
                    </div>
                </div>
                <!-- Finaliza Barra de Titulo en right -->
                <div class="container clear_both padding_fix">
                    <!--\\\\\\\ container  start \\\\\\-->
                    <div class="row">
                        <!-- Primer Componente   -->
                        <div class="col-sm-3 col-sm-6">
                            <div class="information green_info">
                                <div class="information_inner">
                                    <div class="info green_symbols"><i class="fa fa-flag-o icon"></i></div>
                                    <span>Articulos Contados </span>
                                    <h1 class="bolded">12,254K</h1>
                                    <div class="infoprogress_green">
                                        <div class="greenprogress"></div>
                                    </div>

                                    <div class="pull-right" id="work-progress1">
                                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Primer Componente -->
                        <!-- Segundo Elementeo -->
                        <div class="col-sm-3 col-sm-6">
                            <div class="information blue_info">
                                <div class="information_inner">
                                    <div class="info blue_symbols"><i class="fa fa-edit icon"></i></div>
                                    <span>Articulos Faltantes</span>
                                    <h1 class="bolded">12,254K</h1>
                                    <div class="infoprogress_blue">
                                        <div class="blueprogress"></div>
                                    </div>

                                    <div class="pull-right" id="work-progress2">
                                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Segundo Elemento -->
                        <!-- Tercer Elemento -->
                        <div class="col-sm-3 col-sm-6">
                            <div class="information red_info">
                                <div class="information_inner">
                                    <div class="info red_symbols"><i class="fa fa-gear icon"></i></div>
                                    <span>Articulos Totales</span>
                                    <h1 class="bolded">12,254K</h1>
                                    <div class="infoprogress_red">
                                        <div class="redprogress"></div>
                                    </div>

                                    <div class="pull-right" id="work-progress3">
                                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Tercer Elemento -->
                        <!-- Cuarto Elemento -->
                        <div class="col-sm-3 col-sm-6">
                            <div class="information gray_info">
                                <div class="information_inner">
                                    <div class="info gray_symbols"><i class="fa fa-tachometer icon"></i></div>
                                    <span> Avance Global </span>
                                    <h1 class="bolded">12,254K</h1>
                                    <div class="infoprogress_gray">
                                        <div class="grayprogress"></div>
                                    </div>

                                    <div class="pull-right" id="work-progress4">
                                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Termina Cuarto Elemento -->
                    </div>

                    <!-- Contenedor de la Grafica Animada -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-web">
                                <div class="header">
                                    <h3 class="content-header">Grafica de avance por Tiempo</h3>
                                </div>
                                <div class="porlets-content">
                                    <div id="graph"></div>
                                </div>
                                <!--/porlets-content-->
                            </div>
                            <!--/block-web-->
                        </div>
                        <!--/col-md-12-->
                    </div>
                    <!--/row-->
                    <!-- Fin Contenedor de la Grafica Animada -->



                    <div class="row">
                        <div class="col-md-6">
                            <div class="multi-stat-box">
                                <div class="header">
                                    <div class="left">
                                        <h2>Pageviews</h2>
                                        <a><i class="fa fa-chevron-down"></i> </a> </div>
                                    <div class="right">
                                        <h2>NOV 14 - DEC 15</h2>
                                        <div class="percent"><i class="fa fa-angle-double-down"></i> 34%</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="left">
                                        <ul>
                                            <li> <span class="date">Overall</span> <span class="value">1,104</span> </li>
                                            <li class="active"> <span class="date">This week</span> <span class="value">486</span> </li>
                                            <li> <span class="date">Yesterday</span> <span class="value">364</span> </li>
                                            <li> <span class="date">Today</span> <span class="value">254</span> </li>
                                        </ul>
                                    </div>
                                    <div class="right">
                                        <div class="sparkline" data-type="line" data-resize="true" data-height="130" data-width="90%" data-line-width="1" data-line-color="#ddd" data-spot-color="#ccc" data-fill-color="" data-highlight-line-color="#ddd" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455,150,530,140]"></div>
                                        <div class="ticket-lebel">SUN</div>
                                        <div class="ticket-lebel">MON</div>
                                        <div class="ticket-lebel">TUE</div>
                                        <div class="ticket-lebel">WED</div>
                                        <div class="ticket-lebel">THR</div>
                                        <div class="ticket-lebel">FRI</div>
                                        <div class="ticket-lebel">SAT</div>
                                        <div class="ticket-lebel">SUN</div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="chart">
                                        <div class="heading"> <span>June</span> <strong>15 Days | 57%</strong> </div>
                                        <div id="barchart"></div>
                                    </div>
                                </div>
                                <div class="chart-tittle"> <span class="title text-muted">Total Earning</span> <span class="value-pie text-muted">$, 87,34,577</span> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>Inventarios Realizados</h4>
                                </div>
                                <div class="panel-body">
                                    <div id="hero-graph" class="graph"></div>
                                </div>
                            </div>
                        </div>
                    </div>














                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="block-web green-bg-color">
                                <h3 class="content-header ">Tareas Más importantes</h3>
                                <div class="porlets-content">
                                    <ul class="list-group task-list no-margin collapse in">
                                        <li class="list-group-item green-light-bg-color">
                                            <label class="label-checkbox inline">
                    <input type="checkbox" checked="" class="task-finish">
                    <span class="custom-checkbox"></span> </label> New frontend layout <span class="pull-right"> <a class="task-del" href="#"><i class="fa fa-times"></i></a> </span> </li>
                                        <li class="list-group-item">
                                            <label class="label-checkbox inline">
                    <input type="checkbox" class="task-finish">
                    <span class="custom-checkbox"></span> </label> Windows Phone App <span class="pull-right"> <a class="task-del" href="#"><i class="fa fa-times"></i></a> </span> </li>
                                        <li class="list-group-item">
                                            <label class="label-checkbox inline">
                    <input type="checkbox" class="task-finish">
                    <span class="custom-checkbox"></span> </label> Mobile Development <span class="pull-right"> <a class="task-del" href="#"><i class="fa fa-times"></i></a> </span> </li>
                                        <li class="list-group-item">
                                            <label class="label-checkbox inline">
                    <input type="checkbox" class="task-finish">
                    <span class="custom-checkbox"></span> </label> SEO Optimisation <span class="label label-warning m-left-xs">1:30PM</span> <span class="pull-right"> <a class="task-del" href="#"><i class="fa fa-times"></i></a> </span>                                            </li>
                                        <li class="list-group-item">
                                            <label class="label-checkbox inline">
                    <input type="checkbox" class="task-finish">
                    <span class="custom-checkbox"></span> </label> Windows Phone App <span class="pull-right"> <a class="task-del" href="#"><i class="fa fa-times"></i></a> </span> </li>
                                        <li class="list-group-item">
                                            <label class="label-checkbox inline">
                    <input type="checkbox" class="task-finish">
                    <span class="custom-checkbox"></span> </label> Bug Fixes <span class="label label-danger m-left-xs">4:40PM</span> <span class="pull-right"> <a class="task-del" href="#"><i class="fa fa-times"></i></a> </span>                                            </li>
                                        <form class="form-inline margin-top-10" role="form">
                                            <input type="text" class="form-control" placeholder="Enter tasks here...">
                                            <button class="btn btn-default btn-warning pull-right" type="submit"><i class="fa fa-plus"></i> Add Task</button>
                                        </form>
                                    </ul>
                                    <!-- /list-group -->
                                </div>
                                <!--/porlets-content-->
                            </div>
                            <!--/block-web-->
                        </div>
                        <!--/col-md-4-->
                        <div class="col-md-4 ">
                            <div class="block-web">
                                <h3 class="content-header">Notas</h3>
                                <div class="block widget-notes">
                                    <div contenteditable="true" class="paper"> Send e-mail to supplier<br>
                                        <s>Conference at 4 pm.</s><br>
                                        <s>Order a pizza</s><br>
                                        <s>Buy flowers</s><br> Buy some coffee.<br> Dinner at Plaza.<br> Take Alex for walk.<br> Buy some coffee.<br>
                                    </div>
                                </div>
                                <!--/widget-notes-->
                            </div>
                            <!--/block-web-->
                        </div>
                        <!--/col-md-4 -->
                        <div class="col-md-4 ">
                            <div class="kalendar"></div>
                            <div class="list-group">
                                <a class="list-group-item" href="#"> <span class="badge bg-danger">7:50</span> Consectetuer </a>
                                <a class="list-group-item" href="#"> <span class="badge bg-success">10:30</span> Lorem ipsum dolor sit amet </a>
                                <a class="list-group-item" href="#"> <span class="badge bg-light">11:40</span> Consectetuer adipiscing </a>
                            </div>
                            <!--/calendar end-->
                        </div>
                        <!--/col-md-4 end-->
                    </div>
                    <!--/row end-->





                    <!--row start-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="block-web">
                                <h3 class="content-header"> Estatus Rapido
                                    <div class="button-group pull-right" data-toggle="buttons">
                                        <a href="javascript:;" class="btn active border-gray right-margin"> <span class="button-content">
              
              Top Esta semana </span> </a>
                                        <a href="javascript:;" class="btn border-gray right-margin"> <span class="button-content">
          
              Referente </span> </a>
                                        <a href="javascript:;" class="btn border-gray"> <span class="button-content">
             
              Otros </span> </a>
                                    </div>
                                    <!--/button-group-->
                                </h3>
                                <div class="custom-bar-chart">
                                    <ul class="y-axis">
                                        <li><span>100</span></li>
                                        <li><span>80</span></li>
                                        <li><span>60</span></li>
                                        <li><span>40</span></li>
                                        <li><span>20</span></li>
                                        <li><span>0</span></li>
                                    </ul>
                                    <div class="bar">
                                        <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">30%</div>
                                        <div class="title">Ene</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar">
                                        <div class="value tooltips bar-bg-color" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                                        <div class="title">Feb</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar ">
                                        <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                                        <div class="title">Mar</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar ">
                                        <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                                        <div class="title">Abr</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar">
                                        <div class="value tooltips bar-bg-color" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                                        <div class="title">May</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar ">
                                        <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                                        <div class="title">Jun</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar">
                                        <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                                        <div class="title">Jul</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar">
                                        <div class="value tooltips" data-original-title="35%" data-toggle="tooltip" data-placement="top">35%</div>
                                        <div class="title">Ago</div>
                                    </div>
                                    <!--/bar-->

                                    <div class="bar ">
                                        <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                                        <div class="title">Sep</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar">
                                        <div class="value tooltips bar-bg-color" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                                        <div class="title">Oct</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar ">
                                        <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                                        <div class="title">Nov</div>
                                    </div>
                                    <!--/bar-->
                                    <div class="bar">
                                        <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                                        <div class="title">Dic</div>
                                    </div>
                                    <!--/bar-->


                                </div>
                                <!--/custom-bar-chart-->
                            </div>
                            <!--/block-web-->
                        </div>
                        <!--/col-md-8-->

                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>Sabores mas populares</h4>
                                </div>
                                <div class="panel-body">
                                    <div id="hero-donut" class="graph"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!--row end-->


                </div>
                <!--\\\\\\\ container  end \\\\\\-->
            </div>
            <!--\\\\\\\ content panel end \\\\\\-->
        </div>
        <!--\\\\\\\ inner end\\\\\\-->
    </div>
    <!--\\\\\\\ wrapper end\\\\\\-->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
                </div>
                <div class="modal-body"> content </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- sidebar chats -->
    <nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
        <div class="header">
            <input type="text" class="form-control chat-search" placeholder=" Search">
        </div>
        <div href="#" class="sub-header">
            <div class="icon"><i class="fa fa-user"></i></div>
            <p>Online (4)</p>
        </div>
        <div class="content">
            <p class="title">Family</p>
            <ul class="nav nav-pills nav-stacked contacts">
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
                <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
            </ul>

            <p class="title">Friends</p>
            <ul class="nav nav-pills nav-stacked contacts">
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
                <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
            </ul>

            <p class="title">Work</p>
            <ul class="nav nav-pills nav-stacked contacts">
                <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
            </ul>

        </div>
        <div id="chat-box">
            <div class="header">
                <span>Richard Avedon</span>
                <a class="close"><i class="fa fa-times"></i></a> </div>
            <div class="messages nano nscroller has-scrollbar">
                <div class="content" tabindex="0" style="right: -17px;">
                    <ul class="conversation">
                        <li class="odd">
                            <p>Hi John, how are you?</p>
                        </li>
                        <li class="text-right">
                            <p>Hello I am also fine</p>
                        </li>
                        <li class="odd">
                            <p>Tell me what about you?</p>
                        </li>
                        <li class="text-right">
                            <p>Sorry, I'm late... see you</p>
                        </li>
                        <li class="odd unread">
                            <p>OK, call me later...</p>
                        </li>
                    </ul>
                </div>
                <div class="pane" style="display: none;">
                    <div class="slider" style="height: 20px; top: 0px;"></div>
                </div>
            </div>
            <div class="chat-input">
                <div class="input-group">
                    <input type="text" placeholder="Enter a message..." class="form-control">
                    <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span> </div>
            </div>
        </div>
    </nav>
    <!-- /sidebar chats -->














    <!-- sidebar chats -->
    <nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
        <div class="header">
            <input type="text" class="form-control chat-search" placeholder=" Search">
        </div>
        <div href="#" class="sub-header">
            <div class="icon"><i class="fa fa-user"></i></div>
            <p>Online (4)</p>
        </div>
        <div class="content">
            <p class="title">Family</p>
            <ul class="nav nav-pills nav-stacked contacts">
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
                <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
            </ul>

            <p class="title">Friends</p>
            <ul class="nav nav-pills nav-stacked contacts">
                <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
                <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
            </ul>

            <p class="title">Work</p>
            <ul class="nav nav-pills nav-stacked contacts">
                <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
            </ul>

        </div>
        <div id="chat-box">
            <div class="header">
                <span>Richard Avedon</span>
                <a class="close"><i class="fa fa-times"></i></a> </div>
            <div class="messages nano nscroller has-scrollbar">
                <div class="content" tabindex="0" style="right: -17px;">
                    <ul class="conversation">
                        <li class="odd">
                            <p>Hi John, how are you?</p>
                        </li>
                        <li class="text-right">
                            <p>Hello I am also fine</p>
                        </li>
                        <li class="odd">
                            <p>Tell me what about you?</p>
                        </li>
                        <li class="text-right">
                            <p>Sorry, I'm late... see you</p>
                        </li>
                        <li class="odd unread">
                            <p>OK, call me later...</p>
                        </li>
                    </ul>
                </div>
                <div class="pane" style="display: none;">
                    <div class="slider" style="height: 20px; top: 0px;"></div>
                </div>
            </div>
            <div class="chat-input">
                <div class="input-group">
                    <input type="text" placeholder="Enter a message..." class="form-control">
                    <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span> </div>
            </div>
        </div>
    </nav>
    <!-- /sidebar chats -->



    <div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span>
        <form>
            <legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend>
            <section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label>
                <span id="smart-bgimages" style="display: none;"></span>
            </section>
            <section>
                <h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section>
            <h6 class="margin-top-10 semi-bold margin-bottom-5">Ultimo Skins</h6>
            <section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white"
                    id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5"
                    data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a>
                <a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Light Theme</a>
            </section>
        </form>
    </div>









    <script src="js/jquery-2.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common-script.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.sparkline.js"></script>
    <script src="js/sparkline-chart.js"></script>
    <script src="js/graph.js"></script>
    <script src="js/edit-graph.js"></script>
    <script src="plugins/kalendar/kalendar.js" type="text/javascript"></script>
    <script src="plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>

    <script src="plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
    <script src="plugins/sparkline/jquery.customSelect.min.js"></script>
    <script src="plugins/sparkline/sparkline-chart.js"></script>
    <script src="plugins/sparkline/easy-pie-chart.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="plugins/morris/morris-script.js"></script>





    <script src="plugins/demo-slider/demo-slider.js"></script>
    <script src="plugins/knob/jquery.knob.min.js"></script>




    <script src="js/jPushMenu.js"></script>
    <script src="js/side-chats.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="plugins/scroll/jquery.nanoscroller.js"></script>



</body>

</html>