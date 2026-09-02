<?php
require "connection.php";
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phno = $_POST["phno"];
    $course = $_POST["course"];
    $photo = $_POST["photo"];
    $sql = "UPDATE school SET name='$name',email='$email',phno='$phno',course='$course',photo='$photo' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Recordc Update Successfully.";
    } else {
        echo "Update Failed.";
    }
}
header("Location:view.php");
exit();
?>