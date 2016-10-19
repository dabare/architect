<?php

require_once '../db/dbConnection.php';

$sql = "SELECT MAX(id) FROM invoice;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $id = $row["MAX(id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$id += 1;
mysqli_close($conn);
echo $id;
?>
