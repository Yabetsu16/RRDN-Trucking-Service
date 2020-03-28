<?php
    if (isset($_POST['mark'])) {
        $status = $_POST['status'];
        $id = $_POST['id'];

        if ($status == 0) {
            $status = 1;
        }
        else {
            $status = 0;
        }

        include("../function/markQuote.php");
    }

    if (isset($_POST['remove'])) {
        $id = $_POST['id'];

        include("../function/removeQuote.php");
    }

    if (isset($_POST['permanent'])) {
        $id = $_POST['id'];

        include("../function/permanentRemove.php");
    }

    if (isset($_POST['restore'])) {
        $id = $_POST['id'];

        include("../function/restoreQuote.php");
    }

    if (isset($_POST['show'])) {
        header("Location: indexRemoved.php");
    }

    if (isset($_POST['hide'])) {
        header("Location: index.php");
    }
?>