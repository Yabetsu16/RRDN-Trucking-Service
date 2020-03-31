<?php 
    $sql = "INSERT INTO removed_quotes_tb (name, email, company, phone, 
    pick_up_date, pick_up_time, pick_up_location, 
    drop_location, truck, service, remarks, status)
    SELECT name, email, company, phone, 
    pick_up_date, pick_up_time, pick_up_location, 
    drop_location, truck, service, remarks, status FROM quotes_tb WHERE quote_id = $id; ";
    $sql .= "DELETE FROM quotes_tb WHERE quote_id = $id";

    if ($conn->multi_query($sql) === TRUE) {
        header("Location: indexRemovedQuote.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>