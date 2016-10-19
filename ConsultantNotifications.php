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
                background-image:none;
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
                <li><a id="activeEdit" href="ConsultantNotifications.php">Notification</a></li>
                <li><a id="editItem" href="ConsultantAppointments.php">Appointments</a></li>
                <li><a id="editItem" href="ConsultantEditProfile.php">Edit Profile</a></li>
                <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>
        </nav>
        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <h2>Fixed Full-height Side Nav</h2>
            <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
            <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
            <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
            <p>Some text..</p>
            <p>Some text..</p>
            <p>Some text..</p>
            <p>Some text..</p>
            <p>Some text..</p>
            <p>Some text..</p>
            <p>Some text..</p>
        </div>

    </body>
</html>
