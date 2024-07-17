<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <form action="form.php" method="get">
        <label for="form-name">
            Name: 
        </label>
        <input type="text" name="name" id="form-name">
        <br>
        <label for="form-email">
            Email:
        </label>
        <input type="email" name="email" id="form-email">
        <br>
        <label for="form-age">
            Age:
        </label>
        <input type="number" name="age" id="form-age">
        <br>
        <button type="submit">Submit</button>
    </form>
    <br>

    <?php
    if(isset($_GET['name'])) {
        $escapedName = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
        echo "<p>Hello, <b>$escapedName</b>!</p>";
    }
    if(isset($_GET['email'])) {
        $escapedEmail = htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8');
        echo "<p>Your email is <em>$escapedEmail</em>.</p>";
    }
    if(isset($_GET['age'])) {
        $escapedAge = htmlspecialchars($_GET['age'], ENT_QUOTES, 'UTF-8');
        echo "<p>You are <b>$escapedAge</b> years old.</p>";
    }
    ?>
</body>
</html>