<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login_form.php");
    exit;
}

// Include config file
require_once "config.php";

/**
 * Helper function for displaying user in a list
 * Object-based notation, not procedural, e.g. (mysqli_num_rows($result) > 0) ==> ($result->num_rows > 0)
 */
function show_users_list($mysqli)
{
    $sl_select_items = "SELECT username FROM users";
    if ($items = $mysqli->query($sl_select_items)) {
        echo "<div class='container_items'>";
        echo "<h3>Active users</h3>";
        if ($items->num_rows > 0) {
            echo "<ul class='list-group'>";
            while ($row = $items->fetch_array()) {
                echo "<li class='list-group-item'>";
                echo $row['username'];
                echo "</li>";
            }
            echo "</ul>";
        }
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>

<body>
    <div class="wrapper">
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        </div>
        <p>
            <a href="reset_password_form.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
        <div>
            <?php
            show_users_list($mysqli);
            ?>
        </div>
    </div>
</body>

</html>