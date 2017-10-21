<?php

session_start();
include 'Auth.php';
    
    // FuncionLogin
    sleep(2);
    if(!empty($_POST['Entrar'])){
        $LUser = $_POST['UserLog'];
        $LClave = $_POST['ClaveLog'];

        // Creamos la conexion
        $conn = new mysqli($servername,$username,$password,$dbname);

        if ($conn->connect_error){
            die("Error en la conexion: ".$conn->connect_error);
        }else{
            // Obtencion de datos
            $LClave=md5($LClave);
            $sql ="SELECT DPI,Contraseña, Estado FROM sistema1.ciudadanos where DPI = '$LUser' AND Contraseña = '$LClave'";
            $result = $conn->query($sql);
            // Fin Obtencion de datos

            if ($result->num_rows > 0) {
                
                //Salida de datos del query
                     while($row = $result->fetch_assoc()){
                         if($row["Estado"] === '0'){
                            $_SESSION['user'] = $row["DPI"];
                            echo "Usuario: ".$row["DPI"]."Clave: ".$row["Contraseña"];
                            header("Location: DashboardAdministrador.php");
                         }else if($row["Estado"] === '1'){

                            $_SESSION['user'] = $row["DPI"];
                            echo "Usuario: ".$row["DPI"]."Clave: ".$row["Contraseña"];
                            header("Location: DashboardUsuario.php");
                         }else if($row["Estado"] === '2'){
                            
                            $_SESSION['user'] = $row["DPI"];
                            echo "Usuario: ".$row["DPI"]."Clave: ".$row["Contraseña"];
                            header("Location: DashboardEstadisticas.php");
                            }
                        
                     }
             }
             else{
                 
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Sus datos son incorrectos </div>';
             }

            //comprovacion de dadtos



            //fin comprovacion de datos
        }

        // Fin de la conexion
        
    }

    // FinFuncionLogIN


?>
<!DOCTYPE html>
<html lang="es">
<head>
	
	  <!-- Requiered meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-whidth, initial-sace=1, shrink-to-fit=no">
        <title>Votaciones Guatemala</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="FountAuson/css/font-awesome.css">
        <link  href="https://fonts.googleapis.com/css?family-Ralweay:100,300,400,500">
        <link rel="stylesheet" href="css/custom.css">
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/admin.css" rel="stylesheet" type="text/css" />
        <!-- Estilos en Css -->
        <style>
            .slider{
               
                height: 100vh;
                background-size: cover;
                background-position: center;
            } 

            body{
                background: url("imagenes/Almacen.jpg") no-repeat center top;
                background-attachment: fixed;
                overflow: scroll;
            }

               
        </style>
</head>
<body>
               <!--menu de navegacion-->
        <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top formulario">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">
             <img src="imagenes/Logo.svg" width="30" height="30" class="d-inline-block align-top" alt="Logo GDX">
             Sistema de Votaciones De Guatemala
            </a> 
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01 ">
            <div class="navbar-nav mr-auto ml-auto text-center ">
               <a class="nav-item nav-link active formulario" href="login.php">Inicio </a>
                <a class="nav-item nav-link formulario" href="Registro.php">Registro </a>
                

            </div>
            <div class="d-flex flex-row justify-content-center">
                <a  href="https://facebook.com/"><span class="badge badge-primary">Facebook</span></a>
                <a  href="https://youtube.com/"><span class="badge badge-danger">Youtube</span></a>

            </div>
            </div>

        </nav>
        <!--Fin Menu de Navegacion-->

    <!--Inicia Formulario Login-->
    
	<div  class="my-content formulario">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 offset-3 myform-all">
				<h1 ><strong>Elecciones</strong> 2017 </h1>
					<div   class="mydescription ">
						<p class="">Formulario de Ingreso al sistema</p>
					</div>
				</div>
				
            </div>
            <br>
			<div class="row" >
				<div class="col-sm-6 offset-3  myform-cont" >
					<div class="myform-top">
						<div class="myform-top-left">
							<h3>Ingresa con tu número de DPI y tu contraseña</h3>
							<p>Digita tu usuario y contraseña:</p>
						</div>
						<div class="myform-top-rigth">
						<i class="fa fa-key"> </i>

							
						</div>
					
					</div>
					<div class="myform-botton" >
                        <form role="form" action="" method="post" class="">
                            <div class="form-grup" >
                                <input type="text" name="UserLog" placeholder="DPI..." class="form-control" id="form-username">
                            </div>
                            <div class="saltito"><h1></h1></div>
                            <div class="form-group">
                                <input type="password" name="ClaveLog" placeholder="Contaseña..." class="form-control" id="form-password">
                            </div>
                            <div> <?php echo $error.$mensajeExito; ?></div>
                            <div  data-effect="flip" class="effect-button"><input  type="submit" name="Entrar" value="Entrar" class="effect-button"></input></div>
                            <!-- <input  type="submit" name="Entrar" class="mybtn "></input> -->
                        
                        </form>
                            
						
					</div>
					
					
				</div>
                				
            </div>

            

		</div>
		
	</div>

    <!--Finaliza Formulario LogIn-->

<!--       Inicia Footer-->
        <footer class="container-fluid bg-inverse formulario">
            <div class="row rext-white py-4 text-white">
                <div class="col-md-3">
                    <img src="imagenes/Logo.svg" alt="" width="50px" height="auto" class="float-left mr-3">
                    <h4 class="lead"UMG 2017!></h4>
                    <footer class="blockquote-footer">UMG 2017 <cite title="Source Title" ><br>Desarrollo Web <br>PHP MySQL</cite></footer>
                </div>
            
            
                    <div class="col-md-3">
                        <h4 class="lead">Creditos</h4>
                        <p>DBA: Guillermo Dieguez<br>BackEnd: David y Guillermo<br>FrontEnd: David Orantes</p>
                    </div>

                    <div class="col-md-3">
                        <h4 class="lead">Creditos</h4>
                        <p>Documentación: Rafael Velazquez<br>Documentación: Estevan Noriega</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="lead ">Siguenos</h4>
                        <a class="mybtn-social" href="https://facebook.com/"><span class="badge badge-primary">Facebook</span></a>
                        <a class="mybtn-social" href="https://youtube.com/"><span class="badge badge-danger">Youtube</span></a>

                    </div>
            </div>
        
        
        </footer>
                
<!--       Finaliza Footer-->


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonimus"></script>
        <script src="https://cdnj.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUHKKDx6Qin1DkWx51bBrb" crossorigin="anonimus"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/jquery-2.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common-script.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/script.min.js"></script>
    <script src="js/animated.js" type="text/javascript"></script>
    <script>
        // (function(i, s, o, g, r, a, m) {
        //     i['GoogleAnalyticsObject'] = r;
        //     i[r] = i[r] || function() {
        //         (i[r].q = i[r].q || []).push(arguments)
        //     }, i[r].l = 1 * new Date();
        //     a = s.createElement(o),
        //         m = s.getElementsByTagName(o)[0];
        //     a.async = 1;
        //     a.src = g;
        //     m.parentNode.insertBefore(a, m)
        // })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        // ga('create', 'UA-48105801-1', 'creativico.com');
        // ga('send', 'pageview');
    </script>



    <script src="js/jPushMenu.js"></script>
    <script src="js/side-chats.js"></script>
</body>
</html>