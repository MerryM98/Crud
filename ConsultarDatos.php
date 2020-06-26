<?php

include('baseDato.php');

if(isset($_POST["btnBuscar"])){
    //recibir datos del formulario
    $nombre=$_POST["NombreBuscar"];

    //creo objeto tipo base de datos(conexion)
    $operacionBaseDatos= new baseDatos();

    //creo la consulta
    $consulta="SELECT nombre from usuarios where nombre='$nombre'";

    //llamar a la clase base de datos y voy a utiliar su metodo para leer
    //(Buscar) en la BD
    $resultado=$operacionBaseDatos->ConsultarEnBaseDatos($consulta);
    print_r($resultado);
  
}else{
    echo("No se ha presionado");
}





?>