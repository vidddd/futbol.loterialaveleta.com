<?php
  include 'phplib-football/FootballData.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>la liga - primera division</title>
        <link href="phplib-football/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
                <div class="page-header">
                    <h1>La liga primera division</h1>
                </div>
                <?php
                // Create instance of API class
                $api = new FootballData(); ?>
                <h3>Matches for the 2nd matchday of the Premiere League</h3>
                <table class="table table-striped">
                    <tr>
                    <th>HomeTeam</th>
                    <th></th>
                    <th>AwayTeam</th>
                    <th colspan="3">Result</th>
                    </tr>
                    <?php foreach ($api->findMatchesByCompetitionAndMatchday(2014, 2)->matches as $match) { ?>
                    <tr>
                        <td><?php echo $match->homeTeam->name; ?></td>
                        <td>-</td>
                        <td><?php echo $match->awayTeam->name; ?></td>
                        <td><?php echo $match->score->fullTime->homeTeam;  ?></td>
                        <td>:</td>
                        <td><?php echo $match->score->fullTime->awayTeam;  ?></td>
                    </tr>
                    <?php } ?>
                </table>
                <h3>Clasificación de Primera Division</h3>
                <table class="table table-striped">
                    <tr>
                    <th>Position</th>
                    <th>TeamName</th>
                    <th>GoalDifference</th>
                    <th>Points</th>
                    </tr>
                    <?php foreach ($api->findStandingsByCompetition(2014)->standings as $standing) { 
                          if ($standing->type == 'TOTAL') { 
                              foreach ($standing->table as $standingRow) {
                    ?>
                    <tr>
                      <td><?php echo $standingRow->position; ?></td>
                      <td><?php echo $standingRow->team->name; ?></td>
                      <td><?php echo $standingRow->goalDifference; ?></td>
                      <td><?php echo $standingRow->points; ?></td>
                    </tr>
                    <?php }}} ?>
                    <tr>
                    </tr>
                </table>

            <?php
                echo "<p><hr><p>";
                // fetch all available upcoming matches for the next 3 days
                $now = new DateTime();
                $end = new DateTime(); $end->add(new DateInterval('P3D'));
                $response = $api->findMatchesForDateRange($now->format('Y-m-d'), $end->format('Y-m-d'));
            ?>
            <h3>Upcoming matches within the next 3 days</h3>
                <table class="table table-striped">
                    <tr>
                        <th>HomeTeam</th>
                        <th></th>
                        <th>AwayTeam</th>
                        <th colspan="3">Result</th>
                    </tr>
                    <?php foreach ($response->matches as $match) { ?>
                    <tr>
                        <td><?php echo $match->homeTeam->name; ?></td>
                        <td>-</td>
                        <td><?php echo $match->awayTeam->name; ?></td>
                        <td><?php echo $match->score->fullTime->homeTeam; ?></td>
                        <td>:</td>
                        <td><?php echo $match->score->fullTime->awayTeam; ?></td>
                    </tr>
                    <?php } ?>
                </table>
        </div>
    </body>
</html>