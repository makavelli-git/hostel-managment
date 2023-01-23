<?php
    session_start();
    include_once "connection.php";

    // Taking inputs
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $studentId = $_POST['student-id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students(first_name, last_name, student_id, email, password) VALUES(
        '$firstName',
        '$lastName',
        '$studentId',
        '$email',
        '$password'
    );";

    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $_SESSION['st_id'] = $row['student_id'];
    $studentId = $_SESSION['st_id'];

    // Redirect page after adding student record to the database
    header('location: ../pages/adminBook.php?StudentAddedSuccessfully');

?>