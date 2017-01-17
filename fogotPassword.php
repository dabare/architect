
<?php

session_start();
require_once './db/dbConnection.php';
$email = $_POST["email"];

$pass = "";
$lname = "";
$sql = "select passwd , lname from architect where uname = '$email' and status = 'active';";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        $pass = $row["passwd"];
        $lname = $row["lname"];
    }
} else {
    $sql = "select psswd , lname from consultants where uname = '$email';";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row

        while ($row = $result->fetch_assoc()) {
            $pass = $row["psswd"];
            $lname = $row["lname"];
        }
    } else {
        $sql = "select passwd , lname from customer where uname = '$email' and (status is null or status !='inactive');";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = $result->fetch_assoc()) {
                $pass = $row["passwd"];
                $lname = $row["lname"];
            }
        } else {
            echo '<script>
				alert("Invalied Username");
				window.location = "./index.php";
		</script>';
        }
    }
}
if ($pass) {
    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require './PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
    $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

    $mail->isHTML(true);
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "architectpriyantha@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "55555abc";

//Set who the message is to be sent from
    $mail->setFrom('architectpriyantha@gmail.com', 'Architect Priyantha Premathilaka');

//Set an alternative reply-to address
    $mail->addReplyTo('architectpriyantha@gmail.com', 'Premathilaka');

//Set who the message is to be sent to
    $mail->addAddress($email, $lname);

//Set the subject line
    $mail->Subject = 'PASSWORD RESET';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->Body = "Your password is <strong>$pass</strong><br><a  href='javascript:AlertIt();'http://architect1.azurewebsites.net/#login' target='_blank'>http://architect1.azurewebsites.net/#login</a>";

//Replace the plain text body with one created manually
    $mail->AltBody = 'Your password';

//Attach an image file
    $mail->addAttachment('');

//send the message, check for errors
    if (!$mail->send()) {
        echo '<script>
				alert("Email Error");
				window.location = "./index.php";
		</script>';
    } else {
        echo '<script>
				alert("Email was sent to ' . $email . '");
				window.location = "./index.php";
		</script>';
    }
} else {
    echo '<script>
				alert("Error");
				window.location = "./index.php";
		</script>';
}
$conn->close();
?>

