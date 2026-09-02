<?php
require "connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM school WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Record Deleted Successfully.";
} else {
    echo "Delete Failed.";
}
header("Location:view.php");
exit();
?>