<?php 
    $sql = "INSERT INTO quotes_tb (name, email, company, phone, 
    pick_up_date, pick_up_time, pick_up_location, 
    drop_location, truck, cargo, remarks, status)
    SELECT name, email, company, phone, 
    pick_up_date, pick_up_time, pick_up_location, 
    drop_location, truck, cargo, remarks, status FROM removed_quotes_tb WHERE remove_quote_id = $id; ";
    $sql .= "DELETE FROM removed_quotes_tb WHERE remove_quote_id = $id";

    if ($conn->multi_query($sql) === TRUE) {
        header("Location: index.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>