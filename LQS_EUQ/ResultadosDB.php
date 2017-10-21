<?php
    //paso 1 conectar con el servidor
    include 'Auth.php';

 

    $link = new mysqli($servername,$username,$password,$dbname);
    if(!$link){
        echo 'No Se pudo establecer conexion: '.mysql_error();
    }else{
            //paso 3 hacer la sentencia sql y ejecutarla
            $sqlcandidatos = "SELECT Nombre FROM sistema1.candidatos where Cargo = 'Presidente'"; 
            $ejecutar_sentenciacandidatos = $link->query($sqlcandidatos);
            if(!$ejecutar_sentenciacandidatos)
            {
                echo 'Hay un error en la sentencia de SQL: '.$sqlcandidatos;
            }else{
                //paso 4 trer los datos en forma de un arreglo
                $lista_CandidatosPresidente =$ejecutar_sentenciacandidatos->fetch_array();
                //la variable Lista_Usuaios es la que contiene el resultado de los usuarios
            }
        
    }

?>