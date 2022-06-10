<?php

include 'Warrior.php';
include 'Healer.php';

$healer = new Healer();
$warrior = new Warrior();

$healer->setPv(6);
$healer->showPv();

$warrior->setPv(6);
$warrior->showPv();