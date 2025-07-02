<?php  
    require 'connection.php';

    $userid = $_GET['id'];

    $result = $connection->query("DELETE FROM `slide` WHERE id='$userid'");

    if($result){
        header('location:slider.php');
    }else{
        echo 'Failed To Delete';
    }

?>