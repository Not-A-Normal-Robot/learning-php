<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects and Classes in PHP</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    class Book {
        /** @var string */
        public $title;

        /** @var string */
        public $author;

        /** @var number */
        public $pages;

        public function display() {
            $escapedTitle = htmlspecialchars($this->title, ENT_QUOTES, 'UTF-8');
            $escapedAuthor = htmlspecialchars($this->author, ENT_QUOTES, 'UTF-8');
            
            echo "<h1>$escapedTitle</h1>";
            echo "<h4>Written by $escapedAuthor</h4>";
            echo "<em>$this->pages pages</em>";
        }

        /**
         * @param string $title
         * @param string $author
         * @param number $pages
         */
        function __construct($title, $author, $pages) {
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }
    }

    // $book1 = new Book;
    // $book1->title = "Harry Potter";
    // $book1->author = "J.K. Rowling";
    // $book1->pages = 426;

    $book1 = new Book(
        "Harry Potter",
        "J.K. Rowling",
        426
    );

    $book1->display();

    // $book2 = new Book;
    // $book2->title = "The Rust Programming Language Book";
    // $book2->author = "The Rust Programming Language Community";
    // $book2->pages = 262;

    $book2 = new Book(
        "The Rust Programming Language Book",
        "The Rust Programming Language Community",
        262
    );

    $book2->display();

    // $book3 = new Book;
    // $book3->title = "Learning PHP for Dummies";
    // $book3->author = "Dummies";
    // $book3->pages = 626;
    
    $book3 = new Book(
        "Learning PHP for Dummies",
        "Dummies",
        626
    );

    $book3->display();
    ?>
</body>
</html>