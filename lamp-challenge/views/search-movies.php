<h1>Movies from 2014</h1>
<form action="" method="GET">
    <input class="form-control" id="qinput" name="q" type="search" name="title" placeholder="Enter a movie title" required>
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
                <?= htmlentities($movie['title']) ?>                     
            </td>  
            <td>
                <?= htmlentities($movie['released']) ?>                 
            </td>  
            <td>
                <?= htmlentities($movie['tickets']) ?>                 
            </td>  
             <td>
                <?= htmlentities($movie['gross']) ?>                 
            </td>     
        </tr>
        <?php endforeach; ?>           
    </thead>
</table>