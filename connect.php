<?php
$fullName = $_POST['fulltname'];
$email = $_POST['email'];
$message = $_POST['message'];

//connection

$conn = new mysqli('localhost', 'root','','feedback');
if($conn->connect_error){
    die('connection Failed : .$conn->connect_error');

}else{
    $stmt = $conn->prepare("insert into registration(fullName,email,message) values(?,?,?,)");
    $stmt->bind_param("sss" , $fullName, $email, $message);
    $stmt->execute();
    echo "Message Received";
    $stmt->close();
    $conn->close();

}
?>
