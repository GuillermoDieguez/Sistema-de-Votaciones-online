<?php
    //paso 1 conectar con el servidor
    
    include 'LQS_EUQ/Usuarios App.php';

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" type="text/css" href="css/estilotablas.css">

</head>
<body>
    <h1>Mostrando Datos desde una Base de Datos</h1>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>NombreUsuario</th>
            <th>Clave</th>
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
                        
                        echo "<td>";
                            echo $lista_usuario['Clave_Usuario'];
                        echo "</td>";
                        
                        echo "<td>";
                            echo $lista_usuario['TipoUsuario'];
                        echo "</td>";
//Prueba de Botones
                        echo "<td>";
                            echo '<input  value="Modificar" type="submit" name="Entrar" class="mybtn" onClick="location.reload()"></input>';
                            
                        echo "</td>";

                        echo "<td>";
                        echo '<input  value="Eliminar" type="submit" name="Entrar" class="mybtn" href="javascript:location.reload()"></input>';
                        echo "</td>";

                    echo "</tr>";
                    $lista_usuario =$ejecutar_sentencia->fetch_array();
                }
            ?>
        </tr>
    </table>
</body>
</html>