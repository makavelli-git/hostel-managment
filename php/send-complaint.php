<?php
    session_start();
    include_once "connection.php";

    // Taking inputs
    $studentId = $_SESSION['st_id'];
    $message = $_POST['message'];

    $sql = "INSERT INTO complaints(student_id, message, time) VALUE(
        '$studentId',
        '$message',
        now()
    );";

    mysqli_query($conn, $sql);
    header('location: ../pages/UserBook.php#complaints-page?ComplaintAdded');

?>