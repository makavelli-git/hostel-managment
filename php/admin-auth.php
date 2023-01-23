<?php

    include_once 'connection.php';

    // Taking admin inputs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Comparing entered values with that of values in the database
    $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password';";
    $res = mysqli_query($conn, $sql);
    $resCheck = mysqli_num_rows($res);
    if($resCheck > 0){
        header('location: ../pages/adminBook.php');
    }
    else{
        echo "Wrong Admin Email or Password";
    }

?>