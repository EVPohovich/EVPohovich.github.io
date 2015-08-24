<?php

// Include the autoloader
// require 'vendor/autoload.php';

// Create a new instance of the client
$destiny = new \Destiny\Destiny;

// Find a player
$player = $destiny->fetchPsnPlayer('decimalator');

// Get the first character
$warlock = $player->characters->firstWarlock();
$warlockLevel = $warlock->characterLevel;

# Story = 2
# Strike = 3
# Raid = 4
# Patrol = 6
# Nightfall = 14
# Weekly = 15


$raidData = $warlock->fetchActivityData(4);
#$raidMatchId = $raidData['Response']['data']['activities'][0]['activityDetails']['instanceId']; // string
#print_r(array_values($raidData));



?>
