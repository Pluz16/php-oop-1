<?php

// Definizione della classe Movie
class Movie {
    public $title;
    public $director;
    public $year;
    public $rating;

    // Costruttore della classe Movie
    public function __construct($title, $director, $year, $rating) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->rating = $rating;
    }

    // Metodo della classe Movie per stampare le informazioni del film
    public function printInfo() {
        echo "Title: {$this->title} <br>";
        echo "Director: {$this->director} <br>";
        echo "Year: {$this->year} <br>";
        echo "Rating: {$this->rating} <br>";
    }
}


// Creazione di due oggetti della classe Movie
$movie1 = new Movie("The Godfather", "Francis Ford Coppola", 1972, 9.2);
$movie2 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, 9.3);


// Stampa a schermo delle informazioni dei due film
echo "<h1>Movie 1:</h1>";
$movie1->printInfo();

echo "<h1>Movie 2:</h1>";
$movie2->printInfo();
