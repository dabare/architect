
<?php

require_once '../db/dbConnection.php';


$projectid = $_POST['prid'];
$by = "Client";
$type = $_POST['type'];
$description = $_POST['desc'];

$sql = "SELECT MAX(id) FROM post;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $newpostid = $row["MAX(id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$newpostid += 1;



$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir . 'post' . $newpostid . '.' . $FileType;


$datetime = date_create()->format('Y-m-d H:i:s');
if ($type == "Post") {
    $sql = "INSERT INTO post(id,project_id,description,date,type,byy,seen,format) VALUES('" . $newpostid . "','" . $projectid . "','" . $description . "','" . $datetime . "','" . $type . "','" . $by . "','0' , '" . $newfilename . "');";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
					alert("Post Success");
					window.location = "../CustomerMyProject.php?id=' . $projectid . '";
				</script>';
    } else {
        echo '<script>
					alert("Post Failed");
					window.location = "../CustomerMyProject.php?id=' . $projectid . '";
				</script>';
    }
} else {

    if ($uploadOk == 0) {
        echo '<script>
					alert("Post Failed");
					window.location = "../CustomerMyProject.php?id=' . $projectid . '";
				</script>';
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $newfilename = "post" . $newpostid . '.' . $FileType;

            $sql = "INSERT INTO post(id,project_id,description,date,type,byy,seen,format) VALUES('" . $newpostid . "','" . $projectid . "','" . $description . "','" . $datetime . "','" . $type . "','" . $by . "','0' , '" . $newfilename . "');";

            if (mysqli_query($conn, $sql)) {
                echo '<script>
					alert("Post Success");
					window.location = "../CustomerMyProject.php?id=' . $projectid . '";
				</script>';
            } else {
                echo '<script>
					alert("Post Failed");
					window.location = "../CustomerMyProject.php?id=' . $projectid . '";
				</script>';
            }
        } else {
            echo '<script>
					alert("Post Failed");
					window.location = "../CustomerMyProject.php?id=' . $projectid . '";
				</script>';
        }
    }
}

mysqli_close($conn);
?>