<?php

require 'functions.php';
require 'database.php';

$pdo = db();

$functions = [
    'available' => 'reports/available.php',
    'top3' => 'reports/top3.php',
    'open' => 'reports/open.php',
    'multi' => 'reports/multi.php',
    'customers' => 'reports/customers.php',
    'completed' => 'reports/completed.php',
];

if ($_GET) {
    $report = $_GET['report'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Bike Shop</title>
</head>

<body>
    <!-- NAVIGATION -->
    <div>
        <nav>
            <ul class="navbar">
                <li><a href="?report=available">Available Bikes</a></li>
                <li><a href="?report=top3">Top 3 Bikes by Hourly Rate</a></li>
                <li><a href="?report=open">Open Rentals</a></li>
                <li><a href="?report=multi">Rentals + Customers + Bikes (JOIN)</a></li>
                <li><a href="?report=customers">All Customers (sorted by last, first)</a></li>
                <li><a href="?report=completed">Completed Rentals (DateTime)</a></li>
            </ul>
    </div>
</nav>

<?php include $functions[$report]; ?>

</body>

</html>