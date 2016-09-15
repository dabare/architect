<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./CSS/login.css">
    </head>
    <body>
    <center>
        <div id="loginDiv">
            <form action="loginAction.php">
                <br>
                <label for="uname">Username: </label><input type="text" name="usrname"/>
                <br>
                <label for="uname">Password: </label><input type="password" name="pswrd"/>
                <br>
                <input type="submit" onclick="check(this.form)" value="Login"/>
                <input type="reset" value="Cancel"/>
            </form>
        </div>
    </center>
</body>
</html>