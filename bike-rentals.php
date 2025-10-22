<?php

require 'functions.php';
require 'database.php';


$pdo = db(); //establish db connection

$sql = sqlAllCustomers(); // assign sql string

$result = $pdo->query($sql);

// SQL STATEMENTS
echo "<h3 style='padding-left: 25px;'>sqlAllCustomers</h3>";
$sql = sqlAllCustomers();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlAvailableBikes</h3>";
$sql = sqlAvailableBikes();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlAllBikesByPrice</h3>";
$sql = sqlAllBikesByPrice();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlAllOpenRentals</h3>";
$sql = sqlAllOpenRentals();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlJoinRentalsCustomers</h3>";
$sql = sqlJoinRentalsCustomers();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlTop3Bikes</h3>";
$sql = sqlTop3Bikes();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlMultiJoinRentals</h3>";
$sql = sqlMultiJoinRentals();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlUpdateCloseRental</h3>";
$sql = sqlUpdateCloseRental();
echo "<pre>$sql</pre>";

echo "<h3 style='padding-left: 25px;'>sqlUpdateBikeUnavailable</h3>";
$sql = sqlUpdateBikeUnavailable();
echo "<pre>$sql</pre>";