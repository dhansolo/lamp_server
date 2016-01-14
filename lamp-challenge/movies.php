<?php 
require_once 'connection.php';
require_once 'models/movie-model.php';

$title = $_GET['title']; //gets query string after the word 'title'
if(isset($title)) {
    if(empty($title)) {
        //set to nothing
    }
}

$conn = getConnection(); //makes connection with database
$movieModel = new Movies($conn); // Creates a new movie model with the connection
$movies = $movieModel->getAllMovies($title); //Calls getAllMovies() to do just that


/*echo '<pre>';
var_dump($movies);
echo '</pre>';*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>LAMP Server</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body class="container">
    <?php 
        include 'views/search-movies.php'; //Shows the main view page
        include 'views/selected-movie.php';
    ?>   
</body>
</html>