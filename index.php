<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header>
        <h1 class="text-center mt-5">Registro de usuarios</h1>
    </header>
    <main>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 ">
                    <form action="agregarDatos.php" method="POST">
                        <div class="form-group">
                            <label for="nombreUsuario">Nombre</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">                           
                        </div>

                        <div class="form-group">
                            <label for="emailUsuario">Email</label>
                            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario">                           
                        </div>

                        <div class="form-group">
                            <label for="passUsuario">Contraseña</label>
                            <input type="password" class="form-control" id="passUsuario" name="passUsuario" >                           
                        </div>
                                               
                        <button type="submit" class="btn btn-success btn-block" id="btnEnviar" name="btnEnviar" >Enviar</button>     
                    </form>
                    
                    <form action="ConsultarDatos.php" method="POST" class="mt-5 mb-5">
                        <div class="form-group">
                                <label for="NombreBuscar">Nombre a buscar</label>
                                <input type="text" class="form-control" id="NombreBuscar" name="NombreBuscar" >                           
                        </div>                                               
                            <button type="submit" class="btn btn-primary btn-block" id="btnBuscar" name="btnBuscar" >Buscar</button>                        
                    </form>

                    <form action="EliminarDatos.php" method="POST" class="mt-5 mb-5">
                        <div class="form-group">
                                <label for="NombreEliminar">Nombre a Eliminar</label>
                                <input type="text" class="form-control" id="NombreEliminar" name="NombreEliminar" >                           
                        </div>                                               
                        <button type="submit" class="btn btn-primary btn-block" id="btnEnviar" name="btnEliminar" >Eliminar</button>
                    </form>
                </div>
            </div>
    </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>