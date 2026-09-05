<?php
require "connection.php";
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM school WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>
<!Doctype html>
<html>

<head>
    <title>View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body class="body-view">
    <div class="sidebar">

        <h1 class="text-white text-center mb-4">
            Student CRUD
        </h1>

        <a href="form.php">
            Add Student
        </a>

        <a href="view.php">
            View Students
        </a>

        <a href="edit.php">
            Edit
        </a>

        <a href="index.php">
            Logout
        </a>

    </div>
    <h1>Edit Student</h1>
    <form action="update.php" method="post" class="font-style">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"><br><br>
        Name : <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br><br>
        Email : <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br><br>
        Phone Number : <input type="number" name="phno" value="<?php echo $row["phno"]; ?>"><br><br>
        Course : <input type="text" name="course" value="<?php echo $row["course"]; ?>"><br><br>
        Photo : <input type="file" name="photo" value="<?php echo $row["photo"]; ?>"><br><br>
        <input type="submit" value="update" name="update" required>
    </form>
</body>

</html>