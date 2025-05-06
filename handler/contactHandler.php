<?php
include("../resources/connection.php"); 
session_start();

if(strlen($_POST['LastName']) === 0){

$ID = 0;
// Checks for the largest ID available
$FetchID = "SELECT max(ID) AS ID FROM omoore94_concrete.warren_concrete";        
$FetchIDResult = mysqli_query($conn, $FetchID);
while($row = mysqli_fetch_assoc($FetchIDResult)){
    $ID = $row['ID'];
}

$ID++;
$ID = mysqli_real_escape_string($conn, $ID);


$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$PhoneNumber = mysqli_real_escape_string($conn, $_POST['PhoneNumber']);
$Message = mysqli_real_escape_string($conn, $_POST['Message']);
$CurrentPage = mysqli_real_escape_string($conn, $_POST['currentPage']);
$Timestamp =  mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));

$InsertMessage = "INSERT INTO omoore94_concrete.warren_concrete (ID, name, email, phone_number, message, current_page, timestamp) VALUES ('$ID', '$Name', '$Email', '$PhoneNumber', '$Message', '$CurrentPage', '$Timestamp');";  
$InsertMessageResult = mysqli_query($conn, $InsertMessage);


    // Always set content-type when sending HTML email
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    // $headers .= 'From: <mooresoftwareus@gmail.com>' . "\r\n";
    // $headers .= 'Cc: mooreoctavius94@gmail.com' . "\r\n";

    // mail("mooreoctavius94@gmail.com","New Test Website Visitor 4/11/2025","Hello I am in interested in your service", $headers);
    // echo $mail_sent ? "Mail sent" : "Mail failed";
    // echo "<br>";
    // print_r($_POST);
    // echo "<br>";


    // Email sent to Client
    $ClientEmail = "mooreoctavius94@gmail.com";
    // $Headers = "From: mooreoctavius94@gmail.com" . "\r\n";
    $Subject = "New Lead From: Warren Concrete " . date("F j, Y, g:i a");
    // 'Reply-To: mooreoctavius94@gmail.com' . "\r\n";
    // mail($ClientEmail, $Subject, $Message);

    // Email sent to Lead
    $UserSubject = "Thank You for submitting your quote request.";
    // $UserHeader = "From: mooreoctavius94@gmail.com"  . "\r\n";
    // 'Reply-To: mooreoctavius94@gmail.com' . "\r\n";
    $UserMessage = "Hello, " . ucwords(strtolower($Name)) . " thank you for reaching out and submitting your request for an concrete estimate. \n";
    $UserMessage .= "One of our team members will be in touch shortly to discuss your needs further and, if necessary, schedule an on-site visit.";
    // mail($Email, $UserSubject, $UserMessage);

    // Email sent to Me
    $businessEmail = "mooresoftwareus@gmail.com";
    // $Headers = "From: mooreoctavius94@gmail.com" . "\r\n";
    $Subject = "New Lead for Warren Concrete Company " . date("F j, Y, g:i a");
    // 'Reply-To: mooreoctavius94@gmail.com' . "\r\n";
    mail($ClientEmail, $Subject, $Message);

}
header('Location: ../index.php');

?>




