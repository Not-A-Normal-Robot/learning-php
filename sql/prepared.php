<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared MySQL in PHP</title>
</head>
<body>
    <?php
        include 'modules/connect.php';
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id = "2147483647";
        $name = "Thingamajig";
        $qty = 4;
        
        $statement = $conn->prepare("INSERT INTO products (id, name, qty) VALUES (?, ?, ?)");
        $statement->bind_param(
            "ssi",
            $id,
            $name,
            $qty
        );

        $statement->execute();
    ?>
</body>
</html>