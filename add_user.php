<?php
    include("auth_session.php");

    require('db.php');

    if (isset($_POST['submit'])) {
        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $create_datetime = date("Y-m-d H:i:s");

        $query    = "INSERT into `users` (first_name, last_name, username, password, email, create_datetime)
                     VALUES ('$first_name', '$last_name', '$username', '" . md5($password) . "', '$email', '$create_datetime')";
        
        if (mysqli_query($con, $query)){
            echo "<div class='form'>
                <h3>User added successfully!</h3>
                </div>";
        } else{
            echo "<div class='form'>
                <h3>Error adding user. Please try again.</h3><br>
                </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style2.css" />
    <style>
        body{
            background-color: #2498db;
            color:rgb(30, 0, 255);
            font-family: Arial, sans-serif;
            margin: 10px;
            padding: 0px;
        }
        h1{
            color: rgb(0, 62, 98);
        }
        h2{
            color:rgb(0, 0, 0);
        }
        .logout-button{
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color:rgb(121, 131, 192);
            color:white;
            border: none;
            cursor: pointer;
            font-size: 20px;
            border-radius: 5px;
        }
        .logout-button:hover{
            background-color:rgb(99, 192, 255);
            color: white;
        }
        header {
            padding: 1px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

            nav ul li {
                display: inline;
                margin: 0 15px;
            }

                nav ul li a {
                    text-decoration: none;
                    color: white;
                    font-size: 20px;
                    padding: 10px;
                }

                    nav ul li a.active {
                        font-weight: bold;
                        color:rgb(10, 31, 163);
                        text-decoration: underline;
                    }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="user_dash.php">Home</a></li>
                <li><a href="user_list.php">View Users</a></li>
                <li><a href="add_user.php" class="active">Add Users</a></li>
                <li><a href="logout.php"><button class="logout-button">Logout</button></a>
            </ul>
        </nav>
    </header>

    <h2>Add New User</h2>

    <form action="" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Add User">
    </form>
</body>
</html>