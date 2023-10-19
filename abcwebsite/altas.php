<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form method="post" action="connection.php">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone</label><br>
        <input type="text" id="phone" name="phone" required><br>
        <label for="comment">Comment</label><br>
        <input type="text-area" id="comment" name="comment" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>

</html>