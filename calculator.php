<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Addition Calculator</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="lhs" id="lhs">
        +
        <input type="number" name="rhs" id="rhs">
        <br>
        <button type="submit">Calculate!</button>
    </form>
    
    <?php
    if(isset($_GET['lhs']) && isset($_GET['rhs'])) {
        $lhs = floatval($_GET['lhs']);
        $rhs = floatval($_GET['rhs']);

        $result = $lhs + $rhs;
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>