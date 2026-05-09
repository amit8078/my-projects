<?php
if(isset($_POST['submit'])){


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "college management";


    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Falure: ".$conn->connect_error);
    }

    // $sql = "CREATE TABLE appointment_form (
    //     roll_no INT AUTO_INCREMENT PRIMARY KEY,
    //     name varchar(100) NOT NULL,
    //     email varchar(100) NOT NULL,
    //     phone_no varchar(10) NOT NULL,
    //     department varchar(30) NOT NULL,
    //     preferred_date datetime NOT NULL,
    //     preferred_time varchar(20) NOT NULL,
    //     message varchar(200) 
    // )";

    // if($conn->query($sql)===TRUE){
    //     echo "Successfully create table";
    // }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $department = $_POST['department'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $message = $_POST['message'];

    $sql = "INSERT INTO appointment_form (name, email, phone_no, department, preferred_date, preferred_time, message) VALUES ('$name', '$email', '$phone_no', '$department', '$preferred_date', '$preferred_time', '$message')";

    if($conn->query($sql)===TRUE){
        echo "<script>alert('Appointment Booked!'); window.history.back();;</script>";
    }else{
        echo "Error: " . $sql. "<br>". $conn->error;
    }

    $conn->close();
}


?>