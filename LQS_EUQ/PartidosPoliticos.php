<?php
    //paso 1 conectar con el servidor
    include 'Auth.php';

    $link = new mysqli($servername,$username,$password,$dbname);
    if(!$link){
        echo 'No Se pudo establecer conexion: '.mysql_error();
    }else{
            //paso 3 hacer la sentencia sql y ejecutarla
            $sql = "SELECT id, Nombre_Partido,Descripcion, Reprecentante FROM sistema1.inscri_partido;";
            $ejecutar_sentencia = $link->query($sql);
            if(!$ejecutar_sentencia)
            {
                echo 'Hay un error en la sentencia de SQL: '.$sql;
            }else{
                //paso 4 trer los datos en forma de un arreglo
                $lista_usuario =$ejecutar_sentencia->fetch_array();
                //la variable Lista_Usuaios es la que contiene el resultado de los usuarios
            }
        
    }

?>