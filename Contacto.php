<?php
    header("Content-type: text/html;charset=\"utf-8\"" );
    $error = ""; 
    $mensajeExito = "";

    if($_POST){
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
            $error .= "E-mail no válido . <br>";
        }
        if ($error != ""){
            $error = '<div class="alert alert-danger" role="alert"><p><b>Se generó un error: </b></p>' . $error . '</div>';
        } else {
            $nombre =$_POST['nombre'];
            $email =$_POST['email'];
            $asunto =$_POST['asunto'];
            $mensajeC =$_POST['mensaje'];

            $header = 'From:' . $email . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . "\r\n" ;    
            $header .= "Mine-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";
            
            $mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
            $mensaje .= "Su Email es: " . $email . ",\r\n";
            $mensaje .= "Asunto: " . $asunto . ",\r\n";
            $mensaje .= "Mensaje " . $mensajeC . ",\r\n";
            $mensaje .= "Enviado el: " . date('d/m/Y',time());

            $para = 'daviddgx@gmail.com';
            $asunto = 'Mensaje de mi sitio Web';

            if (mail($para,$asunto, $mensaje,$header)){
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje Enviado con Exito</div>)';
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Requiered meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-whidth, initial-sace=1, shrink-to-fit=no">
        <title>Contacto Data Gx</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/custom.css">
        <!-- Estilos en Css -->
        <style>
            .slider{
                background: url("imagenes/fondo.jpg");
                height: 100vh;
                background-size: cover;
                background-position: center;
            }    
        </style>


    </head>
    
    <body>
        

        
        
<!--        incio Slider-->
        <!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-taarget="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-taarget="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-taarget="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                <li data-taarget="#carouselExampleIndicators" data-slide-to="3"></li>
            
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item " style="height: 100vh">
                    <img class="d-block img-fluid" src="imagenes/Nosotros1.jpg" alt="Frist slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Historia</h3>
                        <p>Nacida como un proyecto en el 2014, Data Gx ahora esta en el mercado del desarrollo de Software, HelpDesk, WebDesigne and Web Aplication services y OutSourcing IT.  </p>
                    
                    </div>
                </div>
                <div class="carousel-item" style="height: 100vh">
                    <img class="d-block img-fluid" src="imagenes/Nosotros2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Mision</h3>
                        <p>Apoyar al usuario de la computadora para resolver esos pequeños atascos que hacen de un macnifico dia, en un dia pesado y estresante</p>
                    
                    </div>
                </div>
                <div class="carousel-item active" style="height: 100vh">
                    <img class="d-block img-fluid" src="imagenes/Nosotros3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Vision</h3>
                        <p>Que los Guatemaltecos puedan colocar su plena confianza en nosotros al saber que tiene un aliado en la tecnologia con el que pueden contar.</p>
                    
                    </div>
                </div>
                <div class="carousel-item" style="height: 100vh">
                    <img class="d-block img-fluid" src="imagenes/Nosotros4.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Valores</h3>
                        <p>para aprobechar al maximo el podencial de su computadora podemos asesorarle para mejorar y mantener su equipo en las maximas sircunstancias, asi como apallarle en la resolucion de cualquier duda tecnica durante la instalcion de programas o equipo fisico</p>
                    
                    </div>
                </div>
   
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"</spam>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"</spam>
                <span class="sr-only">Next</span>
            </a>
            
        
        </div>-->
        
<!--        Fin Slider-->


        <!--menu de navegacion-->
        <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">
             <img src="imagenes/Logo.svg" width="30" height="30" class="d-inline-block align-top" alt="Logo GDX">
             DataGx
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ml-auto text-center">
                <a class="nav-item nav-link formulario" href="login.php">Inicio </a>
                <a class="nav-item nav-link formulario" href="Registro.php">Registro </a>
                <a class="nav-item nav-link formulario" href="servicios.html">Servicio </a>
                <a class="nav-item nav-link formulario active" href="Contacto.php">Contacto </a>

            </div>
            <div class="d-flex flex-row justify-content-center">
               <a  href="https://facebook.com/"><span class="badge badge-primary">Facebook</span></a>
                <a  href="https://youtube.com/"><span class="badge badge-danger">Youtube</span></a>

            </div>
            </div>

        </nav>
        <!--Fin Menu de Navegacion-->

<!--        Inicio Contenido-->
        
        
        
        
        
<!--        Finalliza Contenido-->
        
        
        <!--Finaliza Contenido-->

         <!--inicio Formulario-->
        <div class="containter-fluid  formulario fondaso">
            <section class="container mt-3 pt-5 mb-3">
            
            <h3 class="  text-uppercase text-center ">Formulario de Contacto</h3>
            <p class="lead text-center ">Algun Texto largo para mostrar en la descripcion del formulario</p>
            
            <div class="container">
                <div><? echo $error.$mensajeExito; ?></div>
                    <form method="post" class=" myform-contacto">

                        <div class="form-group row " >
                            <label for="nombre" class="col-sm-2 form-control-label" >Nombre:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="nombre"  placeholder="Escribe tu nombre aqui." type="text" name="nombre">
                            </div>
                        </div>           
                        
                        <div class="form-group row ">
                            <label for="email" class="col-sm-2 form-control-label" >Email:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="email"  placeholder="Escribe tu email aqui." type="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row ">

                            <label for="asunto" class="col-sm-2 form-control-label">Asunto</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="asunto"  placeholder="Asunto del Correo" type="text" name="asunto" >
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="mensaje" class="col-sm-2 form-control-label">Mensaje</label>
                            <div class="col-sm-10">
                                <textarea class="form-control altura" style="height: 133px;"  id="mensaje" rows="5" placeholder="¿Qué quieres preguntar?" name="mensaje"></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="mybtn btn btn-info offset-2 " style="width: 200px;">Enviar</button>
                            <a> <br><br></a>
                 
                        </div>
                    </form>
              
            </div>    

        </section>
        </div>
        <!--Fin Formulario-->

          
        <!-- Aqui inician la seccion del mapa -->
            <section id="mapa">
                <div class="">
                    <article class="cuarto">
                        <div class="">
                           <div class=" divisado text-center animatedParent">
                                <div class="animated fadeIn">
                                    <div class="col-md-12">
                                        <h3 id="tituloMapa" class="text-center">
                                            Toca nustra puerta!!
                                        </h3>
                                        <p id="contMapa" class="text-center">
                                            Puedes visitarnos y con gusto te atenderemos.
                                        </p>
                                    </div>          
                                    <div class="row">  
                                        <div class="mapa col-md-12 option animated swing">
                                            <iframe src="https://www.google.com/maps/embed@14.6112743,-90.6596463,269m" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div> 
                                    </div>                         
                                </div>    
                            </div>
                        </div>        
                    </article>
                </div>
            </section>   
            <!-- Aqui finaliza la seccion del mapa -->
            

<!--       Inicia Footer-->
        <footer class="container-fluid bg-inverse">
            <div class="row rext-white py-4 text-white">
                <div class="col-md-3">
                    <img src="imagenes/Logo.svg" alt="" width="50px" height="auto" class="float-left mr-3">
                    <h4 class="lead"Data Gx!></h4>
                    <footer class="blockquote-footer">Data Gx 2017 <cite title="Source Title"><br>David Orantes Web Master</cite></footer>
                </div>
            
            
                    <div class="col-md-3">
                        <h4 class="lead">Contactos</h4>
                        <p>Telefono: 1234-56789<br>Correo: info@datagx.com<br>Web: datagx.com</p>
                    </div>

                    <div class="col-md-3">
                        <h4 class="lead">Horarios</h4>
                        <p>Lunes - Viernes 06:00 Am - 08:00 Pm<br>Sabado - Domingo 08:00 Am - 10:00 PM</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="lead">Siguenos</h4>
                        <a class="mybtn-social" href="https://facebook.com/"><span class="badge badge-primary">Facebook</span></a>
                        <a class="mybtn-social" href="https://youtube.com/"><span class="badge badge-danger">Youtube</span></a>


                    </div>
            </div>
        
        
        </footer>
                
<!--       Finaliza Footer-->

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonimus"></script>
        <script src="https://cdnj.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUHKKDx6Qin1DkWx51bBrb" crossorigin="anonimus"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>