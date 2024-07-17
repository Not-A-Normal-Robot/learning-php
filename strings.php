<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    $string = "Hello, World! This is a string in PHP.";
    echo "String: $string<br>";
    echo "Length: " . strlen($string) . "<br>";
    echo "Words: " . str_word_count($string) . "<br>";
    echo "Word 'World' at position: " . strpos($string, "World") . "<br>";
    echo "Word 'Goodbye' at position: " . strpos($string, "Goodbye") . "<br>";

    $lowercase = "this is a string";
    echo "Lowercase: $lowercase<br>";
    
    $uppercase = strtoupper($lowercase);
    echo "Uppercase: $uppercase<br>";

    $alsoLowercase = strtolower($uppercase);
    echo "Back to lowercase: $alsoLowercase<br>";

    $replaced = str_replace("a string", "some text", $lowercase);
    echo "Replaced: $replaced<br>";

    $reversed = strrev($string);
    echo "Reversed: $reversed<br>";

    $trimmed = trim("  $string  ");
    echo "Trimmed: $trimmed<br>";

    $split = explode(" ", $string);
    echo "Split: ";
    print_r($split);

    $sliced = substr($string, 7, 5);
    echo "<br>Sliced: $sliced<br>";

    $char = $string[7];
    echo "Character at position 7: $char<br>";
    ?>
</body>
</html>