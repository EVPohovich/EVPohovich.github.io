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
$raidData = $warlock->fetchActivityData(4);
#$raidMatchId = $raidData['Response']['data']['activities'][0]['activityDetails']['instanceId']; // string
#print_r(array_values($raidData));
$inventory = $warlock->inventory;
$vanguardMarks = $inventory->vanguardMarks();
$crucibleMarks = $inventory->crucibleMarks();
$glimmer = $inventory->glimmer();

$progressionData = $warlock->progression;

# Cryptarch = 11
# Iron Banner = 13
# Queen = 14
# Vanguard = 15
# Crucible = 16
# Dead Orbit = 17
# FWC = 18
# New Monarchy = 19

# Weekly Vanguard Marks = 29
# Weekly Crucible Marks = 30

# Cryptarch
$cryptarchLevel = $progressionData['Response']['data']['progressions'][11]['level'];
$cryptarchProgress = $progressionData['Response']['data']['progressions'][11]['progressToNextLevel'];
$cryptarchNextLevel = $progressionData['Response']['data']['progressions'][11]['nextLevelAt'];

# Iron Banner
$ibLevel = $progressionData['Response']['data']['progressions'][13]['level'];
$ibProgress = $progressionData['Response']['data']['progressions'][13]['progressToNextLevel'];
$ibNextLevel = $progressionData['Response']['data']['progressions'][13]['nextLevelAt'];

# Queen
$queenLevel = $progressionData['Response']['data']['progressions'][14]['level'];
$queenProgress = $progressionData['Response']['data']['progressions'][14]['progressToNextLevel'];
$queenNextLevel = $progressionData['Response']['data']['progressions'][14]['nextLevelAt'];

# Vanguard
$vanguardLevel = $progressionData['Response']['data']['progressions'][15]['level'];
$vanguardProgress = $progressionData['Response']['data']['progressions'][15]['progressToNextLevel'];
$vanguardNextLevel = $progressionData['Response']['data']['progressions'][15]['nextLevelAt'];

# Crucible
$crucibleLevel = $progressionData['Response']['data']['progressions'][16]['level'];
$crucibleProgress = $progressionData['Response']['data']['progressions'][16]['progressToNextLevel'];
$crucibleNextLevel = $progressionData['Response']['data']['progressions'][16]['nextLevelAt'];

# Dead Orbit
$deadOrbitLevel = $progressionData['Response']['data']['progressions'][17]['level'];
$deadOrbitProgress = $progressionData['Response']['data']['progressions'][17]['progressToNextLevel'];
$deadOrbitNextLevel = $progressionData['Response']['data']['progressions'][17]['nextLevelAt'];

# FWC
$fwcLevel = $progressionData['Response']['data']['progressions'][18]['level'];
$fwcProgress = $progressionData['Response']['data']['progressions'][18]['progressToNextLevel'];
$fwcNextLevel = $progressionData['Response']['data']['progressions'][18]['nextLevelAt'];

# New Monarchy
$newMonarchyLevel = $progressionData['Response']['data']['progressions'][19]['level'];
$newMonarchyProgress = $progressionData['Response']['data']['progressions'][19]['progressToNextLevel'];
$newMonarchyNextLevel = $progressionData['Response']['data']['progressions'][19]['nextLevelAt'];



echo "Warlock: (Level $warlockLevel)\n";
echo "\tVanguard Marks: $vanguardMarks\n";
echo "\tCrucible Marks: $crucibleMarks\n";
echo "\tGlimmer:        $glimmer\n\n";

echo "\tProgression:\n\n";
#print_r(array_values($progressionData));
#echo "$progressionData\n";
echo "\tCryptarch: Level $cryptarchLevel ($cryptarchProgress / $cryptarchNextLevel)\n";
echo "\tIron Banner: Level $ibLevel ($ibProgress / $ibNextLevel)\n";
echo "\tQueen: Level $queenLevel ($queenProgress / $queenNextLevel)\n";
echo "\tVanguard: Level $vanguardLevel ($vanguardProgress / $vanguardNextLevel)\n";
echo "\tCrucible: Level $crucibleLevel ($crucibleProgress / $crucibleNextLevel)\n";
echo "\tDead Orbit: Level $deadOrbitLevel ($deadOrbitProgress / $deadOrbitNextLevel)\n";
echo "\tFuture War Cult: Level $fwcLevel ($fwcProgress / $fwcNextLevel)\n";
echo "\tNew Monarchy: Level $newMonarchyLevel ($newMonarchyProgress / $newMonarchyNextLevel)\n";


?>
