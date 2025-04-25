<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//connection

$conn = new mysqli('localhost', 'root','','kdyfo');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into feedback(fullName,email,subject,message) values(?,?,?,?)");
    $stmt->bind_param("ssss" , $fullName, $email, $message);
    $stmt->execute();
    echo "Message Received";
    $stmt->close();
    $conn->close();

}
?>
