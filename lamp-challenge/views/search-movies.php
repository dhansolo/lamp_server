<h1>Movies from 2014</h1>
<form action="" method="GET">
    <input type="text"
        id="titleInput" 
        name="title"
        class="form-control" 
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
                <a href="views/selected-movie.php"><?= $movie['title'] ?></a>                    
            </td>  
            <td>
                <?= date('j-M-Y', strtotime($movie['released'])) ?>             
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
