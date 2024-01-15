<?php

require_once  __DIR__.'/models/movie.php';

$movie1 = new Movie("Sick of Myself", "Drama", "Kristoffer Borgli");
$movie2 = new Movie("The Hunt", "Drama", "Thomas Vinterberg");
$movie3 = new Movie("Raising Arizona", "Comedy", "Joel Coen");

var_dump($movie1);

$movie1->mostraFilm();

$movie2->mostraFilm();

$movie3->mostraFilm();

?>
