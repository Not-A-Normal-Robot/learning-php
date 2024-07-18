<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in Forms in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <form action="array-form.php" method="get">
        Apple: <input type="checkbox" name="fruits[]" value="apple"> <br>
        Orange: <input type="checkbox" name="fruits[]" value="orange"> <br>
        Banana: <input type="checkbox" name="fruits[]" value="banana"> <br>
        Pear: <input type="checkbox" name="fruits[]" value="pear"> <br>
        Melon: <input type="checkbox" name="fruits[]" value="melon"> <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if(isset($_GET['fruits'])) {
        print_r($_GET['fruits']);
    }
    ?>
</body>
</html>