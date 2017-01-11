<?php

require_once '../db/dbConnection.php';


$projectid = $_POST['id'];
$description = $_POST['desc'];

$sql = "SELECT MAX(id) FROM g_image;";

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
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir . 'gal' . $newpostid . '.' . $FileType;

if ($uploadOk == 0) {
    echo '<script>
					alert("Photo uploading failed");
					window.location = "../ArchitectManageProjects1.php?id=' . $projectid . '";
				</script>';
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        $newfilename = "gal" . $newpostid . '.' . $FileType;

        $sql = "INSERT INTO g_image(id,g_project_id,description,url) VALUES('" . $newpostid . "','" . $projectid . "','" . $description . "', '" . $newfilename . "');";

        if (mysqli_query($conn, $sql)) {
            echo '<script>
					alert("Sucessfully uploaded the photo");
					window.location = "../gallery1.php?id=' . $projectid . '";
				</script>';
        } else {
            echo '<script>
					alert("Photo uploading failed");
					window.location = "../gallery1.php?id=' . $projectid . '";
				</script>';
        }
    } else {
        echo '<script>
					alert("Photo uploading failed");
					window.location = "../ArchitectManageProjects1.php?id=' . $projectid . '";
				</script>';
    }
}


mysqli_close($conn);
?>