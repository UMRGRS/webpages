<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Register</title>
</head>

<body>
<div class="container">
    <form class="form-control bg-black text-white" method="post" action="connection.php">
        <label class="form-label mb-2 fs-4" for="name">Name</label>
        <input class="form-control mb-2" type="text" id="name" name="name" required>
        <label class="form-label mb-2 fs-4" for="email">Email</label>
        <input class="form-control mb-2" type="email" id="email" name="email" required>
        <label class="form-label mb-2 fs-4" for="phone">Phone</label>
        <input class="form-control mb-2" type="text" id="phone" name="phone" required>
        <label class="form-label mb-2 fs-4" for="comment">Comment</label>
        <input class="form-control mb-2" type="text-area" id="comment" name="comment" required>
        <input class="btn btn-primary my-3" type="submit" name="register" value="Register">
    </form>
</div>
</body>

</html>