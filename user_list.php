<?php
    include("auth_session.php");
    require('db.php');

    $query = "SELECT * FROM users";
        $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="dash_style.css" />
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="user_dash.php">Home</a></li>
                <li><a href="user_list.php" class="active">View Users</a></li>
                <li><a href="add_user.php">Add Users</a></li>
                <li><a href="logout.php"><button class="logout-button">Logout</button></a>
            </ul>
        </nav>
    </header>

    <h2>Users List</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Display all users in a table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>
                            <a href='delete_user.php?id=" . $row['id'] . "'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
