<?php

session_start();
if (isset($_POST['btnLogin'])) {
    $user = $_POST['txtuser'];
    $pwd = $_POST['txtpwd'];

    if ($user == "admin" && $pwd == "admin") {
        $_SESSION['user'] = $user;
        if (isset($_POST['remember'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $user, time() + 60 * 60 * 24 * 365);
            setcookie('password', $pwd, time() + 60 * 60 * 24 * 365);
        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $user, false);
            setcookie('password', $pwd, false);
        }
        header('location:home.php');
    } else {
        echo "username or password error";
    }
} else {
    echo "no click the button";
}