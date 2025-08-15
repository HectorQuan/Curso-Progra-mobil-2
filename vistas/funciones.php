<?php
function Login($usuario, $clave){
    try{
        //importar las credenciales
        require '../DataBase/database.php';
        //consulta SQL
        $sql = "select idUsuario,nombre,edad,correo,telefono 
                   from usuarios where idUsuario = '".$usuario."' and clave = '".$clave."'  and estado = 1;";
        //Realizar la consulta
        //echo 'SQL: '.$sql;
        $consulta = mysqli_query($db, $sql);
        //acceder a los resultados
        /*echo "<pre>";
          var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";*/
        //Cerrar la conexion (opcional)
         $resp = mysqli_fetch_assoc($consulta);
         return $resp;
        $resultado = mysqli_close($db);
        //echo $resultado;
    }catch(\Throwable $th){
        var_dump($th);
    }
}
function estaAutenticado(): bool {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    return isset($_SESSION['login']) && $_SESSION['login'] === true;
}
function CrearUsuario($nombre, $edad, $telefono, $idUsuario, $correo, $clave){
    try{
        //importar las credenciales
        require '../DataBase/database.php';
        //consulta SQL
        $sql = "select count(1) as Existe
                   from usuarios where idUsuario = '".$idUsuario."'  and estado = 1;";
        $consulta = mysqli_query($db, $sql);
        $resp = mysqli_fetch_assoc($consulta);
        if($resp['Existe'] == 0){
            $sql1 = "insert into usuarios (idUsuario, nombre, edad, correo, clave, telefono, fecha_creacion, estado)
                    values('$idUsuario', '$nombre', $edad, '$correo', '$clave', '$telefono', NOW(), 1);";
            //echo 'count:'.$sql1;
            $stmt = mysqli_query($db, $sql1);
            $count = mysqli_affected_rows($db);
            //var_dump($count);
            //if($stmt->row )
            //echo 'count:'.$count;
            if($count == 1){
                $respuesta = 'success';
            }else{
                $respuesta = 'No se pudo crear el registro';
            }
        }else{
            $respuesta = 'el idUsuario ya existe';
        }
         return $respuesta;
        $resultado = mysqli_close($db);
        //echo $resultado;
    }catch(\Throwable $th){
        var_dump($th);
    }
}

function obtener_casas(){
    try {
        require __DIR__ . '/../DataBase/database.php'; 
        $sql = "SELECT * FROM casas;";
        $consulta = mysqli_query($db, $sql);
        return $consulta;
    } catch (\Throwable $th) {
        var_dump($th);
        return false;
    }
}

function obtener_hoteles(){
    try {
        require __DIR__ . '/../DataBase/database.php'; 
        $sql = "SELECT * FROM hoteles;";
        $consulta_hoteles = mysqli_query($db, $sql);
        return $consulta_hoteles;
    } catch (\Throwable $th) {
        var_dump($th);
        return false;
    }
}

function obtener_salas(){
    try {
        require __DIR__ . '/../DataBase/database.php'; 
        $sql = "SELECT * FROM salas;";
        $consulta_salas = mysqli_query($db, $sql);
        return $consulta_salas;
    } catch (\Throwable $th) {
        var_dump($th);
        return false;
    }
}

function obtener_reser_totales(){
    try{
        //importar las credenciales
        require 'database.php';
        //consulta SQL
        $sql = "select count(1) as Total from reservaciones where estado = 1;";
        //Realizar la consulta
        $consulta = mysqli_query($db, $sql);
         return $consulta;
        $resultado = mysqli_close($db);
        //echo $resultado;
    }catch(\Throwable $th){
        var_dump($th);
    }
}
function obtener_reservas_pagina($Inicio, $No_Reg){
    try{
        require 'database.php';
        $sql = "select * from reservaciones where estado = 1 limit ".$Inicio.",".$No_Reg.";";
        $consulta = mysqli_query($db, $sql);
         return $consulta;
        $resultado = mysqli_close($db);
    }catch(\Throwable $th){
        var_dump($th);
    }
}

function guardarPago($fecha_pago, $metodo_pago, $numero_targeta, $numero_seguro, $vencimineto, $idPago) {
    try{
        //importar las credenciales
        require '../DataBase/database.php';
        //consulta SQL
        $sql = "select count(1) as Existe
                   from usuarios where idPago = '".$idPago."'  and estado = 1;";
        $consulta = mysqli_query($db, $sql);
        $resp = mysqli_fetch_assoc($consulta);
        if($resp['Existe'] == 0){
            $sql1 = "insert into 
      pagos (
        fecha_pago, 
        metodo_pago, 
        numero_targeta, 
        numero_seguro, 
        vencimineto, 
        estado
      )
    values
      ( 
        '$fecha_pago', 
        '$metodo_pago', 
        $numero_targeta, 
        $numero_seguro, 
        '$vencimineto', 
        1
      );";
            //echo 'count:'.$sql1;
            $stmt = mysqli_query($db, $sql1);
            $count = mysqli_affected_rows($db);
            //var_dump($count);
            //if($stmt->row )
            //echo 'count:'.$count;
            if($count == 1){
                $respuesta = 'success';
            }else{
                $respuesta = 'La informacion no se pudo guardar';
            }
        }else{
            $respuesta = 'Informacion exisitente';
        }
         return $respuesta;
        $resultado = mysqli_close($db);
        //echo $resultado;
    }catch(\Throwable $th){
        var_dump($th);
    }
}

?>