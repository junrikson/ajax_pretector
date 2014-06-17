<?php
    session_start();  

    if(array_key_exists('secretKey', $_GET)){
        $secretKey=$_REQUEST["secretKey"];
        if($secretKey == $_SESSION["secretKey"]){
            include_once 'index.html';
        }
        else{
            die('Your token is not valid');
        } 
    }
    else{
        die('You can not access this page directly');
    }
?>