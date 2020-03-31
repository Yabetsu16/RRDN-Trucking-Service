<?php 
    $sql = "INSERT INTO messages_tb (name, email, subject, message)
    VALUES ('$name', '$email','$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $quote = false;
        include("alerts/addingSuccessAlert.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>