<?php

$pdo = db();
$sql = sqlAllOpenRentals();
$data = $pdo->query($sql);
?>

<table class="table">
    <thead>
        <th scope="col">Rental ID</th>
        <th scope="col">Model</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Start Time</th>
    </thead>
    <tbody>
        <?php while ($opt = $data->fetch()): ?>
            <tr>
                <td><?= $opt['rental_id']; ?></td>
                <td><?= $opt['model']; ?></td>
                <td><?= $opt['first_name'] . $opt['last_name']; ?></td>
                <td><?= $opt['start_time']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>