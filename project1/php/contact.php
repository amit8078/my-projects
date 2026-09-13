<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "project1";

// $conn = new mysqli($servername, $username, $password, $database);

// if($conn->connect_error){
//     die("DataBase Connection falied: ".$conn->connect_error);
// }


// <-----------   Create Database    ---------->
// $sql = "CREATE DATABASE project1";

// if(mysqli_query($conn, $sql)){
//     echo "Database created successfully";
// }else{
//     echo "Error: " . mysqli_error($conn);
// }


// <-----------   Create Table    ---------->

// $sql = "Create Table getConnection(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     Name VARCHAR(50),
//     Company_Name VARCHAR(100),
//     Contact_Number VARCHAR(10),
//     Email VARCHAR(60),
//     City VARCHAR(20),
//     Country VARCHAR(20),
//     Feedback VARCHAR(100)
// )";

// if(mysqli_query($conn, $sql)){
//     echo "Record Inserted Succcessfully";
// }else{
//     echo "Error: " . mysqli_error($conn);
// }



if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Database connection failed: ". $conn->connect_error);
    }

    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $contactNumber = $_POST["contactNumber"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $feedback = $_POST["feedback"];

    $sql = "INSERT INTO getConnection (Name, Company_Name, Contact_Number, Email, City, Country, Feedback) 
    VALUES ('$name', '$companyName',' $contactNumber',' $email', '$city', '$country', '$feedback')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Message sent successfully!'); window.location.href='../home.html#contact';</script>";
    }else{
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}

?>