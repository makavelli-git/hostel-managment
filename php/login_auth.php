<?php
    session_start();
    include_once "connection.php";

    $student_id = $_POST['student-id'];
    $password = $_POST['student-pass'];

    $sql = "SELECT * FROM students WHERE student_id = '$student_id' and password = '$password';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);


    if($resultCheck > 0){
        $_SESSION['st_id'] = $row['student_id'];
        header('location: ../pages/UserBook.php');
    }
    else{
        $_SESSION['st_id'] = $row['student_id'];
        echo $_SESSION['st_id'];
        echo "Wrong student ID or Password";
    }

?>