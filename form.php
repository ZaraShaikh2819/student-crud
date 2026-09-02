<!Doctype html>
<html>

<head>
    <title>
        Form page
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Form</h1>
    <form method="post" action="create.php">
        Name : <input type="text" name="name" required><br><br>
        Email : <input type="email" name="email" required><br><br>
        Phone Number : <input type="number" name="phno" required><br><br>
        Course : <input type="text" name="course" required><br><br>
        Photo : <input type="file" name="photo" required><br><br>
        <input type="submit" name="submit" value="submit">
    </form><br><br>
    <b><?php echo $message; ?></b>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>