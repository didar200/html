<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Your Name: <?php echo $_POST["name"]; ?> <br>
    Email: <?php echo $_POST["email"]; ?> <br>
    Password: <?php echo $_POST["password"]; ?> <br>
    Phone: <?php echo $_POST["phone"]; ?> <br>
    Country: <?php echo $_POST["country"]; ?> <br>
    Gender: <?php echo $_POST["gender"]; ?> <br>
    Description: <?php echo $_POST["message"]; ?>

</body>
</html>