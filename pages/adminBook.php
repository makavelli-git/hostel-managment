<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: sans-serif;
        }
        header{
            width: 100vw;
            height: 10vh;
            background-color: dodgerblue;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h2{
            margin-left: 4rem;
        }

        .right-nav{
            display: flex;
            align-items: center;
            gap: 20px;
            margin-right: 4rem;
        }

        main{
            display: flex;
        }

        .sidebar{
            width: 200px;
            background-color: dodgerblue;
            height: 200vh;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sidebar button{
            padding: 10px;
        }

        .display-area{
            padding: 2rem;
        }

        #dashboard,
        #add-students,
        #student-details,
        #complaints{
            display: none;
        }
        .display-area .add-students .input{
            padding: auto;
        }
    </style>
</head>
<body style='background-color: #f6f5ff;'>
    <header>
        <h2>Hostel Manager</h2>
        <div class="right-nav">
            <p>Hello, Admin</p>
            <form action="../php/admin-logout.php" method="POST">
                <input type="submit" value='LOGOUT' style="background-color: white; padding: 10px 20px; 
                border-radius: 30px; border: none; cursor: pointer;">
            </form>
        </div>
    </header>
    <main>
        <div class="sidebar">
            <button id="dashboard-btn">Dashboard</button>
            <button id="add-student-btn">Add Students</button>
            <button id="student-details-btn">Student Details</button>
            <button id="complaints-btn">Complaints</button>
        </div>
        <div class="display-area">
            <div id="dashboard" style='padding: 1.3rem;'>
                <h1>Dashboard</h1>
                <br>
                <p>Statistics</p>
                <br><br>
                <div class="stat-cards" style="display: flex; gap: 20px;">
                    <div class="card" style="background-color: white; padding: 2rem; display: flex; flex-direction: column; align-items: center;
                    gap: 10px; box-shadow: 0 0 20px 1px rgba(0,0,0,0.1); flex-wrap: wrap;">
                        <?php
                            include_once '../php/connection.php';

                            $sql = "select * from students";
                            $res = mysqli_query($conn, $sql);
                            $resCheck = mysqli_num_rows($res);

                            echo "<h1>" . $resCheck . "</h1>";
                        ?>
                        <p>Students</p>
                    </div>
                    <div class="card" style="background-color: white; padding: 2rem; display: flex; flex-direction: column; align-items: center;
                    gap: 10px; box-shadow: 0 0 20px 1px rgba(0,0,0,0.1);">
                        <?php
                            include_once '../php/connection.php';

                            $sql = "select * from bookings";
                            $res = mysqli_query($conn, $sql);
                            $resCheck = mysqli_num_rows($res);

                            echo "<h1>" . $resCheck . "</h1>";
                        ?>
                        <p>Bookings</p>
                    </div>
                    <div class="card" style="background-color: white; padding: 2rem; display: flex; flex-direction: column; align-items: center;
                    gap: 10px; box-shadow: 0 0 20px 1px rgba(0,0,0,0.1);">
                        <?php
                            include_once '../php/connection.php';

                            $sql = "select * from complaints";
                            $res = mysqli_query($conn, $sql);
                            $resCheck = mysqli_num_rows($res);

                            echo "<h1>" . $resCheck . "</h1>";
                        ?>
                        <p>Complaints</p>
                    </div>

                </div>
            </div>

            <div id="add-students" style='padding: 1.3rem;'>
              <h1>Add New Student</h1>
              <br>
              <?php
                    include_once "../php/connection.php";

                    $sql = "SELECT * FROM students";
                    $res = mysqli_query($conn, $sql);
                    $resCheck = mysqli_num_rows($res);
                    echo "<br>";
                    echo "<p>" . $resCheck . " students added" . "</p>";
                    echo "<br><br>";
                ?>
              <form action="../php/add-student.php" method="POST" style="display: flex; flex-direction: column;
              gap: 10px;">
                <input type="text" placeholder="First Name" style='padding: 8px 15px;' name="first-name">
                <input type="text" placeholder="Last Name" style='padding: 8px 15px;' name="last-name">
                <input type="text" placeholder="Student ID" style='padding: 8px 15px;' name="student-id">
                <input type="email" placeholder="Email" style='padding: 8px 15px;' name="email">
                <input type="password" placeholder="Password" style='padding: 8px 15px;' name="password">
                <input type="submit" value="Add Student" style="background-color: dodgerblue; padding: 10px; 
                border: none; color: white; color: border-radius: 5px; cursor: pointer;">
              </form>
            </div>
            
            <div id="student-details" style="padding: 2rem;">
                <h1>Student Details</h1>
                <br><br>
                <?php
                    include_once "../php/connection.php";

                    $sql = "SELECT * FROM students";
                    $res = mysqli_query($conn, $sql);
                    $resCheck = mysqli_num_rows($res);
                    echo "<p>" . $resCheck . ' students records ' . "</p>";
                    echo "<br><br>";
                    if($resCheck > 0){
                        $count = 1;
                        echo 
                        "<div style='display: flex; gap: 10px; flex-wrap: wrap;'>";
                            while($row = mysqli_fetch_assoc($res)){
                                echo "<div style='background-color: white;
                                padding: 2rem; border-radius: 10px;
                                box-shadow: 0 0 20px 1px rgba(0,0,0,0.1);
                                margin-top: 10px;'>" .
                                    "<h3>". "Student " . $count . " details" . "</h3>". "<br>" . 
                                    "<hr>". "<br>".
                                    "<p>"  . "<span style='font-weight: 600'>" . 'First Name: '. "</span>". $row['first_name'] . "</p>". "<br>" . 
                                    "<p>" . "<span style='font-weight: 600'>" . 'Last Name: '. "</span>". $row['last_name'] ."</p>". "<br>" .
                                    "<p>" . "<span style='font-weight: 600'>" . 'Student Id: '. "</span>". $row['student_id'] ."</p>". "<br>" .
                                    "<p>" . "<span style='font-weight: 600'>" . 'Email: '. "</span>". $row['email'] ."</p>". "<br>" .
                                    "<p>" . "<span style='font-weight: 600'>" . 'Password: '. "</span>". $row['password'] ."</p>".
                                "</div>";
                                $count++;
                                
                            }
                        echo "</div>";
                    }
                ?>
            </div> 
            
            <div id="complaints" style='padding: 2rem;'>
                <br>
                <div class="complains">
                    <h1>Complaints</h1>
                    <br>
                    <?php
                        include_once "../php/connection.php";

                        $sql = "SELECT  * FROM complaints";
                        $res = mysqli_query($conn, $sql);
                        $resCheck  = mysqli_num_rows($res);

                        echo "<p>" . $resCheck . ' complaints so far' . "</p>"; 
                        echo "<br><br>";
                        if($resCheck > 0){
                            // Loop through all rows in a table
                            while($row = mysqli_fetch_assoc($res)){
                                echo "<div style='padding: 2rem;
                                background-color: white; 
                                box-shadow: 0 0 20px 1px rgba(0,0,0,0.1);'>" 
                                . $row['message'] . "<br>".
                                 "<p style='color: #818181; margin-top: 10px;'>" . date('D, d F Y', strtotime($row['time'])) . "</p>" . 
                                 "</div>" . "<br>";
                            }
                        }

                    ?>
                </div>
        </div>
    </main>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
    <script>
        // Nav bars
        let dashboard_btn = document.getElementById('dashboard-btn');
        let add_student_btn = document.getElementById('add-student-btn');
        let student_details_btn = document.getElementById('student-details-btn');
        let complaints_btn = document.getElementById('complaints-btn');

        // pages
        let dashboard = document.getElementById('dashboard');
        let add_student = document.getElementById('add-students');
        let student_details = document.getElementById('student-details');
        let complaints = document.getElementById('complaints');

        dashboard_btn.onclick = () => {
            dashboard.style.display = 'block';
            add_student.style.display = 'none';
            student_details.style.display = 'none';
            complaints.style.display = 'none';
        }

        add_student_btn.onclick = () => {
            dashboard.style.display = 'none';
            add_student.style.display = 'block';
            student_details.style.display = 'none';
            complaints.style.display = 'none';
        }

        student_details_btn.onclick = () => {
            dashboard.style.display = 'none';
            add_student.style.display = 'none';
            student_details.style.display = 'block';
            complaints.style.display = 'none';
        }

        complaints_btn.onclick = () => {
            dashboard.style.display = 'none';
            add_student.style.display = 'none';
            student_details.style.display = 'none';
            complaints.style.display = 'block';
        }
    </script>
</body>
</html>