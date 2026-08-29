<!Doctype html>
<html>

<head>
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="uploads/logo.svg" alt="Bootstrap" width="30" height="24">
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
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="uploads/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Harverd University</h5>
                    <p>Best Univerty Around the world.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Harverd University</h5>
                    <p>Best Univerty Around the world.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <figure class="text-end">
            <blockquote class="blockquote">
                <p>Harvard University is a private Ivy League research university in Cambridge, Massachusetts,
                    United States. Founded in 1636, and named Harvard College in 1639 in honor of its first
                    benefactor, Puritan clergyman John Harvard, it is the oldest institution of higher learning in
                    the United States. Its influence, wealth, and rankings have made it one of the most prestigious
                    universities in the world.

                    Harvard was founded and authorized by the Massachusetts General Court, the governing legislature
                    of colonial-era Massachusetts Bay Colony.While never formally affiliated with any
                    Protestant denomination, Harvard trained Congregational clergy until its curriculum and student
                    body were gradually secularized in the 18th century. In 1780, the Constitution of Massachusetts
                    referred to it as a university, and a new medical school established in 1782 was named the
                    Medical Institution of Harvard University; but this was a new name, not a new foundation.
                    Harvard College soon became the name of the university's undergraduate division.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
        </figure>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>