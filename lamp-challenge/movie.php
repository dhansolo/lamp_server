<?php 
require_once 'connection.php';
require_once 'models/movie-model.php';

$conn = getConnection();
$movieModel = new Movies($conn);
$id = '';
if(isset($_GET['id']) && $_GET['id'] !='') { //determines if there is anything after 'id'
    $id = $_GET['id']; //stores the id query string 
    $movie = $movieModel->getMovieByID($id);
} else {
    die('Please put in an ID');
}

$imdbID = ($movie[0]['imdb_id']);
$url = '';
if(empty($imdbID)) {
    $title = ($movie[0]['title']);
    $formattedtitle = preg_replace('/\s+/', '+', $title);
    $url = "http://www.omdbapi.com/?t=$formattedtitle&tomatoes=true";
    $json = file_get_contents($url);
    $result = json_decode($json, true);
} else {
    $url = "http://www.omdbapi.com/?i=$imdbID&tomatoes=true";
    $json = file_get_contents($url);
    $result = json_decode($json, true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>LAMP Server</title>
    <link type="text/css" rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
</head>
<body class="container">
    <?php 
        include 'views/selected-movie.php'; //Shows the selected movie in more detail
    ?>   
</body>
</html>