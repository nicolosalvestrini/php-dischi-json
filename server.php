<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $cover = $_POST['cover'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];

    $jsonData = file_get_contents('dischi.json');
    $dischi = json_decode($jsonData, true);


    $newAlbum = [
        'title' => $title,
        'artist' => $artist,
        'cover' => $cover,
        'year' => $year,
        'genre' => $genre
    ];

    $dischi[] = $newAlbum;

    $disc_json = json_encode($dischi);

    file_put_contents('dischi.json', $disc_json );

    header('Location: index.php');
    
}
else {
    header('Location: index.php');
    
}