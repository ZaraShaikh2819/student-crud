<!Doctype html>
<html>

<head>
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <nav class="navbar nav">
            <div class="container navbar">
                <a class="navbar-brand" href="#">
                    <img src="uploads/logo.svg" alt="Bootstrap" height="50">
                </a>
                <ul class="nav justify-content-end">
                    <li>
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Abut Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <p class="divpara">
        <h1 class="p">Welcome To Harvard's</h1>
        <i>Talented students and world-class faculty come together at Harvard to <br>
            collaborate on groundbreaking research,cutting-edge innovations,<br>
            and transformative scholarly work.</i>
        </p>
    </div>

    <br><br>
    <table width="1250px" height="400px">
        <tr>
            <th>
                <h1 class="p float-start">Explore Our Campus</h1><br><br><br>
                <p class="p">Explore our beautiful campus, discover inspiring spaces,<br>
                    and experience a vibrant environment<br>
                    designed for learning, creativity, and growth.
                </p>
            </th>
            <th width="600px">
                <div class="card mb-3 float-end">
                    <div class="row g-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="uploads/2.jpg" class="d-block w-100" alt="..." width="150px"
                                        height="300px">
                                </div>
                                <div class="carousel-item">
                                    <img src="uploads/3.jpg" class="d-block w-100" alt="..." width="150px"
                                        height="300px">
                                </div>
                                <div class="carousel-item">
                                    <img src="uploads/4.jpg" class="d-block w-100" alt="..." width="150px"
                                        height="300px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
    </table>
    <div class="card mb-12 row g-0" style="max-width: 1250px;max-height: 700px">
        <br>
        <div class="col-md-4 float-start">
            <div class="card mb-3">
                <div class="row g-0">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="uploads/5.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="p">Our Museum</h2>
                            </div>
                            <div class="carousel-item">
                                <img src="uploads/6.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="p">Our Museum</h2>
                            </div>
                            <div class="carousel-item">
                                <img src="uploads/7.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="p">Our Museum</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 float-md-none">
            <div class="card-body">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="uploads/8.jpg" class="d-block w-100" alt="..." width="200px"
                                        height="400px">
                                    <h2 class="p">Our Library</h2>
                                </div>
                                <div class="carousel-item">
                                    <img src="uploads/9.jpg" class="d-block w-100" alt="..." width="200px"
                                        height="400px">
                                    <h2 class="p">Our Library</h2>
                                </div>
                                <div class="carousel-item">
                                    <img src="uploads/10.jpg" class="d-block w-100" alt="..." width="200px"
                                        height="400px">
                                    <h2 class="p">Our Library</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 float-end">
            <div class="card-body">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="uploads/11.jpg" class="d-block w-100" alt="..." width="200px"
                                        height="400px">
                                    <h2 class="p">Our Athelics</h2>
                                </div>
                                <div class="carousel-item">
                                    <img src="uploads/12.jpg" class="d-block w-100" alt="..." width="200px"
                                        height="400px">
                                    <h2 class="p">Our Athelics</h2>
                                </div>
                                <div class="carousel-item">
                                    <img src="uploads/13.jpg" class="d-block w-100" alt="..." width="200px"
                                        height="400px">
                                    <h2 class="p">Our Athelics</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-12" style="max-width: 1250px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="uploads/logo.svg" class="img-fluid rounded-start" alt="..." height="400">
            </div>
            <div class="col-md-4 float-md-none">
                <div class="card-body">
                    <center>
                        <p font-size="40"><a href="index.php" class="link-success link-underline-light"> Home</a>
                        </p>
                    </center>
                    <center>
                        <p font-size="40"><a href="about.php" class="link-success link-underline-light"> About Us</a>
                        </p>
                        <a class="nav-link" href="login.php"><button type="button" class="btn btn-primary">Add
                                Student</button></a>
                    </center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <center>
                        <p font-size="20">
                            <b>Address :-<i> Harvard University<br>
                                    Cambridge, MA 02138</i><br>
                                Email :- harvard.edu@gmail.com<br>
                                Contact Number :- 617-495-1000</b><br>
                        </p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>