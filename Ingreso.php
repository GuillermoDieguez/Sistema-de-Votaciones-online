<?php
session_start();
    $servername="localhost";
    $username="root";
    $password="Inicio94=";
    $dbname="loginphp1";

// Funcion de Login
    if (!empty($_POST['submit1'])){
        $LUser = $_POST['UsuarioLog'];
        $LClave = $_POST['ClaveLog'];
        // Creamos la conexion
        $conn = new mysqli($servername,$username,$password,$dbname);

        if ($conn->connect_error){
            die("Error en la conexion: ".$conn->connect_error);
        }
        $LClave=md5($LClave);
        $sql ="SELECT Usuario,Clave FROM loginphp1.usuarios WHERE Usuario = '$LUser' AND Clave = '$LClave' ;";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
           //Salida de datos del query
                while($row = $result->fetch_assoc()){
                    $_SESSION['user'] = $row["Usuario"];
                    //echo "Usuario: ".$row["Usuario"]."-Clave: ".$row["Clave"];
                    header("Location: perfil.php");
                }
        }
        else{
            
            echo "<script>alert('Sus Datos estan Incorrectos');</script>";
        }

    }

// Termina Funcion de Login

// Funcion de Registro
    if (!empty($_POST['submit'])) {
        $FNameF = $_POST['NameF'];
        $FNameL = $_POST['NameL'];
        $FUserName = $_POST['UserName'];
        $FEmail = $_POST['Email'];
        $FEmailR = $_POST['EmailR'];
        $FPassword = $_POST['Password'];
        $FPasswordR = $_POST['PasswordR'];
        
        //echo $FNameF."<br>".$FNameL."<br>".$FUserName."<br>".$FEmail."<br>".$FEmailR."<br>".$FPassword."<br>".$FPasswordR ;

        if ($FEmail==$FEmailR) {

            if ($FPassword==$FPasswordR) {
               
                $conn = new mysqli($servername,$username,$password,$dbname);

                if ($conn->connect_error){
                    die("Error en la conexion: ".$conn->connect_error);
                }
                $FPasswordR =md5($FPasswordR);
                $sql ="INSERT INTO usuarios (Nombre, Apellido, Email, Usuario, Clave) VALUES ('".$FNameF."','".$FNameL."','".$FEmailR."','".$FUserName."','".$FPasswordR."')";

                if ($conn->query($sql) === TRUE) {
                   echo "<script>alert('El Registro Fue Agregado correctamente');</script>";
                }
                else{
                    
                    echo "Error: " .$sql."<br>".$conn->error;
                }

            }
            else{
                echo "<script>alert('Las Contraseñas no son iguales');</script>";
            }
        }
        else {
             echo "<script>alert('Los campos de Correo electronico No Son Iguales');</script>";
        }
    }
//  Termina Funcion de Registro   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="login">
    <form action="index.php" method="POST">
        Usuario: <input type="text" name="UsuarioLog"><br>
        Clave: <input type="text" name="ClaveLog"><br>
        
        <input type="submit" name="submit1" value="Entrar">

    </form>

    </div>

    <div id= "Register">
    <form action="index.php" method="POST">
        Nombre: <input type="text" name="NameF"><br>
        Apellido: <input type="text" name="NameL"><br>
        Nombre de Usuario: <input type="text" name="UserName"><br>
        Correo Electronico: <input type="text" name="Email"><br>
        Repetir Correo Electronico: <input type="text" name="EmailR"><br>
        Contraseña: <input type="password" name="Password"><br>
        Repetir Contraseña;<input type="password" name="PasswordR"><br>
        <input type="submit" name="submit" value="Registrar">

    </form>
    </div>

    
</body>
</html>