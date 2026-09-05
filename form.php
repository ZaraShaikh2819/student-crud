<?php
require "connection.php";


$message = "";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $phno = $_POST["phno"];
    $photo = time() . $name . ".jpg";
    $size = $_FILES["photo"]["size"];
    $temp = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $extension = ($type == "images/png") ? ".png" : ".jpg";


    if (empty($name) || empty($email) || empty($phno) || empty($course) || empty($photo)) {
        $message = "All Fields must be required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid Email!";
    } else if (strlen($phno) != 10) {
        $message = "Phone Number must be of 10 digits!";
    } else if ($type != "image/jpeg" && $type != "image/png") {
        $message = "Only PNG or JPG Images Allowed!";
    } else if ($size > 2097152) {
        $message = "Maximum File Size is 2MB";
    } else {
        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }
        move_uploaded_file($temp, "uploads/" . $photo);
        $stmt = mysqli_prepare($conn, "INSERT INTO school (name,email,course,phno,photo)
                VALUES (?,?,?,?,?);");
        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $course, $phno, $photo);
        $result = mysqli_stmt_execute($stmt); //Returns true or false
        if ($result) {
            $message = '<p class="text-success text-center">Student Added Successfully!</p>';
        } else {
            $message = "Failed to Add Student! Error : " . mysqli_error($conn);
        }
    }
}
?>
<!Doctype html>
<html>

<head>
    <title>
        Form page
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body class="body-form">
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

        <a href="logout.php">
            Logout
        </a>

    </div>
    <div>
        <h1 class="font-style">Add Student</h1>
        <center>
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded div-form" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-2 g-3 ">
                        <form method="post" enctype="multipart/form-data">
                            <div class="photo-upload margin-photo">

                                <label for="photo" class="photo-circle">

                                    <img id="preview" src="images/profile.jpg" alt="Profile Photo">

                                </label>

                                <input type="file" id="photo" name="photo" accept="image/*" required>

                                <div class="invalid-feedback">
                                    Please upload a photo.
                                </div>

                            </div>
                    </div>
                    <div class="col-md-10 g-3 ">
                        <div class="card-body" style="margin-right: -75px;">
                            Name : <input type="text" name="name" required><br><br>
                            Email : <input type="email" name="email" required><br><br>
                            Phone Number : <input type="number" name="phno" required><br><br>
                            Course : <input type="text" name="course" required><br><br>
                            <!-- Photo : <input type="file" name="photo" required><br><br> -->
                            <input type="submit" name="submit" value="submit" class="submit-btn">
                            </form>
                        </div><br><br>
                        <b><?php echo $message; ?></b>
                    </div>
        </center>
    </div>
    </div>
    </div>
    </div>
    </center>
    <script>
        document.getElementById("photo").addEventListener("change", function () {

            const file = this.files[0];

            if (file) {
                document.getElementById("preview").src =
                    URL.createObjectURL(file);
            }

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>