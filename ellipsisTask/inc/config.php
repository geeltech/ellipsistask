<?php 

    require_once("connect.php"); 
    
    session_start(); 
    
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
        header("Location: ./index.php");  
        
?>