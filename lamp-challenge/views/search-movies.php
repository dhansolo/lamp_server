<h1>Movies from 2014</h1>
<form action="" method="GET">
    <input type="text"
        class="form-control" 
        id="titleInput" 
        type="search" 
        name="title" 
        value="<?= htmlentities($title) ?>"
        placeholder="Enter a movie title" 
        required
        >
</form>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Release Date</th>
            <th>Tickets Sold</th>   
            <th>Gross Revenue</th>            
        </tr>
        <?php foreach($movies as $movie): ?>
        <tr>
            <td>
                <a href="selected-movie.php"><?= $movie['title'] ?></a>                     
            </td>  
            <td>
                <?= $movie['released'] ?>                 
            </td>  
            <td>
                <?= number_format($movie['tickets']) ?>                 
            </td>  
             <td>
                <?= '$' . number_format($movie['gross']) ?>                 
            </td>     
        </tr>
        <?php endforeach; ?>           
    </thead>
</table>