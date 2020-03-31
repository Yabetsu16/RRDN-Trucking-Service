<?php 
    if (isset($_POST['sendQuote'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $pick_up_date = $_POST['pick_up_date'];
        $pick_up_time = $_POST['pick_up_time'];
        $pick_up_location = $_POST['pick_up_location'];
        $drop_location = $_POST['drop_location'];
        $truck = $_POST['truck'];
        $service = $_POST['service'];
        $remarks = $_POST['remarks'];

        include("function/addQuotes.php");
    }

    if (isset($_POST['sendMessage'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        include("function/addMessage.php");
    }
?>