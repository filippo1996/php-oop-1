<?php 

include_once 'Classes/ListMovies.php';
include_once 'Classes/Movie.php';
$listFilms = include_once 'listFilms.php';

$movie = new Classes\Movie($listFilms);

/*
var_dump($movie->getAll());
var_dump($movie->getInfo('title'));
*/

include_once 'views/movie_tp.php';