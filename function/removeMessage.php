<?php 
    $sql = "INSERT INTO removed_messages_tb (name, email, subject, message,status)
    SELECT name, email, subject, message,status FROM messages_tb WHERE message_id = $id; ";
    $sql .= "DELETE FROM messages_tb WHERE message_id = $id";

    if ($conn->multi_query($sql) === TRUE) {
        header("Location: indexRemovedMessage.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>