<?php
    $servername = "localhost";
    $username = "temp_test";
    $password = "123456789";
    $dbname = "picture_precious";

    header('Content-Type: text/plain');

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'adityabharighat@gmail.com';
    $headers = "From:" . $email;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO contactInfo (`firstName`, `lastName`, `date`, `location`, `email`, `subject`, `message`)
    VALUES ('".$fname."', '".$lname."', '".$date."', '".$location."', '".$email."', '".$subject."', '".$message."')";
    // echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "We have received your message and will respond to you as soon as possible. For urgent enquiries please call us on Contact +91 99020 08573.";
    } else {
        echo "Server Down: Contact +91 99020 08573 Directly";
    }

    $conn->close();
?>