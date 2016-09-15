<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                    margin:0;
                    font-family: lucida grande ,tahoma,verdana,arial,sans_serif;
                    background-color: #e9e9e9;
                }

            body p
            {
                    font-size: 0.8em;
                    line-height: 1.28;
            }

            #container{
                background-image:url(./images/home_1.jpg);
                background-size: 100% 100%; 
                background-repeat: no-repeat;
                background-attachment: fixed;
            }  
            .sidebar{
                width: 500px;
                height: 1000px;
                margin: 0px 0px 80px 400px;
                background-color: window;
                padding: 6px;
            }

            .margin{
                width: 300px;
                height: 400px;
                margin: -1100px 0px 80px 1000px;
                background-color: window;
                padding: 6px;
            }
            #bdy {
                margin: 0;
            }
            #navigationbarEdit {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 15%;
                background-color: #cccccc;
                position: fixed;
                height: 100%;
                overflow: auto;
            }
            #activeEdit{
                background-color: #3399ff;
                color: white;
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            #editItem{
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            #nav
            {
                list-style: none;
            }

            #nav ul
            {
                margin: 0;
                padding: 0;
                width: auto;
                display: none;
            }

            #nav li
            {
                font-size: 24px;
                float: right;
                position: relative;
                width: 180px;
                height: 50px;
            }

            #nav a:link, nav a:active, nav a:visited
            {
                display: block;
                color: #fff;
                text-decoration: none;
            }

            #nav a:hover
            {
                color: lightblue;
            }

        </style>
        <meta charset="UTF-8">
        <title>Consultant</title>
    </head>
    <body id="container">
        <nav id="bdy">
            <ul id="navigationbarEdit">
                <li><a id="editItem" href="ConsultantAppointments.php">Appointments</a></li>
                <li><a id="activeEdit" href="ConsultantEditProfile.php">Edit Profile</a></li>
                <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>
        </nav>
        <div class="sidebar">
            <br>
            <form>
                <br><br><br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        First name:<br>
                        <input type="text" size="15" name="firstname">
                    </div>
                    <div style="display:inline-block;">
                        Middle name:<br>
                        <input type="text" size="15" name="middlename">
                    </div>
                    <div style="display:inline-block;">
                        Last name:<br>
                        <input type="text" size="15" name="lastname">
                    </div>
                </div>  
                <br>
                Select Photo:
                <input id="files" type="file" name="pic" accept="image/*" onchange="readURL(this)">
                <img  src="../images/blur.jpg" alt="your image"  height="200" width="180" style="position: absolute"/>
                <br><br>
                Age:<input type="text" name="age" size="4">
                <br><br>
                Address:<br>
                <div style=" padding-left: 2em;">
                    No:
                    <br>
                    <input type="text" size="10" name="no">
                    <br>
                    Street:
                    <br>
                    <input type="text" name="street">
                    <br>
                    City:
                    <br>
                    <input type="text" name="city">
                </div>
                <br>

                <br>
                Email:
                <br>
                <input type="text" name="email" size="35">
                <br><br>


                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        Mobile No:
                        <br>
                        <input type="text" name="mobile" size="10">
                    </div>
                    <div style="display:inline-block;">
                        Land No:
                        <br>
                        <input type="text" name="land" size="10">
                    </div>
                </div>  

                <br>
                NIC:
                <br>
                <input type="text" name="nic" size="15">

                <br><br>
                Reg. No.:
                <br>
                <input type="text" name="reg" size="15">

                <br><br>
                Account created date:
                <br>
                <input type="date" name="date" disabled>

                <br><br>
                User Name:
                <br>
                <input type="text" name="uname" size="15">
                <br><br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        New Password:
                        <br>
                        <input type="password" name="pass" size="25">
                    </div>
                    <div style="display:inline-block;">
                        Retype New Password:
                        <br>
                        <input type="password" name="retypepass" size="25">
                    </div>
                </div>  
                <br>
                <div style="text-align: center;">
                    <button type="button"  >Reset All Fields</button>
                    <button type="button"  >Save</button>.
                </div>
                <br><br>
            </form>
        </div>
        <br><br><br><br><br>
        <div class="margin">
            <br>
            <form>
                Appointment name:
                <br>
                <input type="text" name="appointment name" size="35">
                <br><br>

                Add a Description:
                <br>
                <input type="text" name="add a description" size="35">
                <br><br>
                <div style="text-align: center;">
                    <button type="button"  >Save</button>
                </div>
            </form>
        </div>
    </body>
</html>
