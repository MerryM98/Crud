<?php

include('baseDato.php');

if(isset($_POST["btnEliminar"])){
    //Traer datos del formulario
    $nombre=$_POST["NombreEliminar"];
    
    //creo objeto tipo base de datos(conexion)
    $operacionBaseDatos= new baseDatos();

    //consulta para eliminar los datos 
    $consulta="DELETE from usuarios where nombre='$nombre'";

    //llamar a la clase base de datos y voy a utiliar su metodo para alterar
    //(insertar o escribir dentro de la DB)

    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

     //validar el resultado
     if($resultado){
        echo("<br>");
        echo("transaccion exitosa, datos Eliminados");
    }
    else{
        echo("<br>");
        die("error en la transaccion");

    }

    
}else{
    echo("Nose ha presionado");
}





?>