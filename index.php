<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MongoDB</title>
    <script src="script.js" defer></script>
</head>
<body>
    <form action="get1.php" method="get">
        <label for="start_date">Оберіть дату для отримання даних про дохід:</label>
        <input type="date" name="start_date" id="start_date" value="2024-02-01" required>
        <input type="submit" value="Отримати">
    </form>
    <h4 id="prevDate"></h4>
    <h4 id="prevResText1"></h4>
    <table border="1" id="table1">
        <thead>
            <tr><th id="thead1"></th></tr>
        </thead>
        <tbody id="tbody1"></tbody>
    </table>
    <br><br><br>
    <form action="get2.php" method="get">
        <label for="race">Отримати автомобілі, у яких пробіг буде меншим, ніж:</label>
        <input type="number" name="race" id="race" value="100000" required>
        <input type="submit" value="Отримати">
    </form>
    <h4 id="prevParam"></h4>
    <h4 id="prevResText2"></h4>
    <table border="1" id="table2">
        <thead id="thead2"></thead>
        <tbody id="tbody2"></tbody>
    </table>
    <br><br><br>
    <form action="get3.php">
        <label for="date">Отримати перелік наявних марок автомобілів:</label>
        <input type="submit" value="Отримати">
    </form>
    <h4 id="prevResText3"></h4>
    <table border="1" id="table3">
        <thead id="thead3"></thead>
        <tbody id="tbody3"></tbody>
    </table>
</body>
</html>