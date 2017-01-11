<?php

require_once '../db/dbConnection.php';
$imageid = $_POST['imid'];
$projectid = $_POST['prid'];


$sql = "SELECT * FROM g_image WHERE id=" . $imageid;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $path = "../uploads/" . $row["url"];
    }
}

unlink($path);


$sql = "DELETE FROM g_image WHERE id='" . $imageid . "';";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Photo Deleted");
				window.location = "../gallery1.php?id=' . $projectid . '";
			</script>';
} else {
    echo '<script>
				alert("Photo not Deleted");
				window.location = "../gallery1.php?id=' . $projectid . '";
			</script>';
}
mysqli_close($conn);
?>

