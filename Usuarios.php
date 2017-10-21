<?php
sleep(2);
include 'Auth.php';
include 'LQS_EUQ/Usuarios App.php';

if (!empty($_POST['Registrar'])) {
    
    $FNameF = $_POST['form-nombre'];
    $FNameL = $_POST['form-apellido'];
    $FUserName = $_POST['form-Usuario'];
    $FPassword = $_POST['form-password'];
    $FTipo = $_POST['form-TipoUsuario'];
    $FPasswordR = $_POST['form-password2'];
    
    //echo $FNameF."<br>".$FNameL."<br>".$FUserName."<br>".$FEmail."<br>".$FEmailR."<br>".$FPassword."<br>".$FPasswordR ;

        
            if($FNameF == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Ingrese el nombre de la persona </div>';
                // echo 'Nombre Vacio' ;
            }else if($FNameL == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Ingrese el apellido de la persona </div>';
                // echo 'Apellido Vacio' ;
            }else if($FUserName == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Ingrese el nombre de Usuario </div>';
                // echo 'Usuario Vacio' ;
            }else if($FPassword == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Ingrese su contraseña </div>';
                // echo 'Clave Vacio' ;
            }else if($FTipo == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Seleccione el tipo de Usuario </div>';
                // echo 'tipo Vacio' ; 
            }else if($FPasswordR == ""){
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Repita La Contraseña </div>';
                // echo 'Clave2  Vacio' ;
            }else{
                if ($FPassword==$FPasswordR) {
                    
                     $conn = new mysqli($servername,$username,$password,$dbname);
         
                     if ($conn->connect_error){
                         die("Error en la conexion: ".$conn->connect_error);
                     }
                     $FPasswordR =md5($FPasswordR);
                     $sql ="INSERT INTO fifo_sertero.usuarios_app (Nombre, Apellido, Nombre_Usuario, Clave_Usuario, TipoUsuario) VALUES ('".$FNameF."','".$FNameL."','".$FUserName."','".$FPasswordR."','".$FTipo."')";
         
                     if ($conn->query($sql) === TRUE) {
                         $mensajeExito = '<div class="alert alert-danger" role="alert">
                         <button type="button" class=close data-dismiss="myModal1">&times;</button>
                         <strong>Registrado Correctamente</strong>
                          </div>';
                        
                     }
                     else{
                         
                         echo "Error: " .$sql."<br>".$conn->error;
                         $error = '<div class="alert alert-danger" role="alert"><p><strong>No se guardaron los datos </div>';
                     }
                 }
                 else{
                     $error = '<div class="alert alert-danger" role="alert"><p><strong>Las contraseñas no son iguales </div>';
                 }
            }

        

        
    }
    




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sertero CBP</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="plugins/kalendar/kalendar.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
    <link href="plugins/morris/morris.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom2.css">
    <link rel="stylesheet" href="css/EstiloTablas.css">
</head>

<body class="dark_theme  fixed_header left_nav_fixed">
    <div class="wrapper">
        <!--\\\\\\\ wrapper Start \\\\\\-->
        <div class="header_bar">
            <!--\\\\\\\ header Start \\\\\\-->
            <div class="brand">
                <!--\\\\\\\ brand Start \\\\\\-->
                <div class="logo" style="display:block"><span class="theme_color">Sertero</span> CBP</div>

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
                        <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname">David Orantes</span> <b class="caret"></b> </a>
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
                                    <a href="DashboardAdministrador.php"> <span>&nbsp;</span> <i class="fa fa-circle "></i> <b>Dashboard</b> </a>
                                </li>
                                <li>
                                    <a href="Bodegas.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Bodegas</b> </a>
                                </li>
                                <li>
                                    <a href="Usuarios.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Usuarios</b> </a>
                                </li>
                                <li>
                                    <a href="Productos.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Productos</b> </a>
                                </li>
                                <li>
                                    <a href="Paletizados.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Paletizados</b> </a>
                                </li>
                                <li>
                                    <a href="Destinos.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Destinos</b> </a>
                                </li>
                                <li>
                                    <a href="Montacarguistas.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Montacarguistas</b> </a>
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
                        <h1>Administracion de Usuarios</h1>
                        <h2 class="">Gestion de usuarios de App...</h2>
                    </div>
                    <div class="pull-right">
                        <ol class="breadcrumb">
                            <li><a href="http://www.sertero.com">Sertero</a></li>
                            <li><a href="http://www.sertero.com/SerteroApps">AplicacionesWeb</a></li>
                            <li class="active">Control de Bodegas y Posiciones</li>
                        </ol>
                    </div>
                </div>
                <!-- Finaliza Barra de Titulo en right -->

               
                <!-- Inicia La seccion de usuarios -->
              <div class="row">
                <div id="listausuarios" class="col-md-6" >
                        <div class="myform-all Color_Claro" >
                        <!-- Inicia Tabla de Usuarios; -->
                        <br></br>
                        <h1 class="Titulos">Usuarios Registrados</h1>
                        <table>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>NombreUsuario</th>
                                        
                                        <th>Nivel</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                        <?php
                                            for($i=0; $i<$lista_usuario; $i++){
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $lista_usuario['CodigoUsuario'];
                                                    echo "</td>";

                                                    echo "<td>";
                                                        echo $lista_usuario['Nombre'];
                                                    echo "</td>";

                                                    echo "<td>";
                                                        echo $lista_usuario['Apellido'];
                                                    echo "</td>";
                                                    
                                                    echo "<td>";
                                                        echo $lista_usuario['Nombre_Usuario'];
                                                    echo "</td>";
                                                    {
                                                        if($lista_usuario['TipoUsuario'] == 0) {
                                                            echo "<td>";
                                                                echo 'Administrador';
                                                            echo "</td>";
                                                        }else if($lista_usuario['TipoUsuario'] == 1){
                                                            echo "<td>";
                                                                echo 'Planificador';
                                                            echo "</td>";
                                                        }else if( $lista_usuario['TipoUsuario'] == 2){
                                                            echo "<td>";
                                                                echo 'Montacarguista';
                                                            echo "</td>";
                                                        }
                                                    }                        
                                                    
                                                    //Prueba de Botones
                                                    echo "<td>";
                                                        echo '<a href="'.$lista_usuario['CodigoUsuario'].'"  class="fa fa-edit btn btn-success data-togle="modal" data-target="#myModal">Actualizar</a>';
                                                    echo "</td>";

                                                    echo "<td>";
                                                    echo '<a href="'.$lista_usuario['CodigoUsuario'].'"  class="fa fa-trash-o btn btn-danger data-togle="modal" data-target="#myModal"> Borrar </a>';
                                                    echo "</td>";

                                                echo "</tr>";
                                                $lista_usuario =$ejecutar_sentencia->fetch_array();
                                            }
                                        ?>
                                    </tr>
                                </table>
                        <!-- Finaliza Tabla de Usuarios;  -->
                        </div>

                </div>
                    
                    <div class="coontainer">
                    
                            <!--Inicia Formulario Login-->
                            <div> <? echo $error.$mensajeExito; ?> </div>
                            
                            <div class="col-md-6 my-content formulario formulario">
                                <div> <? echo $error . $mensajeExito; ?> </div>
                                <div class="container " >
                                    <div class="row ">
                                      
                                    </div>
                                    <div class="row" >
                                        <div class="  myform-cont" >
                                            <div class="myform-top">
                                                <div class="myform-top-left">
                                                    <h3 class="whitecolor">Registro de Usuarios</h3>
                                                    <p class="whitecolor">Digite los datos del usuario:</p>
                                                </div>
                                                <div class="myform-top-rigth">
                                                <i class="fa fa-users whitecolor"> </i>

                                                    
                                                </div>
                                            
                                            </div>
                                            <div class="myform-botton">
                                                <form role="form" action="" method="post" class="">
                                                    
                                                
                                                    
                                                    <div class="form-grup">
                                                        <input type="text" name="form-nombre" placeholder="Nombre..." class="form-control" id="form-nombre">
                                                    </div>
                                                    <div class="saltito"><h1></h1></div>
                                                    <div class="form-grup">
                                                        <input type="text" name="form-apellido" placeholder="Apellido..." class="form-control" id="form-apellido">
                                                    </div>
                                                    <div class="saltito"><h1></h1></div>
                                                    <div class="form-grup">
                                                        <input type="text" name="form-Usuario" placeholder="Usuario..." class="form-control" id="form-Usuario">
                                                    </div>
                                                    <div class="saltito"><h1></h1></div>
                                                    <div class="form-group">
                                                        <input type="password" name="form-password" placeholder="Contaseña..." class="form-control" id="form-password">
                                                    </div>
                                                    <div class="saltito"><h1></h1></div>
                                                    <div class="form-group">
                                                        <input type="password" name="form-password2" placeholder="Confirme Contaseña..." class="form-control" id="form-password2">
                                                    </div>
                                                    <div class="saltito"><h1></h1></div>
                                                    <div >
                                                        <select class="funy form-control ng-pristine ng-valid ng-valid-required ng-touched" name="form-TipoUsuario" id="form-TipoUsuario" ng-model="properties.value" ng-options="ctrl.getValue(option) as (ctrl.getLabel(option) | uiTranslate) for option in properties.availableValues" ng-required="properties.required" ng-disabled="properties.disabled">
                                                        <option style="display:none" value="" class="ng-binding">
                                                            Selecione el tipo de usuario...
                                                        </option>
                                                            <option value="0" label="Administrador">Administrador</option>
                                                            <option value="1" label="Planificador">Planificador</option>
                                                            <option value="2" label="Montacarguista">Montacarguista</option>
                                                        </select>
                                                    
                                                    </div>
                                                    <div  data-effect="flip" class="effect-button" id="btnActualizar"><input  type="submit" name="Registrar" value="Registrar" class="effect-button"  ></input></div>
                                                    <!-- <input type="submit" name="submit" class="mybtn" value="Registrar"></input> -->
                                                
                                                </form>
                                                    
                                                
                                            </div>
                                            
                                            
                                        </div>

                                        
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>

                            <!--Finaliza Formulario LogIn-->
                    </div>
              </div>  
                

                <!-- Finaliza la seccion de Usuarios -->
              



                  
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