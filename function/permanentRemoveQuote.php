<?php
    $sql = "DELETE FROM removed_quotes_tb WHERE remove_quote_id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: indexRemovedQuote.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>