<?php
include("conectToDB.php");
$start_date = $_GET["start_date"];

$date = date_create_immutable($start_date);
$res = floatval($date->format('U'));
$dateNormal = $date->format('d.m.Y');
$cursor = $car_rentCollection->aggregate([['$match' => ['start_date' => ['$gte' => $res, '$lt' => $res + 86400]]], ['$group' => ['_id' => null, 'sum_price' => ['$sum' => '$price']]]]);
echo "<table border='1'>";
echo "<thead><tr><th>Дохід</th></tr></thead>";
echo "<tbody>";
foreach ($cursor as $row) {
    $sum_price = "<tr><td>$row[sum_price]</td></tr>";
}
echo $sum_price;
echo "</tbody>";
echo "</table>";
echo "<script>";
echo "localStorage.setItem('dateNormal', '$dateNormal');";
echo "localStorage.setItem('sum_price', '$sum_price');";
echo "</script>";
?>