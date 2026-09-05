<?php
require "connection.php";
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phno = $_POST["phno"];
    $course = $_POST["course"];
    // $photo = $row["photo"];
    // if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {

    //     $photo = time() . "_" . $_FILES["photo"]["name"];

    //     move_uploaded_file(
    //         $_FILES["photo"]["tmp_name"],
    //         "uploads/" . $photo
    //     );
    // }
    $sql = "UPDATE school SET name='$name',email='$email',phno='$phno',course='$course' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record Update Successfully.";
    } else {
        echo "Update Failed.";
    }
    mysqli_query($conn, $sql);

    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {

        $photo = time() . "_" . $_FILES["photo"]["name"];

        move_uploaded_file(
            $_FILES["photo"]["tmp_name"],
            "uploads/" . $photo
        );

        $sql_photo = "UPDATE school 
                      SET photo='$photo' 
                      WHERE id='$id'";

        mysqli_query($conn, $sql_photo);
    }

    header("Location: view.php");
    exit();
}
header("Location:view.php");
exit();
?>