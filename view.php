<?php
require "connection.php";
$school = mysqli_query($conn, "SELECT * FROM school");
$total = mysqli_query($conn, "SELECT * FROM school");
?>
<!Doctype html>
<html>

<head>
    <title>View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body class="body-view">
    <div class="sidebar" style="text-align:left;">

        <h1 class="text-white text-center mb-4">
            Student CRUD
        </h1>

        <a href="dashboard.php">
            Dashboard
        </a>

        <a href="form.php">
            Add Student
        </a>

        <a href="view.php">
            View Students
        </a>

        <a href="index.php">
            Logout
        </a>

    </div>
    <br>
    <h1>Student Details</h1>
    <table border="2" cellpading="60" class="card table-view shadow-lg p-3 mb-5 bg-body-tertiary rounded div-form"
        style="margin-left:200px;">
        <tr class="font-style">
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Course</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($school)) { ?>
            <tr class="font-style">
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td>
                    <div class="id-photo"><img src="uploads/<?php echo $row["photo"]; ?>" width="80" height="80"></div>
                </td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phno"]; ?></td>
                <td><?php echo $row["course"]; ?></td>
                <td><a class="btn btn-warning " href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table><br><br>
    <p><?php echo "Total Students : " . mysqli_num_rows($total); ?></p><br>
    <button><a href="form.php">Add Student</a></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>