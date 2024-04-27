<?php
include("conectToDB.php");

$cursor = $carsCollection->find([], ['projection' => ['_id' => 0]]);
$thead3 = "<tr><th>Марка</th><th>Рік випуску</th><th>Пробіг</th><th>Стан</th></tr>";
echo "<table border='1'>";
echo "<thead>$thead3</thead>";
echo "<tbody>";
foreach ($cursor as $row) {
    $cars3.= "<tr><td>$row[name]</td><td>$row[release_date]</td><td>$row[race]</td><td>$row[state]</td></tr>";
}
echo $cars3;
echo "</tbody>";
echo "</table>";
echo "<script>";
echo "localStorage.setItem('thead3', '$thead3');";
echo "localStorage.setItem('cars3', '$cars3');";
echo "</script>";
?>