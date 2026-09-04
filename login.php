<?php
$conn = mysqli_connect("localhost", "root", "root123", "school_db");
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $stmt = mysqli_prepare($conn, "SLECT * FROM admin WHERE username =? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        echo "Login Successful.";
    } else {
        echo "Invalid Login.";
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
    <h2 class="heading">Add Student</h2>
    <div class="login-page card w-50 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <form action="login.php" method="POST" class="login-form">
                Username : <input type="text" name="username" required><br><br>
                Password : <input type="password" required name="password" placeholder="Name123"><br><br>
                <input type="submit" value="Login" class="btn btn-primary"> <a href="view.php"
                    class="btn btn-primary">View</a>
            </form>
        </div>
        <?php $message = ""; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>