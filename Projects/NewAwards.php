<?php
session_start();

require_once '../db/dbConnection.php';

$sql = "SELECT MAX(id) FROM award;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $id = $row["MAX(id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$id += 1;
$sql = "INSERT INTO award(id,architect_id) VALUES('" . $id . "','".$_SESSION["id"]."');";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "../ArchitectManageAwards1.php?id=' . $id . '";
				</script>';
} else {
    echo '<script>
					alert("Could not add new award");
					window.location = "../ArchitectManageAwards.php";
				</script>';
}

mysqli_close($conn);
?>
