<?php


    class baseDatos{


        //atributos
        private $servidor="localhost";
        private $usuario="root";
        private $clave="";
        private $nombreBaseDatos="db_tienda";
        private $conexion;

        //constructor
        public function __construct(){}

        //metodos 
        public function conectarConBaseDatos(){
            //configurar la conexion 
            $this->conexion= mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->clave,
                $this->nombreBaseDatos
            );

            //verificar la conexion
            if(!($this->conexion)){
                die('Error de conexión: ' );
            }else{
                echo("conexion exitosa");

            }

        }
        //ESCRIBIR EN LA BASE DE DATOS 
    public function alterarBaseDatos($consultaSQL){

        $this->conectarConBaseDatos();
        $resultado=$this->conexion->query($consultaSQL);
        return ($resultado);
        $this->conexion->close();
    }

    //lectura en la BaseDeDatos(Buscar)

    public function ConsultarEnBaseDatos($consultaSQL){

        $this->conectarConBaseDatos();
        $resultado=$this->conexion->query($consultaSQL);
        // echo("<br>"); 
        // echo("<br>"); 
        //print_r($resultado );
        // echo("<br>"); 
        // echo("<br>"); 

        $arregloFilas=array();
        foreach($resultado as $registros){
            print_r($registros);
            $arregloFilas[]=$registros;        
        }

        echo("<br>"); 
        echo("<br>"); 
        // print_r($arregloFilas);

        return($arregloFilas);
        $this->conexion->close();
    }
    


}

?>