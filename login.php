<?php
$conn = mysqli_connect("localhost", "root", "root123", "school_db");
$message = "";
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" && $password == "admin1234") {
        $message = 'Login Successfully!';
        header("Location: form.php");
        // } else if ($username != "admin") {
        //     $message = 'Invalid Username';
        // } else if ($password != "admin1234") {
        //     $message = 'Invalid Password';
        // } else {
        //     $message = 'Invalid Username And Password';
        // }
    }
}
?>
<!Doctype html>
<html>

<head>
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2 class="heading">Login Page</h2>
    <div class="login-page card w-50 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <form action="login.php" method="POST" class="login-form">
                Username : <input type="text" name="username" required><br><br>
                Password : <input type="password" required name="password" placeholder="Name123"><br><br>
                <input type="submit" name="login" value="Login" class="btn btn-primary">
            </form>
        </div>
        <?php $message = ""; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>