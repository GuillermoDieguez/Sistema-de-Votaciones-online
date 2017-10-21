<?php
    $Departamento;
    $Municipio;
    
    //paso 1 conectar con el servidor
    include 'Auth.php';

    // obtener lista de Candidatos presidenciales
    $link = new mysqli($servername,$username,$password,$dbname);
    if(!$link){
        echo 'No Se pudo establecer conexion: '.mysql_error();
    }else{
            //paso 3 hacer la sentencia sql y ejecutarla
            $sqlPresidente = "SELECT id, DPI,Nombre,Apellido,Cargo,Partido FROM sistema1.candidatos;";
            $ejecutar_sentenciaPresidente = $link->query($sqlPresidente);
            if(!$ejecutar_sentenciaPresidente)
            {
                echo 'Hay un error en la sentencia de SQL: '.$sqlPresidente;
            }else{
                //paso 4 trer los datos en forma de un arreglo
                $lista_presidente =$ejecutar_sentenciaPresidente->fetch_array();
                //la variable Lista_Usuaios es la que contiene el resultado de los usuarios
            }
        
    }

    //Obtener Lista de Candidatos a Diputados segun
    $link = new mysqli($servername,$username,$password,$dbname);
    if(!$link){
        echo 'No Se pudo establecer conexion: '.mysql_error();
    }else{
            //paso 3 hacer la sentencia sql y ejecutarla
            $sqlDiputado = "SELECT id, DPI,Nombre,Apellido,Cargo,Partido FROM sistema1.candidatos;";
            $ejecutar_sentenciaDiputado = $link->query($sqlDiputado);
            if(!$ejecutar_sentenciaDiputado)
            {
                echo 'Hay un error en la sentencia de SQL: '.$sqlDiputado;
            }else{
                //paso 4 trer los datos en forma de un arreglo
                $lista_Diputados =$ejecutar_sentenciaDiputado->fetch_array();
                //la variable Lista_Usuaios es la que contiene el resultado de los usuarios
            }
        
    }

    //Obtener Lista de Candidatos a Alcaldes
    $link = new mysqli($servername,$username,$password,$dbname);
    if(!$link){
        echo 'No Se pudo establecer conexion: '.mysql_error();
    }else{
            //paso 3 hacer la sentencia sql y ejecutarla
            $sqlAlcalde = "SELECT id, DPI,Nombre,Apellido,Cargo,Partido FROM sistema1.candidatos;";
            $ejecutar_sentenciaAlcalde = $link->query($sqlAlcalde);
            if(!$ejecutar_sentenciaAlcalde)
            {
                echo 'Hay un error en la sentencia de SQL: '.$sqlAlcalde;
            }else{
                //paso 4 trer los datos en forma de un arreglo
                $lista_Alcaldes =$ejecutar_sentenciaAlcalde->fetch_array();
                //la variable Lista_Usuaios es la que contiene el resultado de los usuarios
            }
        
    }

?>