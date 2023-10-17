<!DOCTYPE html>
<html>
<head>
    <title>BrysonTable2</title>
</head>
<body>
    <table border=1>
        <tr>
        <td>Random number 1</td><td><?php echo rand(1, 100)?></td>
        </tr>
        <tr>
        <td>Random number 2</td><td><?php echo rand(1, 100)?></td>
        </tr>
        <tr>
        <td>Random number 3</td><td><?php echo rand(1, 100)?></td>
        </tr>
        <?php
//         for ($i = 1; $i <= 5; $i++) {
//             echo "<tr>";
//             echo "<td>" . $i . "</td>" . "<td>" . rand(1, 100) . "</td>";
//             echo "</tr>";
//         }
//         ?>
    </table>
</body>
</html>
