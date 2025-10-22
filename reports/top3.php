<?php

$pdo = db();
$sql = sqlTop3Bikes();
$data = $pdo->query($sql);
?>

<table class="table">
    <thead>
        <th scope="col">Bike ID</th>
        <th scope="col">Model</th>
        <th scope="col">Type</th>
        <th scope="col">Hourly Rate</th>
    </thead>
    <tbody>
        <?php while ($opt = $data->fetch()): ?>
            <tr>
                <td><?= $opt['bike_id']; ?></td>
                <td><?= $opt['model']; ?></td>
                <td><?= $opt['type']; ?></td>
                <td>$<?= $opt['hourly_rate']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>