<?php
session_start();
if($_SESSION['user']==""){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        welcome to home page, you logged with : 
        <?php
        if(isset($_COOKIE['username'])){
            echo $_COOKIE['username'];
        }
        ?>
        <a href="logout.php">logout</a>
    </body>
</html>
