<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userbook | Home</title>
    <link rel="stylesheet" href="../css/userBook.css">
</head>
<body style="background-color: #f6f5ff;">

    <header>
        <div class="logo-container" style="display: flex; align-items: center; gap: 10px;">
            <img src="../images/hostel.jpg" alt="" class="brand-logo">
            <?php
                include_once "../php/connection.php";

                    $sql = "SELECT * FROM students WHERE student_id = '$_SESSION[st_id]';";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];

                    echo "<p>" . "Hello, " . $first_name . " " . $last_name. "</p>";
            ?>  
        </div>
        <form action="../php/logout.php" method="post">
            <input type="submit" value="LOGOUT" class="logout-btn">
        </form>
    </header>

    <nav class="nav-links">
        <button id="book-btn">BOOK</button>
        <button id="profile-btn">PROFILE</button>
        <button id="complaints-btn">COMPLAINTS</button>
    </nav>
    <div class="pages">
        <div id="book-page">
            <h1>BOOK A ROOM</h1>
            <p class="book-desc">Start here by booking a fine room</p>
            <form action="../php/book-hostel.php" method="POST">
                <?php
                    include_once "../php/connection.php";

                    $sql = "SELECT * FROM students WHERE student_id = '$_SESSION[st_id]';";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $student_id = $row['student_id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];

                ?>
                <input type="text" placeholder="Full name" required name="fullname" value=<?php echo $first_name ?> disabled >
                <input type="text" placeholder="Student ID" required name="student-id" value=<?php echo $student_id ?> disabled>
                <input type="text" placeholder="Telephone" required name="telephone">
                <input type="text" placeholder="Room Number (SF99)" required name="room-number">
                <input type="date" placeholder="Date" required name="date">
                <label for="room-selection">Select Hostel</label>
                <select id="room-selection" name="hall-name" required>
                    <option value="null" disabled>Choose a hostel</option>
                    <option value="J.J NORTEY HALL">J.J NORTEY</option>
                    <option value="M.A BEDIAKO HALL">M.A BEDIAKO</option>
                    <option value="ELLEN G. WHITE HALL">ELLEN G. WHITE</option>
                    <option value="NAGSDA HALL">NAGSDA</option>
                </select>
                <label for="room-selection">Select Room Preference</label>
                <select id="room-selection" name="room-preference" required>
                    <option value="null" disabled>choose room type</option>
                    <option value="one in a room">One in a room</option>
                    <option value="two in a room">Two in a room</option>
                    <option value="three in a room">Three in a room</option>
                    <option value="four in a room">Four in a room</option>
                </select>
                <label for="message">Anything Else?</label>
                <textarea class="message" name="message" placeholder="Tell us anything else that might be important."></textarea>
                <input type="submit" value="BOOK NOW"/>


            </form>
        </div>
        <div id="profile-page">
            <p style="color: #818181">Your room booking details</p><br>
            <br>
            <?php
                include_once "../php/connection.php";

                $studentId = $_SESSION['st_id'];
                $sql = "select * from bookings where student_id = '$studentId';";
                $res = mysqli_query($conn, $sql);
                $resCheck = mysqli_num_rows($res);
                
                if($resCheck > 0){
                    while($row = mysqli_fetch_assoc($res)){
                        echo 
                    "<div class='display: flex;
                        background-color: white; padding: 2rem;
                        border-radius: 20px; text-align: left;'>".
                        "<p>" . "<span style='font-weight: 600;'>Student Id:   </span>" . $student_id . "</p>".
                        "<p style='margin-top: 10px;'>" . "<span style='font-weight: 600;'>Phone:   </span>" . $row['phone'] . "</p>".
                        "<p style='margin-top: 10px;'>" . "<span style='font-weight: 600;'>Room Name:   </span>" . $row['room_name'] . "</p>".
                        "<p style='margin-top: 10px;'>" . "<span style='font-weight: 600;'>Date:   </span>" . date('D, d M Y', strtotime($row['room_name'])) . "</p>".
                        "<p style='margin-top: 10px;'>" . "<span style='font-weight: 600;'>Hostel Name:   </span>" . $row['hostel'] . "</p>".
                        "<p style='margin-top: 10px;'>" . "<span style='font-weight: 600;'>Room Pref:   </span>" . $row['room_preference'] . "</p>".
                        "<p style='margin-top: 10px;'>" . "<span style='font-weight: 600;'>Optional Message:   </span>" . $row['user_message'] . "</p>".
                     "</div>";
                    }
                }
                else{
                    echo "User not found";
                }
            ?>
        </div>
        <div id="complaints-page">
            <h1>COMPLAINTS</h1>
            <div class="complaint-page">
            <form action="../php/send-complaint.php" method="POST" style="display: flex; gap: 20px; flex-direction: column;">
            <textarea name="message" rows="5"
                    cols="40" style='padding: 2rem;
                    border-radius: 10px; margin-top: 20px; 
                    border: 1px solid #ccc; 
                    outline-color: dodgerblue; line-height: 1.6em;' placeholder='Type your complaints here...'></textarea>
            <input type="submit" value="Send Complaint" style="border: none; background-color: white; border-radius: 5px;
            padding: 10px; background-color: dodgerblue; color: white; cursor: pointer;">
            </form>
        </div>
        <br><br>
        <h3>Complaints so far</h3>
        <div>
            <?php
                include_once "../php/connection.php";
                $studentId = $_SESSION['st_id'];    
                $sql = "SELECT * FROM complaints where student_id = '$studentId';";
                $res = mysqli_query($conn, $sql);
                $resCheck = mysqli_num_rows($res);
                echo "<br><br>";
                echo "<p>" . $resCheck . ' complaints made' . "</p>";
                echo "<br><br>";
                if($resCheck > 0) {
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<div style='background-color: white; padding: 2rem;
                        border-radius: 10px; margin-top: 10px;
                        box-shadow: 0 0 20px 1px rgba(0,0,0,0.1);'>" . "<p>" . $row['message'] . "</p>" . "<p style='color: #818181; margin-top: 10px;'>" . date('D, d F Y', strtotime($row['time'])) . "</p>" . "</div>" . "<br>";
                    }
                }
                else{
                    echo "<p style='color: #818181;'>" . 'No complaints yet' . "</p>";
                }
            ?>
        </div>
    </div>

    <script src="../script/userBookscript.js"></script>
</body>
</html>