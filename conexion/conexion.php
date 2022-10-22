<?php

function conectar(){
 $user = "root";
    $pass = "";
    $server = "localhost:3306";
    $db = "prueba";
    $con = mysqli_connect($server, $user, $pass) or die ("Error al conectar".mysqli_error($con));
    mysqli_select_db($con, $db) or die ("Error al conectar".mysqli_error($con));
    return $con;

}

