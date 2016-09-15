<?php

require_once '../db/dbConnection.php';



$projectid = $_POST['prid'];
$invoiceid = $_POST['inid'];
$description = $_POST['des'];
$type = $_POST['type'];
$chequeNo = $_POST['cno'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$new = true;


$sql = "SELECT * FROM invoice WHERE id = '" . $invoiceid . "';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $new = false;
    }
}

if ($new) {
    $sql = "INSERT INTO invoice(id,project_id,type,amount,date,chequeno,description) VALUES('" . $invoiceid . "','" . $projectid . "','" . $type . "','" . $amount . "','" . $date . "','" . $chequeNo . "','" . $description . "');";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
					alert("New Payment Added");
					window.location = "../ArchitectViewProject.php?id=' . $projectid . '";
				</script>';
    } else {
        echo '<script>
				alert("Could not add the new payment");
                                window.location = "../ArchitectViewProject.php?id=' . $projectid . '";
			</script>';
    }
} else {
    $sql = "UPDATE invoice SET type='" . $type . "' , amount = '" . $amount . "' , date = '" . $date . "' , chequeno = '" . $chequeNo . "' , description = '" . $description . "' WHERE id='" . $invoiceid . "';";
    if (mysqli_query($conn, $sql)) {

        echo '<script>
				alert("Payment Updated");
				window.location = "../ArchitectViewProject.php?id=' . $projectid . '";
			</script>';
    } else {
        echo '<script>
				alert("Payment not updated");
				window.location = "../ArchitectViewProject.php?id=' . $projectid . '";
			</script>';
    }
}
mysqli_close($conn);
?>