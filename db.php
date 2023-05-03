<?php
$firstMovie = new Movie("Monella", new Cast("Anna Ammirati", "Max Parodi", "Patrick Mower"), ["Comedy", "Erotic"], 1998, 120);
$secondMovie = new Movie("Barry Lyndon", new Cast("Ryan O'Neal", "Marisa Berenson", "Patrick Magee"), ["Drama", "Historic"], 1975, 184);


$movies = [
    $firstMovie,
    $secondMovie
];

// var_dump($firstMovie);
?>