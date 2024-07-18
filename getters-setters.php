<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    class Movie {
        /** @var string */
        public $title;

        /** @var string */
        public $description;

        /** @var string */
        private $rating;

        /**
         * @param string $title
         * @param string $description
         * @param string $rating
         */
        function __construct($title, $description, $rating) {
            $this->title = $title;
            $this->description = $description;
            $this->setRating($rating);
        }

        function getRating() {
            return $this->rating;
        }

        /**
         * @param string $rating
         * @return boolean
         */
        function isValidRating($rating) {
            return
                $rating == "G"     ||
                $rating == "PG"    ||
                $rating == "PG-13" ||
                $rating == "R"     ||
                $rating == "NR";
        }

        /** @param string $rating */
        function setRating($rating) {
            if($this->isValidRating($rating)) {
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }

        function display() {
            $escapedTitle = htmlspecialchars($this->title, ENT_QUOTES, 'UTF-8');
            $escapedDesc = htmlspecialchars($this->description, ENT_QUOTES, 'UTF-8');

            echo "<h1>$escapedTitle</h1>";
            echo "<em>Rated $this->rating</em>";
            echo "<p>$escapedDesc</p>";
        }
    }

    $avengers = new Movie(
        "Avengers",
        "A well-received movie about superheroes.",
        "PG-13"
    );

    $avengers->display();

    $bluey = new Movie(
        "Bluey",
        "A viral cartoon with cute animals",
        "G"
    );

    $bluey->display();

    $invalid = new Movie(
        "<h3>Invalid!",
        "<script>alert('html injection test');</script>",
        "BRUH"
    );

    $invalid->display();
    ?>
</body>
</html>