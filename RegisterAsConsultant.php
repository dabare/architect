<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>


        <meta charset="UTF-8">


        <link rel="stylesheet" type="text/css" href="CSS/register.css">
        <style>
            table{
                width:400px;
                margin:0px 0px 0px 300px;
            }
            tright{
                float:right;
                width:300px;
                margin:0px 250px 0px 0px;
                padding:5px;
                border:none;
            }  
        </style>
    </head>
    <body>

        <img  src="images/98.jpg"  style="width:1330px;height:400px;">



        <br>

        <form name='register' method='post' action='' onSubmit='return validate()'>
            <center><h1>Register as a consultant</h1></center>

            <tright>
                <img src="images/318.jpg" style="width:500px;height:350px;"><br>
            </tright>

            <table>
                <tr>
                    <td><b>First Name:</b></td>
                    <td><input type='text' name='first_name'/></td>
                </tr>
                <tr>
                    <td><b>Middle Name:</b></td>
                    <td><input type='text' name='middle_name'/></td>
                </tr>
                <tr>
                    <td><b>Last Name:</b></td>
                    <td><input type='text' name='last_name'/></td>
                </tr>
                <tr>
                    <td><b>E-Mail Address:</b></td>
                    <td><input type="text" name="email"/></td>
                </tr>
                <tr>
                    <td><b>City:</b></td>
                    <td><input type='text' name='first_name'/></td>
                </tr>
                <tr>
                    <td><b>Street:</b></td>
                    <td><input type='text' name='first_name'/></td>
                </tr>
                <tr>
                    <td><b>Mobile Number:</b></td>
                    <td><input type="text" name="mobile"/></td>
                </tr>
                <tr>
                    <td><b>Land Number:</b></td>
                    <td><input type="text" name="land"></td>
                </tr>
                <tr>
                    <td><b>Registration Number:</b></td>
                    <td><input type="text" name="reg_no"></td>
                </tr>
                <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><b>Date:</b></td>
                    <td><input type="password" name="date"></td>
                </tr>
                <tr>
                    <td><b>Confirm Password:</b></td>
                    <td><input type="password" name="password_confirm"></td>
                </tr>
                <tr>
                    <td colspan='2' align='center'> <input type="submit" name="submit" class="button" value="Register"/> 
                        <input type="reset" class="button" value="Cancel"/> </td>
                </tr>
            </table>
        </form>



    </body>
</html>

