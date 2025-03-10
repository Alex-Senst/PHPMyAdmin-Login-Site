<?php
include("auth_session.php");

require('db.php');

if (isset($_GET['id'])) {
    $user_id = mysqli_real_escape_string($con, $_GET['id']);

    $query = "DELETE FROM users WHERE id = '$user_id'";

    if(mysqli_query($con, $query)){
        echo "<div class='form'>
        <h3>User deleted successfully!</h3>
        </div>";
        header("refresh:1;url=user_list.php");

    } else{
        echo "<div class='form'>
              <h3>Error deleting user. Please try again.</h3>
              </div>";
    }
} else{
        header("Location: user_list.php");
}
?>
