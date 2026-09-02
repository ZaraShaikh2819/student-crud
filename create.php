<?php
require "connection.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phno = $_POST["phno"];
    $course = $_POST["course"];
    if (!file_exists("uploads")) {
        mkdir("uploads", 0777, true);
    }
    $photo = time() . "_" . $_FILES["photo"]["name"];
    $temp = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"];
    if (empty($name) || empty($email) || empty($phno) || empty($course)) {
        $message = "Name,email,phone number and course are required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid Email.";
    }
    $sql = "INSERT INTO school(name,email,phno,course,photo)
    VALUES ('$name','$email','$phno','$course','$photo')";
    if (mysqli_query($conn, $sql)) {
        echo "Student Added Successfully.";
    } else {
        echo "Unable to Add Student.";
    }
}
?>
<br><br>
<a href="form.php">Add Another Student</a>
<a href="view.php">View Students</a>