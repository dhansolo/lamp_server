<h1>Movies from 2014</h1>
<a href="https://github.com/INFO344-win-2016/challenges-dhansolo.git">Github repo</a>
<form action="" method="GET">
    <div class="form-group">
        <input type="text"
            id="titleInput" 
            name="title"
            class="form-control" 
            value="<?= htmlentities($title) ?>"
            placeholder="Enter a movie title or keyword" 
            required
            >
     </div>
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
                <a href="./movie.php?id=<?= $movie['ID']?>"><?= $movie['title']?></a>                    
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
