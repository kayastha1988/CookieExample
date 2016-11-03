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
        <form action="act_login.php" method="post">
            <p>
                <label>username</label><br>
                <input type="text" name="txtuser" />
            </p>
            <p>
                <label>password</label><br>
                <input type="password" name="txtpwd" />
            </p>
            
            <p>
                <input type="checkbox" name="remember" />remember me
            </p>
            <p>
                <input type="submit" name="btnLogin" value="Login" />
            </p>
        </form>
    </body>
</html>
