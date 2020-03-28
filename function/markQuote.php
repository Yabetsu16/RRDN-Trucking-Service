<?php 
    $sql = "UPDATE quotes_tb SET status = $status WHERE quote_id = $id";

    if ($conn->query($sql) === TRUE) {
        $quote = true;
        header("Location: index.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>