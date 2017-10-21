<?php
include 'Auth.php';
// include 'LQS_EUQ/CandidatosVotos.php';


if (!empty($_POST['Registrar'])) {
    
    $Presidente = $_POST['box-presidente'];
    $Alcalde = $_POST['box-alcalde'];
    $Diputado = $_POST['box-diputado'];
    
   
    
    //echo $FNameF."<br>".$FNameL."<br>".$FUserName."<br>".$FEmail."<br>".$FEmailR."<br>".$FPassword."<br>".$FPasswordR ;

        
            if($Presidente == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Seleccione al Presidente para votar </div>';
                // echo 'Nombre Vacio' ;
            }else if($Alcalde == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Seleccione al alcalde para votar </div>';
                // echo 'Apellido Vacio' ;
            }else if($Diputado == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Seleccione al Diputado para votar </div>';
                // echo 'Usuario Vacio' ;
            
            }else{
                                      
                     $conn = new mysqli($servername,$username,$password,$dbname);
         
                     if ($conn->connect_error){
                         die("Error en la conexion: ".$conn->connect_error);
                     }
                                                                                                                                                       
                     $sql ="INSERT INTO `sistema1`.`voto` (`Precidente`, `Alcalde`, `Diputado`) VALUES ('".$Presidente."','".$Alcalde."','".$Diputado."')";
         
                     if ($conn->query($sql) === TRUE) {
                         $mensajeExito = '<div class="alert alert-danger" role="alert">
                         <button type="button" class=close data-dismiss="myModal1">&times;</button>
                         <strong>Su voto se ha registrado correctamente, ya puede regresar a su casa!</strong>
                          </div>';
                        
                     }
                     else{
                         
                         echo "Error: " .$sql."<br>".$conn->error;
                         $error = '<div class="alert alert-danger" role="alert"><p><strong>No se guardaron los datos </div>';
                     }
          }
    }

?>
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
    <link rel="stylesheet" href="css/custom2.css"/>
    <link rel="stylesheet" href="css/EstiloTablas.css"/>
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
                                    <a href="DashboardUsuario.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b  class="theme_color">Emitir Votos</b> </a>
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
                        <h1>Votaciones 2017</h1>
                        <h2 class="">Modulo de Votaciones</h2>
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
                   
                <form role="form" action="" method="post" class="">
                   <!-- Parte del contenido -->
                        <!-- Primera Seccion -->


                        <div class="row">
                        
                            <div class="col-md-6">
                                <div class="myform-all Color_Claro">
                                    <div class="saltito"><h1></h1></div>
                                    <h3>Seleción Presidencial</h3>
                                    
                                    
                                    <!-- Presidentes -->
                                    <div class="saltito"><h1></h1></div>
                                        <div >
                                            <!-- div para el contenedor general del candidato -->
                                             
                                            <!-- Finaliza el div del contenido general -->

                                            
                                                    <?php
                                                     //Crear un cilco que imprima a cada presidente, su foro e informacion   
                                                        
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $municipios = "SELECT Nombre, Apellido, Partido FROM sistema1.candidatos where Cargo='presidente';"; 
                                                                            
                                                        $result = $conn->query($municipios);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    // echo '<option value="'.utf8_encode($row['Nombre'].'">'.($row['Nombre']).'</option>';

                                                                    echo '<div class="myform-all Color_Claro col-md-6">
                                                                    <br>
                                                                    <div class="myform-all Color_Claro col-md-12 ">
                                                                    <br>
                                                                    <img src="images/'.utf8_encode($row['Nombre']).'.png" width="100px" height="100px" style="margin-left: 15%;">
                                                                   
                                                                    <img src="images/'.utf8_encode($row['Partido']).'.png" width="100px" height="100px" style="margin-left: 5%;>
                                                                    
                                                                    </div>
                                                                    
                                                                    <div>
                                                                    
                                                                    <h2 class="active">Información:</h2>    
                                                                    <li class="active">Nombre: '.utf8_encode($row['Nombre']).' </li>
                                                                    <li class="active">Apellido: '.utf8_encode($row['Apellido']).' </li>
                                                                    <li class="active">Partido: '.utf8_encode($row['Partido']).' </li>
                                                                    <br>
                                                                        <div>
                                                                            <label class="ng-binding">
                                                                                <input name="box-presidente" ng-model="properties.selectedValue" ng-value="ctrl.getValue(option)" ng-required="properties.required" ng-disabled="properties.disabled" class="ng-valid ng-valid-required ng-dirty ng-touched" value="'.utf8_encode($row['Nombre']).'" type="radio">
                                                                                Seleccionar a '.utf8_encode($row['Nombre']).'
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div> ';
                                                                }
                                                            }
                                                    ?>
                                              
                                        </div>
                                     </div>
                                </div>
                                <!-- *Seccuion  de Alcaldes* -->
                                  
                                <div class="col-md-6">
                                    <div class="myform-all Color_Claro">
                                        <div class="saltito"><h1></h1></div>
                                        <h3>Selección de Alcalde Municipal</h3>
                                        <div class="saltito"><h1></h1></div>  
                                            <div>
                                            <?php
                                                     //Crear un cilco que imprima a cada presidente, su foro e informacion   
                                                        
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $municipios = "SELECT Nombre, Apellido, Partido FROM sistema1.candidatos where Cargo='Alcalde';"; 
                                                                            
                                                        $result = $conn->query($municipios);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    // echo '<option value="'.utf8_encode($row['Nombre'].'">'.($row['Nombre']).'</option>';

                                                                    echo '<div class="myform-all Color_Claro col-md-6">
                                                                    <br>
                                                                    <div class="myform-all Color_Claro col-md-12 ">
                                                                    <br>
                                                                    <img src="images/'.utf8_encode($row['Nombre']).'.png" width="100px" height="100px" style="margin-left: 15%;">
                                                                   
                                                                    <img src="images/'.utf8_encode($row['Partido']).'.png" width="100px" height="100px" style="margin-left: 5%;>
                                                                    
                                                                    </div>
                                                                    <div class="saltito"><h1></h1></div>
                                                                    <div>
                                                                    <h2 class="active">Información:</h2>    
                                                                    <li class="active">Nombre: '.utf8_encode($row['Nombre']).' </li>
                                                                    <li class="active">Apellido: '.utf8_encode($row['Apellido']).' </li>
                                                                    <li class="active">Partido: '.utf8_encode($row['Partido']).' </li>
                                                                    <br>
                                                                        <div>
                                                                            <label class="ng-binding">
                                                                                <input name="box-alcalde" ng-model="properties.selectedValue" ng-value="ctrl.getValue(option)" ng-required="properties.required" ng-disabled="properties.disabled" class="ng-valid ng-valid-required ng-dirty ng-touched" value="'.utf8_encode($row['Nombre']).'" type="radio">
                                                                                Seleccionar a '.utf8_encode($row['Nombre']).'
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div> ';
                                                                }
                                                            }
                                                    ?>
                                            </div>
                                    </div>
                                </div>
                                <!-- *Fin Seccion Alcaldes*  -->
                        </div>
                        <!-- Fin Primera Seccion -->
                        <div class="saltito"><h1></h1></div>
                        <!-- Segunda Seccion -->
                        <div class="row">

                            <div class="col-md-12">
                                <div class="myform-all Color_Claro">
                                    <div class="saltito"><h1></h1></div>
                                    <h3>Selección de Diputados</h3>
                                    <div class="saltito"><h1></h1></div>
                                            <div>
                                            <?php
                                                     //Crear un cilco que imprima a cada presidente, su foro e informacion   
                                                        
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $municipios = "SELECT Nombre, Apellido, Partido FROM sistema1.candidatos where Cargo='diputado';"; 
                                                                            
                                                        $result = $conn->query($municipios);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    // echo '<option value="'.utf8_encode($row['Nombre'].'">'.($row['Nombre']).'</option>';

                                                                    echo '<div class="myform-all Color_Claro col-md-6">
                                                                    <br>
                                                                    <div class="myform-all Color_Claro col-md-12 ">
                                                                    <br>
                                                                    <img src="images/'.utf8_encode($row['Nombre']).'.png" width="100px" height="100px" style="margin-left: 15%;">
                                                                   
                                                                    <img src="images/'.utf8_encode($row['Partido']).'.png" width="100px" height="100px" style="margin-left: 5%;>
                                                                    
                                                                    </div>
                                                                    <div class="saltito"><h1></h1></div>
                                                                    <div>
                                                                    <h2 class="active">Información:</h2>    
                                                                    <li class="active">Nombre: '.utf8_encode($row['Nombre']).' </li>
                                                                    <li class="active">Apellido: '.utf8_encode($row['Apellido']).' </li>
                                                                    <li class="active">Partido: '.utf8_encode($row['Partido']).' </li>
                                                                    <br>
                                                                        <div>
                                                                            <label class="ng-binding">
                                                                                <input name="box-diputado" ng-model="properties.selectedValue" ng-value="ctrl.getValue(option)" ng-required="properties.required" ng-disabled="properties.disabled" class="ng-valid ng-valid-required ng-dirty ng-touched" value="'.utf8_encode($row['Nombre']).'" type="radio">
                                                                                Seleccionar a '.utf8_encode($row['Nombre']).'
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div> ';
                                                                }
                                                            }
                                                    ?>
                                            </div>
                                </div>
                            </div>
                            
                            <div  data-effect="tada" class="effect-button"><input  type="submit" name="Registrar" value="Registrar" class="effect-button"></input></div>                            
                       
                            </form>
                        </div>
                        <!-- Fin Segunda Seccion -->
                        
                       
                   <!-- Fin del Contenido -->

                  
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
    <script src="js/Usuarios.js"></script>
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

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonimus"></script>
        <script src="https://cdnj.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUHKKDx6Qin1DkWx51bBrb" crossorigin="anonimus"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonimus"></script>
        <script src="https://cdnj.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUHKKDx6Qin1DkWx51bBrb" crossorigin="anonimus"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/jquery-2.1.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/common-script.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script src="js/script.min.js"></script>
        <script src="js/animated.js" type="text/javascript"></script>
        <!-- <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-48105801-1', 'creativico.com');
            ga('send', 'pageview');
        </script> -->



        <script src="js/jPushMenu.js"></script>
        <script src="js/side-chats.js"></script> 


</body>

</html>