<?php
require "connection.php";
$students = mysqli_query($conn, "SELECT * FROM students");
$total = mysqli_query($conn, "SELECT * FROM students");
?>
<table border="1" cellpading="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Course</th>
        <th>Photo</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($students)) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phno"]; ?></td>
            <td><?php echo $row["course"]; ?></td>
            <td><img src="uploads/<?php echo $row["photo"]; ?>" width="80" height="80"></td>
            <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="delete.php?id<?php echo $row["id"]; ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>
<p><?php echo "Total Students : " . mysqli_num_rows($total); ?></p><br>
<a href="form.php">Add Student</a>