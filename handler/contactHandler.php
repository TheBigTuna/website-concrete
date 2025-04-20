<?php
include("../resources/connection.php"); 
session_start();

print_r($_POST);
echo "<br>";
// Checks for the largest ID available
$FetchID = "SELECT max(ID) AS ID FROM omoore94_template.contactsubmit";        
// $FetchIDResult = mysqli_query($conn, $FetchID);
// while($row = mysqli_fetch_assoc($FetchIDResult)){
//     $ID = $row['ID'];
// }

// $ID++;
// $ID = mysqli_real_escape_string($conn, $ID);


$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$PhoneNumber = mysqli_real_escape_string($conn, $_POST['PhoneNumber']);
// $Subject = mysqli_real_escape_string($conn, $_POST['Subject']);
$Message = mysqli_real_escape_string($conn, $_POST['Message']);
$Timestamp =  mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));

// $InsertMessage = "INSERT INTO omoore94_template.contactsubmit (ID, Name, Email, PhoneNumber, Subject, Message, Timestamp) VALUES ('$ID', '$Name', '$Email', '$PhoneNumber', '$Subject', '$Message', '$Timestamp');";  
// $InsertMessageResult = mysqli_query($conn, $InsertMessage);


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <mooresoftwareus@gmail.com>' . "\r\n";
$headers .= 'Cc: mooreoctavius94@gmail.com' . "\r\n";

$mail_sent = mail("mooreoctavius94@gmail.com","New Test Website Visitor 4/11/2025","Hello I am in interested in your service", $headers);
echo $mail_sent ? "Mail sent" : "Mail failed";
echo "<br>";
print_r($_POST);
echo "<br>";

header('Location: ../pages/thank-you.php');

?>




