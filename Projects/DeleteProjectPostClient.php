<?php

require_once '../db/dbConnection.php';
$postid = $_POST['postid'];
$projectid = $_POST['proid'];

$sql = "SELECT * FROM post WHERE id=" . $postid;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $path = "../uploads/" . $row["format"];
    }
}

unlink($path);


$sql = "DELETE FROM post WHERE id='" . $postid . "'";





if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Post ' . $postid . ' Deleted");
				window.location = "../CustomerViewProject.php?id=' . $projectid . '";
			</script>';
} else {
    echo '<script>
				alert("Post ' . $postid . ' not Deleted");
				window.location = "../CustomerViewProject.php?id=' . $projectid . '";
			</script>';
}
?>