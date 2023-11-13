<!DOCTYPE html>
<html>
  <body>
    <?php
        require "reusableComponents.php";
        $nlTeams = array("cardinals", "cubs", "braves");
        $alTeams = array("yankees", "red sox", "white sox");

        $teamsTable = baseballTeamTable($nlTeams, $alTeams);
        echo $teamsTable;
     ?>
  </body>
</html>