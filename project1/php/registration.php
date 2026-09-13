<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "project1";

// $conn = new mysqli($servername, $username, $password, $database);

// if($conn->connect_error){
//     die("Connection Failure");
// }else{
//     echo "Connected Sucessfully";
// }

// $sql = "CREATE DATABASE Registration";

// if(mysqli_query($conn, $sql)){
//     echo "Database Succuessfully Created";
// }else{
//     echo "falied to create";
// }

// $sql = "CREATE TABLE Registration_form(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     Name VARCHAR(40),
//     Email VARCHAR(40),
//     Password VARCHAR(20),
//     Gender VARCHAR(10)
// )";

// if(mysqli_query($conn, $sql)){
//     echo "Table Created Successfully";
// }else{
//     echo "Failed to Created";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project1";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $createPassword = $_POST['createPassword'];
    $conformPassword = $_POST['conformPassword'];
    $gender = $_POST['gender'];

    if($createPassword == $conformPassword){
        
        $sql = "INSERT INTO Registration_form
        (Name, Email, Password, Gender) 
        VALUES 
        ('$name', '$email', '$createPassword', '$gender')";

        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Successdully Register Your ID'); window.location.href='../registration.html';</script>";
        }else{
            echo "Database Error: ". mysqli_error($conn);
        }
    }else{
        echo "<script>alert('Password does not matched'); window.location.href='../registration.html';</script>";
    }
}

?>