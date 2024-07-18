<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    class LandVehicle {
        /** @var float */
        protected $fuelRem;

        function __construct() {
            $this->refill();
        }

        function drive() {
            if($this->fuelRem <= 0) {
                echo 'No fuel, cannot drive';
                return;
            }

            $fuelConsumption = $this->getFuelConsumption();

            $this->fuelRem -= $fuelConsumption;
            echo "Driving (-$fuelConsumption fuel)";
        }

        function getFuelRemaining() {
            return $this->fuelRem;
        }

        function refill() {
            $this->fuelRem = 100.0;
        }

        function getFuelConsumption() {
            return 10;
        }
    }

    class Truck extends LandVehicle {
        function refill() {
            $this->fuelRem = 2000.0;
        }

        function getFuelConsumption() {
            return 90;
        }
    }

    $car = new LandVehicle();
    echo "Car has " . $car->getFuelRemaining() . " fuel remaining";
    echo "<br>Car will consume " . $car->getFuelConsumption() . " fuel every drive <br>";
    $car->drive();
    echo "<hr>";

    $truck = new Truck();
    echo "<br>Truck has " . $truck->getFuelRemaining() . " fuel remaining";
    echo "<br>Truck will consume " . $truck->getFuelConsumption() . " fuel every drive<br>";
    $truck->drive();
    ?>
</body>
</html>