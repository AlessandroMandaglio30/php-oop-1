<?php

require_once __DIR__ . "/Classes/Movie.php";

$spiderman = new Movie('Spiderman - No Way Home', '15-12-2021', 'Jon Watts', 'Action');
$avengers = new Movie('Infinity War', '25-04-2018', 'Kevin Feige', 'Action, Adventure, Science Fiction');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movie</title>
</head>

<body>
    <h1>Movie Oop Php</h1>

    <ol>
        <li>
            <ul>
                <li>Title: <?= $spiderman->getTitle() ?></li>
                <li>Release date: <?= $spiderman->getReleaseDate() ?></li>
                <li>Director: <?= $spiderman->getDirector() ?></li>
                <li>Genere: <?= $spiderman->getGenre() ?></li>
            </ul>
        </li>
        <li>
            <ul>
                <li>Title: <?= $avengers->getTitle() ?></li>
                <li>Release date: <?= $avengers->getReleaseDate() ?></li>
                <li>Director: <?= $avengers->getDirector() ?></li>
                <li>Genere: <?= $avengers->getGenre() ?></li>
            </ul>
        </li>
    </ol>
</body>

</html>