<?php

session_start();
session_destroy();
setcookie('username', '', 0);
setcookie('password', '', 0);
header('location:index.php');