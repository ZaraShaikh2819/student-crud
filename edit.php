<?php
require "connection.php";
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM school WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>
<h2>Edit Student</h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Name : <input type="text" name="name" value="<?php echo $row["name"]; ?>">
    Email : <input type="email" name="email" value="<?php echo $row["email"]; ?>">
    Course : <input type="text" name="course" value="<?php echo $row["course"]; ?>">
    Photo : <input type="file" name="photo" value="<?php echo $row["photo"]; ?>">
</form>