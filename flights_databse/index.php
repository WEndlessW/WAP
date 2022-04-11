<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Flights</title>
</head>
<body>
    <table>
        <tr>
            <th>Flight Code</th>
            <th>Start</th>
            <th>Start Airport</th>
            <th>Land</th>
            <th>Landing Airport</th>
            <th>Gate</th>
        </tr>
        <?php 
        include "database/data.php";
        ?>
    </table>
</body>
</html>