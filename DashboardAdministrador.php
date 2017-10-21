<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin SVG</title>
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
                <div class="logo" style="display:block"><span class="theme_color">TSE</span> Board</div>

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
                
                <div class="top_right_bar">
                    <div class="top_right">
                        <div class="top_right_menu">
                            
                        </div>
                    </div>
                    <div class="user_admin dropdown">
                        
                        <ul class="dropdown-menu">
                            <div class="top_pointer"></div>
                            <li> <a href="profile.html"><i class="fa fa-user"></i> Perfil</a> </li>
                            <li> <a href="help.html"><i class="fa fa-question-circle"></i> Ayuda</a> </li>
                            <li> <a href="settings.html"><i class="fa fa-cog"></i> Configuracion </a></li>
                            <li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
                        </ul>
                    </div>

                   

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
                                    <a href="DashboardAdministrador.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Dashboard</b> </a>
                                </li>
                                <li>
                                    <a href="Elecciones.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Elecciones</b> </a>
                                </li>
                                <li>
                                    <a href="Partidos.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Partidos</b> </a>
                                </li>
                                <li>
                                    <a href="Candidatos.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Candidatos</b> </a>
                                </li>
                                <li>
                                    <a href="Resultados.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Resultados</b> </a>
                                </li>
                                <li>
                                    <a href="Ciudadanos.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ciudadanos</b> </a>
                                </li>
                                <li>
                                    <a href="votacionesAdmin.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Emitir Votos</b> </a>
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
                        <h1>Tribunal Supremo Electoral</h1>
                        <h2 class="">Referencia grafica del estado de las votaciones...</h2>
                    </div>
                    <div class="pull-right">
                        <ol class="breadcrumb">
                            <li><a href="http://www.google.com">TSE</a></li>
                            <li><a href="http://www.google.com">AplicacionesWeb</a></li>
                            <li class="active">Sistema de Votaciones</li>
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
                                    <div class="info green_symbols"><i class="fa fa-home icon"></i></div>
                                    <span>Partidos registrados </span>

                                    <?php
                                                        include 'Auth.php';
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $consulta = "SELECT count(*) FROM sistema1.inscri_partido;";
                                                       
                                                        $result = $conn->query($consulta);
                                                        if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            
                                                        echo '<h1 class="bolded">'.$row['count(*)'].'</h1>';
                                                        
                                                        }
                                                      }
                                                        ?>
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
                                    <div class="info blue_symbols"><i class="fa fa-archive icon"></i></div>
                                    <span>Ciudadanos Registrados</span>
                                    <!-- //Consulta con los ciudadanos regustrados y devolver valor -->

                                    
                                                        <?php
                                                        include 'Auth.php';
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $consulta = "SELECT count(*) FROM sistema1.ciudadanos where estado = 1;";
                                                       
                                                        $result = $conn->query($consulta);
                                                        if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            
                                                        echo '<h1 class="bolded">'.$row['count(*)'].'</h1>';
                                                        
                                                        }
                                                      }
                                                        ?>
                                    

                                    

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
                                    <div class="info red_symbols"><i class="fa fa-table icon"></i></div>
                                    <span>Votos Emitidos</span>
                                    <!-- Consulta de Votos y muestra el valor -->

                                    <?php
                                                        include 'Auth.php';
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $consulta = "SELECT count(*)  FROM sistema1.voto;";
                                                       
                                                        $result = $conn->query($consulta);
                                                        if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            
                                                        echo '<h1 class="bolded">'.$row['count(*)'].'</h1>';
                                                        
                                                        }
                                                      }
                                                        ?>

                                   

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
                                    <span> Candidatos Registrados </span>
                                    <!-- //conteo de candidoas totales para mostra -->

                                    <?php
                                                        include 'Auth.php';
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $consulta = "SELECT count(*) FROM sistema1.candidatos;";
                                                       
                                                        $result = $conn->query($consulta);
                                                        if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            
                                                        echo '<h1 class="bolded">'.$row['count(*)'].'</h1>';
                                                        
                                                        }
                                                      }
                                                        ?>
                                    
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
                </div>

                  
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