<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    $int = 1;
    
    // IF-ELSE statements are simple branches
    // You can also do IF-ELSEIF-ELSE
    if($int == 1) {
        echo "One<br>";
    } else if($int == 2) {
        echo "Two<br>";
    } else {
        echo "Neither one nor two<br>";
    }

    $word = "Hello";

    // Switches are used to compare a single value against multiple values
    // They are in a sense similar to a long chain of IF-ELSEIF-ELSE statements
    switch($word) {
        case "Hello":
            echo "Word is a common greeting<br>";
            break;
        case "Hi":
            echo "Word is another common greeting<br>";
            break;
        case "Bye":
            echo "Word is a common farewell<br>";
            break;
        case "Goodbye":
            echo "Word is another common farewell<br>";
            break;
        default:
            echo "Word is not a common greeting or farewell<br>";
            break;
    }

    $powOfTwo = 1;

    // WHILE statements loop while a certain condition is true
    // They may not run if the condition is false from the start
    while($powOfTwo < 100) {
        echo "$powOfTwo ";
        $powOfTwo = $powOfTwo + $powOfTwo;
    }
    echo "<br>";

    // DO-WHILE statements are similar to WHILE statements
    // The difference is that DO-WHILE statements always run at least once
    $powOfTwo = 128;
    do {
        echo "$powOfTwo ";
        $powOfTwo = $powOfTwo * 2;
    } while($powOfTwo < 100);

    echo "<br>";

    // FOR loops are usually used when you know how many times you want to loop
    // They have three parts: initialization, condition, and increment
    // We initialize $i to 0, loop while $i is less than 10, and increment $i by 1 each loop
    for($i = 0; $i < 10; $i++) {
        echo "$i ";
    }
    echo "<br>";


    // FOREACH loops are used to loop through arrays
    // They are simpler than FOR loops and are used when you don't need the index
    $array = array(1, 2, 3, 4, 5);
    foreach($array as $value) {
        echo "$value ";
    }
    echo "<br>";

    // Functions are used to group code into reusable blocks
    function plusThree($number) {
        return $number + 3;
    }
    echo "5 + 3 = " . plusThree(5) . "<br>";
    ?>
</body>
</html>