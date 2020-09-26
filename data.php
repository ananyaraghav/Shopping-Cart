<?php
$name = $_POST['fname'];
$email = $_POST['email'];

$conn = new mysqli('localhost', 'root', '', 'shopping cart');
if ($conn->connect_error){
    echo "Error";
}else{
    $sql = "INSERT INTO userinfo(name, email) VALUES ('$_POST[fname]', '$_POST[email]')";
    if($conn->query($sql)==TRUE){
        include("store.html");

    }else{
        echo "error" . $sql . "<br>" . $conn->error;
    }
$conn->close();
}
?>