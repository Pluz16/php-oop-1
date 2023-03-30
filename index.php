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
