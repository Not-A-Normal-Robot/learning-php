<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scopes in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    $global = 1;
    echo "Global variable: $global<br>";

    function example() {
        $local = 2;
        echo "Local variable: $local<br>";

        // Initialize a reference to the global variable
        global $global;

        // Modify the global variable
        $global += 2;

        echo "Global variable in function: $global<br>";

        // Create a new global variable from within the function
        global $anotherGlobal;
        $anotherGlobal = 5;
        echo "Another global variable in function: $anotherGlobal<br>";
    }

    example();
    echo "Global variable after function: $global<br>";

    function staticExample() {
        // Static variables retain their values between function calls
        // They are similar to global variables, but are only accessible within the function
        static $static = 3;
        echo "Static variable: $static<br>";
        $static += 3;
    }

    staticExample();
    staticExample();
    staticExample();

    
    ?>
</body>
</html>