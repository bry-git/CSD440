

<?php
 function baseballTeamTable($nlTeams, $alTeams): string {

     $nlTeamsItems = array_map(function($nlTeam) {
         return "<li>$nlTeam</li>";
     }, $nlTeams);

     $alTeamsItems = array_map(function($alTeam) {
         return "<li>$alTeam</li>";
     }, $alTeams);

     $nlTeamsItemsImploded = implode("\n", $nlTeamsItems);
     $alTeamsItemsImploded = implode("\n", $alTeamsItems);

     $htmlTemplate = <<<HTML
        <ul>
            <li>National League Teams</li>
            <br />
            <ul>
            $nlTeamsItemsImploded
            </ul>
        </ul>
        
        <ul>
            <li>American League Teams</li>
            <br />
            <ul>
            $alTeamsItemsImploded
            </ul>
        </ul>
 HTML;
     return $htmlTemplate;
 }


