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
                    <img src="images/logo.svg" alt="Bootstrap" height="50">
                </a>
                <ul class="nav justify-content-end">
                    <li>
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a class="nav-link" href="login.php"><button type="button"
                                class="btn btn-danger">Login</button></a>
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
    <table width="1250px" height="400px">
        <tr>
            <th>
                <h1 class="para float-start">Explore Our Campus</h1><br><br><br>
                <p class="para">Explore our beautiful campus, discover inspiring spaces,<br>
                    and experience a vibrant environment<br>
                    designed for learning, creativity, and growth.
                </p>
            </th>
            <!-- CAMPUSS -->
            <th width="400px">
                <div class="card mb-3 float-end">
                    <div class="row g-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/1.jpg" class="d-block w-100" alt="..." width="150px"
                                        height="300px">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/2.jpg" class="d-block w-100" alt="..." width="150px"
                                        height="300px">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/4.jpg" class="d-block w-100" alt="..." width="150px"
                                        height="300px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
    </table>
    <!-- MAIN SLIDER -->
    <div class="mb-12 row g-3 ps-4" style="max-width: 1250px;max-height: 700px">
        <div class="col-md-4 float-start">
            <div class="card mb-3">
                <!-- SLIDER 1 -->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="images/5.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                            <h2 class="para">Our Museum</h2><br><br><br>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/8.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                            <h2 class="para">Our Library</h2><br><br><br>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/12.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                            <h2 class="para">Our Athelitics</h2><br><br><br>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="Carousel-Btn  carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4 float-md-none">
            <div class="card-body">
                <div class="card mb-3">
                    <!-- SLIDER 2 -->
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                        data-bs-pause="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="images/8.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="para">Our Library</h2><br><br><br>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/12.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="para">Our Athelitics</h2><br><br><br>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/5.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="para">Our Museum</h2><br><br><br>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="Carousel-Btn  carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 float-end">
            <div class="card-body">
                <div class="card mb-3">
                    <!-- <div class="row g-0"> -->
                    <!-- SLIDER 3 -->
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                        data-bs-pause="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="images/12.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="para">Our Athelitics</h2><br><br><br>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/5.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="para">Our Museum</h2><br><br><br>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/8.jpg" class="d-block w-100" alt="..." width="200px" height="400px">
                                <h2 class="para">Our Library</h2><br><br><br>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="Carousel-Btn  carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-12" style="max-width: 1250px;">
        <div class="row g-0">
            <footer class="bg-dark text-white py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 float-end">
                            <center>
                                <h1><b>Security Brand</b></h1>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Report Copyright Infigiment</a>
                                </p>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Report Security Issue</a>
                                </p>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Trade Mark Notice</a>
                                </p>
                        </div>
                        </center>
                        <div class="col-md-4 float-end">
                            <center>
                                <h1><b>Website</b></h1>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Accessibility</a>
                                </p>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Digital Accessibility</a>
                                </p>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Privacy Statement</a>
                                </p>
                        </div>
                        </center>
                        <div class="col-md-4 float-end">
                            <center>
                                <h1><b>Get In Touch</b></h1>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Contact Harvard</a>
                                </p>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Maps and Direction</a>
                                </p>
                                <p font-size="40"><a href="#" class="link-light link-underline-dark">
                                        Jobs</a>
                                </p>
                        </div>
                        </center><br><br><br>
                        <div class="col-md-4 float-end">
                            <center>
                                <p class="secondary">Copyright © 2026 The President and Fellows of Harvard College</p>
                            </center>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img src="images/logo.png" width="250">
                            </center>
                        </div>
                        <div class="col-md-4">


                            <h5>Quick Links</h5>

                            <div class="card-body">

                                <p font-size="40" class="deco"><a href="index.php"
                                        class="link-light link-underline-dark">
                                        Home</a>
                                </p>


                                <p font-size="40"><a href="about.php" class="link-light link-underline-dark">
                                        About Us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
</body>

</html>