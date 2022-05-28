<?php

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema); 
$id = $_POST['id']; 

$sql = "UPDATE pokemon SET
        SET pok_name='algo', 
        SET pok_height='algo',
        SET pok_weight = 'algo',
        SET pok_base_experience ='algo'
        WHERE pok_id=$id"
         