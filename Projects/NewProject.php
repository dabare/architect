<?php
session_start();

require_once '../db/dbConnection.php';

$sql = "SELECT MAX(id) FROM project;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $pid = $row["MAX(id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$pid += 1;
$sql = "INSERT INTO project(id,customer_id,architect_id) VALUES('" . $pid . "','". $id ."','".$_SESSION["id"]."');";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					alert("Successfully added a new Project!");
                                        window.location = "../ArchitectCustomers1.php?id=' . $id . '"";
				</script>';
} else {
    echo '<script>
					alert("Could not add a new Project");
					window.location = "../ArchitectCustomers1.php?id=' . $id . '"";
				</script>';
}

mysqli_close($conn);
?>
