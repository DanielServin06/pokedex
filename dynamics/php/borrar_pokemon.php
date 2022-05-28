<?php
//conectando con la BD
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema); 

$id = $_POST['id']; 

$sql = "DELETE FROM pokemon_types WHERE pok_id=$id";
$res = mysqli_query($con, $sql);

$sql = "DELETE FROM pokemon WHERE pok_id=$id"; 
$res = mysqli_query($con, $sql);

if($res == true){
    $respuesta = array("ok"=>true); 
}
else{
    // mysqli_error da información de cuál fue el error// 
    //mysqli_error($con);
    $respuesta = array("ok"=>false); 
}

 
echo json_encode($respuesta);  //este json se recibe en el return de la función anónima que contiene response

