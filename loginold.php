<html>
    <head>
        <title>LogIN</title>
        <link rel="stylesheet" type="text/css" href="./CSS/style-sign.css">
        <script type='text/javascript' src='./JS/login_validation.js'></script>
    </head>
    <body id="body-color">
    <center>
        <div id="Sign-In">
            <fieldset style="width:30%">
                <legend><font size="25" color="black">LOG-IN HERE</font></legend>
                <form action="./login/POST.php"><br>
                    <label for="uname"><font size="15" color="black">Username:</font> 
                    </label>
                    <input type="text" name="usrname" size="100"/><br>
                    <label for="pass"><font size="15" color="black">Password:</font> 
                    </label>
                    <input type="password" name="pswrd" size="100"/><br>
                    <input type="button" onclick="check(this.form)" value="Login"/>
                    <input type="button" value="Cancel"/>
                </form>
            </fieldset>
            
        </div>
    </center>
</body>
</html>