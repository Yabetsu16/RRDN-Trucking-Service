<?php 
    $sql = "INSERT INTO quotes_tb (name, email, company, phone, pick_up_date, pick_up_time, pick_up_location, drop_location, truck, cargo, remarks)
    VALUES ('$name', '$email',' $company',' $phone', '$pick_up_date', '$pick_up_time', '$pick_up_location', '$drop_location', '$truck', '$cargo', '$remarks')";

    if ($conn->query($sql) === TRUE) {
        $quote = true;
        include("alerts/addingSuccessAlert.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>