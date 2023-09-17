<?php

    include 'config.php';

    $name = $_POST['name'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO message_table (name, message) VALUES ('$name', '$msg')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 1;
    } else {
        echo 0;
    }

?>