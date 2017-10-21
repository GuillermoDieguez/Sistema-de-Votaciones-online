<?php
sleep(2);
include 'Auth.php';

if (!empty($_POST['Registrar'])) {
    $FDPI = $_POST['form-DPI'];
    $FNameF = $_POST['form-nombre'];
    $FNameL = $_POST['form-apellido'];
    $Genero = $_POST['form-genero'];
    $Direccion = $_POST['form-direccion'];
    $Departamento = $_POST['form-departamento'];
    $Municipio = $_POST['form-municipio'];
    $FPassword = $_POST['form-password'];
    $FPasswordR = $_POST['form-password2'];
    
    //echo $FNameF."<br>".$FNameL."<br>".$FUserName."<br>".$FEmail."<br>".$FEmailR."<br>".$FPassword."<br>".$FPasswordR ;

   

        if ($FPassword==$FPasswordR) {
           
            $conn = new mysqli($servername,$username,$password,$dbname);

            if ($conn->connect_error){
                die("Error en la conexion: ".$conn->connect_error);
            }
            $FPasswordR =md5($FPasswordR);
            $sql ="INSERT INTO `sistema1`.`ciudadanos` (`DPI`, `Nombre`, `Apellido`, `Genero`, `Direccion`, `IdDepartamento`, `IdMunicipio`, `Estado`, `Contraseña`) VALUES ('".$FDPI."','".$FNameF."','".$FNameL."','".$Genero."','".$Direccion."','".$Departamento."','".$Municipio."','1','".$FPasswordR."')";

            if ($conn->query($sql) === TRUE) {
                $mensajeExito = '<div class="alert alert-success" role="alert">El registro fue agregado correctamente</div>';
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



?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	  <!-- Requiered meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-whidth, initial-sace=1, shrink-to-fit=no">
        <title>Registro de Votantes</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="FountAuson/css/font-awesome.css">
        <link  href="https://fonts.googleapis.com/css?family-Ralweay:100,300,400,500">
        <link rel="stylesheet" href="css/custom.css">
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/admin.css" rel="stylesheet" type="text/css" />

        <!-- Scripts  -->
        <script type="text/javascript">
        function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}

        </script>

        <!-- Fin Scripts -->
        <!-- Estilos en Css -->
        <style>
            .slider{
                background: url("imagenes/fondo.jpg");
                height: 100vh;
                background-size: cover;
                background-position: center;
            }
            body{
                background: url("imagenes/Antigua.jpg") no-repeat center top;
                background-attachment: fixed;
                overflow: scroll;
            }

            .select{
                height: 50px;
                -moz-appearance: none;
                border-radius: 25px !important;
                box-shadow: #0E0126 portant;
                cursor: pointer;
                background: #1D2332;
                color: darkgrey;
                transition: 0.8s;
                border: 3px solid black;
                font-size: 14px;
                font-weight: 200;
                line-height: 50px;
                
            }
            .funy {
            height: 50px;
            background: #1D2332;
            color: darkgrey;
            transition: 0.8s;
            border: 3px solid black;
            font-size: 12px;
            font-weight: 200;
            line-height: 50px;
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
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ml-auto text-center">
               <a class="nav-item nav-link formulario" href="login.php">Inicio </a>
                <a class="nav-item nav-link active formulario" href="Registro.php">Registro </a>
                

            </div>
            <div class="d-flex flex-row justify-content-center">
               <a  href="https://facebook.com/"><span class="badge badge-primary">Facebook</span></a>
               <a  href="https://youtube.com/"><span class="badge badge-danger">Youtube</span></a>

            </div>
            </div>

        </nav>
        <!--Fin Menu de Navegacion-->

    <!--Inicia Formulario Login-->
    <div> <?php echo $error.$mensajeExito; ?></div>
    
	<div class="my-content formulario formulario">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
                
				<h1><strong>Elecciones</strong> 2017 </h1>
					<div class="mydescription">
						<p>Formulario de Registro de Votantes</p>
					</div>
				</div>
				
			</div>
			<div class="row" >
				<div class="col-sm-6 offset-3  myform-cont" >
					<div class="myform-top">
						<div class="myform-top-left">
							<h3>Registro Online</h3>
							<p>Digita tus datos:</p>
						</div>
						<div class="myform-top-rigth">
						<i class="fa fa-user"> </i>

							
						</div>
					
					</div>
					<div class="myform-botton">
                        <form role="form" action="" method="post" class="">
                            
                            <div class="form-grup">
                                <input type="text" name="form-DPI" placeholder="DPI..." class=" form-control" id="form-DPI" minlength="13" onkeyup="mascara(this,'-',patron3,true)">
                            </div>
                            <div class="saltito"><h1></h1></div>
                            <div class="form-grup">
                                <input type="text" name="form-nombre" placeholder="Nombre..." class="form-control" id="form-nombre">
                            </div>
                            <div class="saltito"><h1></h1></div>
                            <div class="form-grup">
                                <input type="text" name="form-apellido" placeholder="Apellido..." class="form-control" id="form-apellido">
                            </div>
                            <div class="saltito"><h1></h1></div>
                                                    <div >
                                                        <select class="funy form-control ng-pristine ng-valid ng-valid-required ng-touched" name="form-genero" id="form-genero" ng-model="properties.value" ng-options="ctrl.getValue(option) as (ctrl.getLabel(option) | uiTranslate) for option in properties.availableValues" ng-required="properties.required" ng-disabled="properties.disabled">
                                                        <option style="display:none; height:50px;" value="" class="ng-binding">
                                                            Genero...
                                                        </option>
                                                            <option value="Hombre" label="Hombre">Hombre</option>
                                                            <option value="Mujer" label="Mujer">Mujer</option>
                                                           
                                                        </select>
                                                    
                            </div>
                            <div class="saltito"><h1></h1></div>
                             <div class="form-grup">
                             <input type="text" name="form-direccion" placeholder="Dirección..." class="form-control" id="form-direccion">
                            </div>                        
                            
                            <!-- Departamento -->
                            <div class="saltito"><h1></h1></div>
                                                    <div >
                                                        <select class="funy form-control ng-pristine ng-valid ng-valid-required ng-touched" name="form-departamento" id="form-departamento" ng-model="properties.value" ng-options="ctrl.getValue(option) as (ctrl.getLabel(option) | uiTranslate) for option in properties.availableValues" ng-required="properties.required" ng-disabled="properties.disabled">
                                                        <option style="display:none; height:50px;" value="" class="ng-binding">
                                                            Departamento...
                                                        </option>
                                                        <?php
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $departamentos = "SELECT * FROM sistema1.departamentos;";
                                                       
                                                        $result = $conn->query($departamentos);
                                                        if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            
                                                        echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                                                        $CodMunicipio = ['form-departamento'];
                                                        }
                                                      }
                                                        ?>
                                                           
                                                        </select>
                                                    
                            </div>

                            <!-- Municipio -->
                            <div class="saltito"><h1></h1></div>
                                                    <div >
                                                        <select class="funy form-control ng-pristine ng-valid ng-valid-required ng-touched" name="form-municipio" id="form-mubicipio" ng-model="properties.value" ng-options="ctrl.getValue(option) as (ctrl.getLabel(option) | uiTranslate) for option in properties.availableValues" ng-required="properties.required" ng-disabled="properties.disabled">
                                                        <option style="display:none; height:50px;" value="" class="ng-binding">
                                                            Municipio...
                                                        </option>
                                                        <?php
                                                        $CodMunicipio = ['form-departamento'];
                                                        $conn = new mysqli($servername,$username,$password,$dbname);
                                                        $municipios = "SELECT * FROM sistema1.municipio order by nombre;"; //where codigo_depto = ".$CodMunicipio
                                                      
                                                        $result = $conn->query($municipios);
                                                        if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                                                        }
                                                      }
                                                        ?>
                                                           
                                                        </select>
                                                    
                            </div>

                            <div class="saltito"><h1></h1></div>
                            <div class="form-group">
                                <input type="password" name="form-password" placeholder="Contaseña..." class="form-control" id="form-password">
                            </div>
                            <div class="saltito"><h1></h1></div>
                            <div class="form-group">
                                <input type="password" name="form-password2" placeholder="Confirme Contaseña..." class="form-control" id="form-password2">
                            </div>
                            
                            <div  data-effect="flip" class="effect-button"><input  type="submit" name="Registrar" value="Registrar" class="effect-button"></input></div>
                            <!-- <input type="submit" name="submit" class="mybtn" value="Registrar"></input> -->
                        
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
        </script>



        <script src="js/jPushMenu.js"></script>
        <script src="js/side-chats.js"></script>
</body>
</html>