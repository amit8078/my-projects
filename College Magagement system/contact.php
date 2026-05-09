<?php

if(isset($_POST['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "college management";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("connection failure: ". $conn->connect_error);
    }

    // $sql = "CREATE TABLE college_message (
    // roll_no INT AUTO_INCREMENT PRIMARY KEY,
    // name VARCHAR(100) NOT NULL,
    // email VARCHAR(100),
    // subject varchar(100),
    // message varchar(100) 
    // )";

    // if($conn->query($sql)===TRUE){
    //     echo "successfully create table";
    // }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO college_message(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if($conn->query($sql)===TRUE){
        echo "<script>alert('Message send successfully!'); window.location.href='contact.html';</script>";
    }else{
        echo "Error: " . $sql. "<br>". $conn->error;
    }


    $conn->close();

}
?>