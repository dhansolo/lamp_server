<?php 
require_once 'connection.php';
require_once 'models/movie-model.php';

$title = ''; //gets query string after the word 'title'. Search for how to test if a query string is empty php.
if(isset($_GET['title'])) { //determines if there is anything after 'title'
    $title = $_GET['title']; //set the $title equal to the title the user searched for
}

$conn = getConnection(); //makes connection with database
$movieModel = new Movies($conn); // Creates a new movie model with the connection
$movies = $movieModel->getAllMovies($title); //Calls getAllMovies() to do just that
/*
echo '<pre>';
var_dump($movies[0]['imdb_id']);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>LAMP Server</title>
    <link type="text/css" rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
</head>
<body class="container">
    <?php 
        include 'views/search-movies.php'; //Shows the main view page
    ?>   
</body>
</html>