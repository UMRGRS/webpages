<?php
    include("connection.php");
    GetUser();
    $row = $result -> fetch_assoc();
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
    <form method="post" action="connection.php">
        <label for="userID">User ID</label><br>
        <input type="text" id="userID" name="IdToModify" value = <?php echo "$row[ID_user]"?> readonly><br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="nameToModify" value = <?php echo "$row[name]"?> required><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="emailToModify" value= <?php echo "$row[email]"?> required><br>
        <label for="phone">Phone</label><br>
        <input type="text" id="phone" name="phoneToModify" value= <?php echo "$row[phone]"?> required><br>
        <label for="comment">Comment</label><br>
        <input type="text-area" id="comment" name="commentToModify" value= <?php echo "$row[comment]"?> required><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>