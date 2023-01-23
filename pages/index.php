<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminLogin.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <title>ADMIN|LOGIN</title>

</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="banner">
                <h1>Strictly for Admin</h1>
            </div>
            <div class="green-bg">
            </div>
            <form action="../php/admin-auth.php" method="POST" class="signup-form">
                <h1>Admin LogIn</h1>
                <br>
                    <div class="input-group">
                    <i class="fas
                    fa-envelope"></i>
                    <input type="email" placeholder="E-mail" name="email" required>
                </div>
                    <div class="input-group">
                    <i class="fas
                    fa-lock"></i>
                    <input type="password" placeholder="password" name="password" required>
                    </div>
                    <input type="submit" value="LOGIN NOW" style="text-decoration: none; background-color: dodgerblue; padding: 10px 20px;
                    width: 70%; text-align: center; color: white; font-weight: 700;" >
                </a>
            </form>
        </div>
    </div>


    <!-- <script src="../script/script.js"></script> -->

</body>
</html>


