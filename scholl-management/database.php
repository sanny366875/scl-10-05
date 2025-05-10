<?php 
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="awdd_2501";
    $connection = mysqli_connect($db_host,$db_user, $db_pass,$db_name);
    if (!$connection) {
        echo "connection fail";
    }
?>