<?php
if(isset($_POST['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "HospitalQuery";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }


    // $sql = "CREATE TABLE queries (
    // id INT AUTO_INCREMENT PRIMARY KEY,
    // name VARCHAR(100) NOT NULL,
    // email VARCHAR(100),
    // contact_no VARCHAR(15) NOT NULL,
    // subject VARCHAR(150),
    // message TEXT
    // )";

    // if($conn->query($sql)=== TRUE) {
    //     echo "Table 'customer' created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }


    // Match HTML names exactly
    $name = $_POST['username'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Match DB column names exactly
    $sql = "INSERT INTO queries (name, email, contact_no, subject, message) 
            VALUES ('$name', '$email', '$contact_no', '$subject', '$message')";

    if ($conn->query($sql)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>