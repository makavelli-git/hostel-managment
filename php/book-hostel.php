<?php
    session_start();
    include_once "connection.php";

    $student_id = $_SESSION['st_id'];

    echo $student_id;

    // $student = "SELECT * FROM students WHERE student_id = '$student_id';";
    // $stResult = mysqli_query($conn, $sql);
    // $stRow = mysqli_fetch_assoc($stResult);
    // $firstName = $stRow['first_name'];
    // $lastName = $stRow['last_name'];
    // $fullName = $firstName . ' ' . $lastName;

    $studentId = $student_id;
    $fullname = $_POST['fullname'];
    $telephone = $_POST['telephone'];
    $room_number = $_POST['room-number'];
    $date = $_POST['date'];
    $hall_name = $_POST['hall-name'];
    $room_preference = $_POST['room-preference'];
    $message = $_POST['message'];

    $sql = "INSERT INTO bookings(fullname,student_id,phone,room_name,date,hostel, room_preference,user_message) VALUES(
        '$fullname',
        '$studentId',
        '$telephone',
        '$room_number',
        '$date',
        '$hall_name',
        '$room_preference',
        '$message'
        );";

    mysqli_query($conn, $sql);

    header('location: ../pages/UserBook.php?BookedSuccessfully');

?>