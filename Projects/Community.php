<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" type="text/css" href="../CSS/projects.css">

<link rel="stylesheet" type="text/css" href="../profcss/style_theme.css">
<link rel="stylesheet" type="text/css" href="../profcss/style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profcss/opensans.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body bgcolor="grey" class="theme-15">

<!--Navbar-->
<div class="top">
	<ul class="navbar theme-d2 left-align large">

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Community Projects</a></li>
		
	</ul>
</div>
    <br><br><br><br>
        <div style="height: 750px;margin-left: 50px;">
            <?php
            require_once '../db/dbConnection.php';

            $sql = "SELECT * FROM g_project WHERE category='Community' AND status='Active';";
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