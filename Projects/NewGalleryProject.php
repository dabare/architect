<?php

require_once '../db/dbConnection.php';

$sql = "SELECT MAX(id) FROM g_project;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $id = $row["MAX(id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$id += 1;
$sql = "INSERT INTO g_project(id,status) VALUES('" . $id . "','Active');";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "../gallery1.php?id=' . $id . '";
				</script>';
} else {
    echo '<script>
					alert("Could not create new project");
					window.location = "../gallery.php";
				</script>';
}

mysqli_close($conn);
?>

