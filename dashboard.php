<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="style.css">

    <!-- <style>
        .sidebar {
            width: 230px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background-color: #303d7c;
            padding: 20px 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background-color: #202b60;
        }

        .content {
            margin-left: 230px;
            padding: 30px;
        }
    </style> -->
</head>

<body>


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

        <a href=".php">
            Edit
        </a>

        <a href="index.php">
            Logout
        </a>

    </div>

    <div class="content">

        <h1>Website layout</h1>

        <h2 class="font-style h2"> Home Page</h2>
        <hr>
        <hr>
        <h2 class="font-style h2"> NavBar</h2>
        <div class="header">
            <nav class="navbar nav">
                <div class="container navbar">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.svg" alt="Bootstrap" height="50">
                    </a>
                    <ul class="nav justify-content-end">
                        <li>
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link" href="login.php"><button type="button" class="btn btn-danger">Add
                                    Student</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <p class="divpara header-text">
            <h1 class="para">Welcome To Harvard's</h1>
            <i>Talented students and world-class faculty come together at Harvard to <br>
                collaborate on groundbreaking research,cutting-edge innovations,<br>
                and transformative scholarly work.</i>
            </p>
        </div>
        <br><br>
    </div><br>
    <h2 class="font-style h2"> Photos</h2>

</body>

</html>