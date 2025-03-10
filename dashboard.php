<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form p {
            font-size: 18px;
        }

        .form a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
    <script>
        //Redirect to actual dashboard page after 2 seconds
        setTimeout(function(){
            window.location.replace('user_dash.php');
        }, 2000);
    </script>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now in the user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>