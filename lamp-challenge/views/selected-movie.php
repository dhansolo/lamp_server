<div class="container">
    <h1><?= $result['Title']?></h1>
    <div class="col s6">
        <img src="<?= $result['Poster']?>">
     </div>
    <div class="col s6">
        <b><div>Directed By: <?= $result['Director']?></div></b>
        <b><div>Starring: <?= $result['Actors']?></div></b>
        <b><div>Plot: <?= $result['Plot']?></div></b>
        <b><div>Awards: <?= $result['Awards']?></div></b>
        <b><div>Box Office: <?= $result['BoxOffice']?></div></b>
        <b><div>IMDB Rating: <?= $result['imdbRating']?></div></b>
     </div>
     <button><a href="javascript:history.back()">Go Back</a></button>
</div>

 
