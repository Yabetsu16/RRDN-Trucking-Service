<?php
    $sql = "DELETE FROM removed_messages_tb WHERE remove_message_id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: indexRemovedMessage.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>