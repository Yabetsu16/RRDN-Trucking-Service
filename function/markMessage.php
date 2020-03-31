<?php 
    $sql = "UPDATE messages_tb SET status = $status WHERE message_id = $id";

    if ($conn->query($sql) === TRUE) {
        $quote = true;
        header("Location: indexMessage.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>