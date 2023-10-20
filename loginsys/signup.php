<?php
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an error variable
    

    // Include your database connection script
    include 'partials/_dbconnect.php';

    // Get the values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $exists = false;

    // Check if the provided password matches and exists is false
    if ($password == $password && $exists == false) {
        // Define your SQL query or operations here
        $sql = "INSERT INTO `user2` (`email_username`, `password`)
        VALUES ('$username', '$password')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $err = "Success: Data inserted into the database.";
        }else{
            $err="Error:".mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>
    <?php require 'partials/_nav.php'; ?>
    <div class="container">
        <h1 class="text-center">Signup to the Portal</h1>
        <form action="/loginsys/signup.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"
                    required>
                <small class="form-text text-muted">We'll never share your username with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p><?php echo $err; ?></p>
    </div>

    <!-- Bootstrap JS and Custom JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYlT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-9/re3BcBibbJb8V3u6joMAF5uok2q0Mg3nZ/A7vc0CwJF4f1usApmFgkSTm5k1Q5B"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50E5bKI6m5VpVg8r/6HJp6z5M5u7RJb5FO5w5VRjxG5F5F5F5F5F5F5F5F5F5F5"
        crossorigin="anonymous"></script>
</body>

</html>
