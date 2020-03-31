<?php 
    $sql = "INSERT INTO messages_tb (name, email, subject, message, status)
    SELECT name, email, subject, message, status FROM removed_messages_tb WHERE remove_message_id = $id; ";
    $sql .= "DELETE FROM removed_messages_tb WHERE remove_message_id = $id";

    if ($conn->multi_query($sql) === TRUE) {
        header("Location: indexMessage.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>