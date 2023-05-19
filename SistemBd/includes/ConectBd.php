<?php
$HostLine = "localhost";
$UserHost = "root";
$DataBase = "Ejemplo";
$Password = "";
$Conecta = mysqli_connect($HostLine,$UserHost,$Password,$DataBase);
if($Conecta->connect_errno){
    die('Error al conectar la base de datos del sistema'.$Conecta->connect_errno);
}
?>