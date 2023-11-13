<!DOCTYPE html>
<html>
<head>
    <title>BrysonTable3</title>
</head>
<body>
<table border=1>
    <tr>
        <td>Random number 1</td><td>
            <?php
            require_once "Functions.php";
            $x = rand(1, 100);
            $y = rand(1, 100);
            $sum = getSum($x, $y);
            echo "$sum";
            ?>
        </td>
    </tr>
    <tr>
        <td>Random number 2</td><td>
            <?php
            $x = rand(1, 100);
            $y = rand(1, 100);
            $sum = getSum($x, $y);
            echo "$sum";
            ?>
        </td>
    </tr>
    <tr>
        <td>Random number 3</td><td>
            <?php
            $x = rand(1, 100);
            $y = rand(1, 100);
            $sum = getSum($x, $y);
            echo "$sum";
            ?>
        </td>
    </tr>
</table>
</body>
</html>