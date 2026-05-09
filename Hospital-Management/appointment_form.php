<?php

if(isset($_POST['submit'])){
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "HospitalQuery";
    
    
    $conn = new mysqli($serverName, $username, $password, $database);
    
    if($conn->connect_error){
        die("Connection failure ->". $conn->connect_error);
        }
        
        // $sql = "CREATE TABLE if not exists Appointment_form (
            //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(100) NOT NULL,
    //     secondname VARCHAR(100) NOT NULL,
    //     email VARCHAR(100),
    //     contact_no VARCHAR(15) NOT NULL,
    //     appointment_date date NOT NULL,
    //     dob date NOT NULL,
    //     gender ENUM('male', 'female', 'other') NOT NULL
    //     )";

    // if($conn->query($sql)== TRUE){
    //     echo "Table is created";
    // }else{
    //     echo "Table is not Created";
    // }

    $firstname = $_POST['first'];
    $secondname = $_POST['second'];
    $email =$_POST['email'];
    $contact_no = $_POST['contact'];
    $appointment_date = $_POST['appointment_dob'];
    $dob = $_POST['dob'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';


    $sql = "INSERT INTO Appointment_form (firstname, secondname, email, contact_no, appointment_date, dob, gender) VALUES ('$firstname', '$secondname', '$email', '$contact_no', '$appointment_date', '$dob', '$gender')";
    if ($conn->query($sql)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close;
} 
?>