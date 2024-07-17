<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    $int = 1;
    echo "Integer: $int<br>";

    $float = 3.14;
    echo "Float: $float<br>";

    $string = "Hello, World!";
    echo "String: $string<br>";
    
    $bool = true;
    echo "Boolean: $bool<br>";

    // Indexed arrays' values have indices starting from zero
    // Arrays' values doesn't have to be of the same type
    $indexedArray = array(0, true, 2, "3", 4.0, 5);
    echo "Indexed Array: ";
    print_r($indexedArray);
    echo "(First element: $indexedArray[0])<br>";

    // Associative arrays' values have indices as strings
    // They are similar to hash tables in other languages
    $associativeArray = 
        array("first" => 1, "second" => 2, "third" => 3);
    
    echo "Associative Array: ";
    print_r($associativeArray);
    echo "<br>";

    class Example {
        public $property = "Property";
        private $privateProperty = "Private Property";
    }

    $objectInstance = new Example();
    $property = $objectInstance->property;
    echo "Object: $property<br>";

    // Resource is a special data type that holds a reference to an external resource
    $fileHandle = fopen("variables.php", "r");

    if(is_resource($fileHandle)) {
        echo "File handle is a resource<br>";
    }

    // Null represents a variable with no value
    $none = null;
    if(is_null($none)) {
        echo "\$none is null<br>";
    }
    ?>
</body>
</html>