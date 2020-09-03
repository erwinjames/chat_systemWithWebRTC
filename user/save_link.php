<?php
include('session.php');
include('../conn.php');
$link= $_POST['link'];
$to_email = $_POST['name'];
$subject = "Invited";
$body = $link;

$headers = "Your invited to the meeting";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "success";
} else {
    echo "not";
}
?>