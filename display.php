<?php
    session_start();  
    $secretKey=$_REQUEST["secretKey"]; 

    if($secretKey == $_SESSION["secretKey"]){
        include_once 'index.html';
    }
    else{
        die('Your token is not valid');
    }
?>