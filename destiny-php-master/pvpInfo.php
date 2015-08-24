<?php

// Include the autoloader
require 'vendor/autoload.php';

// Create a new instance of the client
$destiny = new \Destiny\Destiny;

// Find a player
$player = $destiny->fetchPsnPlayer('decimalator');

// Get the first character
$warlock = $player->characters->firstWarlock();
$warlockLevel = $warlock->characterLevel;

# 3v3 = 9
# Control = 10
# Salvage = 11
# Clash = 12
# Rumble = 13



$controlData = $warlock->fetchActivityData(10);

$index = 0;
$index = $argv[1];

$lastControlMatchDate = $controlData['Response']['data']['activities'][$index]['period'];
$lastControlMatchAssists = $controlData['Response']['data']['activities'][$index]['values']['assists']['basic']['value'];
$lastControlMatchScore = $controlData['Response']['data']['activities'][$index]['values']['score']['basic']['value'];
$lastControlMatchKills = $controlData['Response']['data']['activities'][$index]['values']['kills']['basic']['value'];
$lastControlMatchAvgScorePerKill = $controlData['Response']['data']['activities'][$index]['values']['averageScorePerKill']['basic']['value'];
$lastControlMatchDeaths = $controlData['Response']['data']['activities'][$index]['values']['deaths']['basic']['value'];
$lastControlMatchAvgScorePerLife = $controlData['Response']['data']['activities'][$index]['values']['averageScorePerLife']['basic']['value'];
$lastControlMatchCompleted = $controlData['Response']['data']['activities'][$index]['values']['completed']['basic']['value'];
$lastControlMatchKillsDeathsRatio = $controlData['Response']['data']['activities'][$index]['values']['killsDeathsRatio']['basic']['value'];
$lastControlMatchKillsDeathsAssists = $controlData['Response']['data']['activities'][$index]['values']['killsDeathsAssists']['basic']['value'];
$lastControlMatchDuration = $controlData['Response']['data']['activities'][$index]['values']['activityDurationSeconds']['basic']['value'];
$lastControlMatchStanding = $controlData['Response']['data']['activities'][$index]['values']['standing']['basic']['value'];
$lastControlMatchTeamScore = $controlData['Response']['data']['activities'][$index]['values']['teamScore']['basic']['value'];

echo "Last Control Match ($lastControlMatchDate)\n";
echo "\t\tTeamScore:          $lastControlMatchTeamScore\n";
echo "\t\tScore:              $lastControlMatchScore\n";
echo "\t\tKills:              $lastControlMatchKills\n";
echo "\t\tAssists:            $lastControlMatchAssists\n";
echo "\t\tDeaths :            $lastControlMatchDeaths\n";
echo "\t\tScorePerKill:       $lastControlMatchAvgScorePerKill\n";
echo "\t\tScorePerLife:       $lastControlMatchAvgScorePerLife\n";
echo "\t\tKillsDeathsRatio:   $lastControlMatchKillsDeathsRatio\n";
echo "\t\tKillsDeathsAssists: $lastControlMatchKillsDeathsRatio\n";
echo "\t\tDuration:           $lastControlMatchDuration\n";
echo "\t\tStanding:           $lastControlMatchStanding\n";
echo "\t\tCompleted:          $lastControlMatchCompleted\n";
?>
