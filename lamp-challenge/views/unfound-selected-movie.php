<h3><?= $result['title']?> not found</h3>
<b><div>Database Information:</div></b>
<div>Released: <?= date('j-M-Y', strtotime($result['released']))?></div>
<div>Distributor: <?= $result['distributor']?></div>
<div>Genre: <?= $result['genre']?></div>
<div>Rating: <?= $result['rating']?></div>
<div>Gross: $<?= number_format($result['gross'])?></div>
<div>Tickets: <?= number_format($result['tickets'])?></div>