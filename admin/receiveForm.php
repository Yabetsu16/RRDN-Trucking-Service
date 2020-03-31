<?php
    if (isset($_POST['markQuote'])) {
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

    if (isset($_POST['removeQuote'])) {
        $id = $_POST['id'];

        include("../function/removeQuote.php");
    }

    if (isset($_POST['permanentQuote'])) {
        $id = $_POST['id'];

        include("../function/permanentRemoveQuote.php");
    }

    if (isset($_POST['restoreQuote'])) {
        $id = $_POST['id'];

        include("../function/restoreQuote.php");
    }

    if (isset($_POST['showQuote'])) {
        header("Location: indexRemovedQuote.php");
    }

    if (isset($_POST['hideQuote'])) {
        header("Location: index.php");
    }

    if (isset($_POST['markMessage'])) {
        $status = $_POST['status'];
        $id = $_POST['id'];

        if ($status == 0) {
            $status = 1;
        }
        else {
            $status = 0;
        }

        include("../function/markMessage.php");
    }

    if (isset($_POST['removeMessage'])) {
        $id = $_POST['id'];

        include("../function/removeMessage.php");
    }

    if (isset($_POST['permanentMessage'])) {
        $id = $_POST['id'];

        include("../function/permanentRemoveMessage.php");
    }

    if (isset($_POST['restoreMessage'])) {
        $id = $_POST['id'];

        include("../function/restoreMessage.php");
    }

    if (isset($_POST['showMessage'])) {
        header("Location: indexRemovedMessage.php");
    }

    if (isset($_POST['hideMessage'])) {
        header("Location: indexMessage.php");
    }
?>