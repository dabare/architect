<?php

require_once '../db/dbConnection.php';



$id = $_POST['id'];

$sql = "UPDATE  customer set status = 'inactive'  WHERE id='" . $id . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Customer '.$id.' Deleted");
				window.location = "../customer.php";
			</script>';
} else {
    echo '<script>
				alert("Delete Failed");
				window.location = "../customer.php";
			</script>';
}

mysqli_close($conn);
?>
