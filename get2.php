<?php
include("conectToDB.php");
$race = $_GET["race"];

$cursor = $carsCollection->find(['race' => ['$lt' => floatval($race)]], ['projection' => ['_id' => 0]]);
$thead2 = "<tr><th>Марка</th><th>Рік випуску</th><th>Пробіг</th><th>Стан</th></tr>";
echo "<table border='1'>";
echo "<thead>$thead2</thead>";
echo "<tbody>";
foreach ($cursor as $row) {
    $cars2.= "<tr><td>$row[name]</td><td>$row[release_date]</td><td>$row[race]</td><td>$row[state]</td></tr>";
}
echo $cars2;
echo "</tbody>";
echo "</table>";
echo "<script>";
echo "localStorage.setItem('race', '$race');";
echo "localStorage.setItem('thead2', '$thead2');";
echo "localStorage.setItem('cars2', '$cars2');";
echo "</script>";
?>