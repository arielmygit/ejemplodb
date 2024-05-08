<?php
$host_db="127.0.0.1:3308";
$user_db="if0_36150759";
$pass_db="ZYiJDXP1CU8";
$db_name="if0_36150759_ico";
$host_db="sql101.infinityfree.com";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion peto: ".$conexion->connect_error);
}

?>