<?php
require_once 'dao.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $dao = new DAO();
    unset($teams);
    $teams = $dao->list_teams();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $teamName = $_POST["teamName"] ?? "";
        $city = $_POST["city"] ?? "";
        $foundedYear = $_POST["foundedYear"] ?? "";
        $coachName = $_POST["coachName"] ?? "";


        $dao->create_team($teamName, $city, $foundedYear, $coachName);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Baseball Team</title>
</head>
<body>
    <h2>Create Baseball Team</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="teamName">Team Name:</label>
        <input type="text" name="teamName" required>
        <br>
        <label for="city">City:</label>
        <input type="text" name="city" required>
        <br>
        <label for="foundedYear">Founded Year:</label>
        <input type="number" name="foundedYear">
        <br>
        <label for="coachName">Coach Name:</label>
        <input type="text" name="coachName">
        <br>
        <input type="submit" value="Create Team">
    </form>

    <h2>List of Baseball Teams</h2>
    <?php if (empty($teams)) : ?>
        <p>No teams found.</p>
    <?php else : ?>
        <table>
            <tr>
                <th>Team ID</th>
                <th>Team Name</th>
                <th>City</th>
                <th>Founded Year</th>
                <th>Coach Name</th>
            </tr>

            <?php foreach ($teams as $team) : ?>
                <tr>
                    <td><?php echo $team->teamId; ?></td>
                    <td><?php echo $team->teamName; ?></td>
                    <td><?php echo $team->city; ?></td>
                    <td><?php echo $team->foundedYear; ?></td>
                    <td><?php echo $team->coachName; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <h2>Index of PHP Scripts</h2>
    <ul>
        <li><a href="BrysonCreateTeam.php">Create Team Page</a></li>
        <li><a href="BrysonSearchTeams.php">Search for Team Page</a></li>
    </ul>
</body>
</html>




