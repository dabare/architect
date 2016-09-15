<!DOCTYPE html>
<html>
    <head>
        <title>architect</title>

        <link rel="stylesheet" type="text/css" href="../CSS/projects.css">
        <link rel="stylesheet" type="text/css" href="../CSS/home.css">
        <meta charset="utf-8">
        <meta name="description" content="We love playing with light, material, and shapes and driven with passion in making the client’s dream a reality beyond their expectations.">
        <meta name="keywords" content="architecture,landscaping,interior designing,urban designs, kasu media lab, kml ,In SriLanka, sri lanka,bunglows, SLIA, CSA, houses">

    </head>
    <body>
        <div>
            <ul id="mainMenue">
                <li><a id="mainMenueA" href="#" style="float:left;">Home</a></li>

                <li id="mainMenueLi"><a id="mainMenueA" href="#">Login</a></li>
                <li id="mainMenueLi"><a id="mainMenueA" href="#">Contact Us</a></li>
                <li id="mainMenueLi"><a id="mainMenueA" href="#">Regulations</a></li>
                <li id="mainMenueLi"><a class="active" id="mainMenueA" href="#">Projects</a></li>
                <li id="mainMenueLi"><a id="mainMenueA" href="#">Awards</a></li>
                <li id="mainMenueLi"><a id="mainMenueA" href="#">About</a></li>

            </ul>
        </div><br><br><br><br>
        <div style="height: 750px;margin-left: 50px;">




            <?php
            require_once '../db/dbConnection.php';

            $sql = "SELECT * FROM g_project WHERE category='Industrial';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="img">';
                    echo '<h4>' . $row["title"] . '</h4>';
                    echo '<a target="_blank" href="../Projects/Fullproject.php?prid=' . $row["id"] . '">';

                    $sql2 = 'SELECT url FROM g_image WHERE id = ( SELECT MIN(id) FROM g_image WHERE g_project_id=' . $row["id"] . ');';

                    $result2 = $conn->query($sql2);

                    if ($result2->num_rows > 0) {
                        // output data of each row
                        while ($row2 = $result2->fetch_assoc()) {
                            echo '<img src="../uploads/' . $row2["url"] . '"  width="600" height="400">';
                        }
                    }



                    echo '</a>';
                    echo '</div>';
                }
            }



            $conn->close();
            ?>



        </div> 


    </body>
</html> 