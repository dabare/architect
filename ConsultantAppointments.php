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
            .l_sidebar{
                width: 300px;
                height: 600px;
                margin: 60px 0px 80px 50px;
                background-color: none;
                padding: 6px;
            }

            .margin{
                width: 500px;
                height: 600px;
                margin: -690px 0px 80px 400px;
                background-color:lightgray;
                padding: 6px;
            }

            .r_sidebar{
                width: 300px;
                height: 600px;
                margin: -690px 0px 80px 950px;
                background-color: lavenderblush;
                padding: 6px;
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

            #editItem:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            #boddy{

                margin-left:15%;
                padding:1px 16px;
                height:1000px;
            }
            button{
                height: 30px;
                width:150px;
            }


        </style>
        <meta charset="UTF-8">
        <title>Consultant</title>
    </head>
    <body id="container">
        <nav id="bdy">
            <ul id="navigationbarEdit">
                <li><a id="activeEdit" href="ConsultantAppointments.php">Appointments</a></li>
                <li><a id="editItem" href="ConsultantEditProfile.php">Edit Profile</a></li>
                <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>
        </nav>
        <div id="boddy">
            <div class="l_sidebar">
                <h3>Appointments</h3>
                <br><br>
                <ul>
                    <li><a id="editItem" href="1.php">Avissawella state</a></li><br><br>
                    <li><a id="editItem" href="2.php">Bungalow in Kahawatta</a></li><br><br>
                    <li><a id="editItem" href="3.php">Kadawala Bungalow</a></li><br><br><br>
                    <li><a id="editItem" href="4.php">V S Hydro Factory</a></li><br><br>
                    <li><a id="editItem" href="5.php">House at Kolonnawa</a></li><br><br>
                </ul>   
            </div>

            <div class="">

            </div>
        </div>




    </body>
</html>
