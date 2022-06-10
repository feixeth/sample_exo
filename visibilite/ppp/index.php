<?php

include 'VerifAge.php';

$monAge = new VerifAge();

$monAge->setAge('trente');
$monAge->showStatus();

$monAge->setAge(-20);
$monAge->showStatus();

$monAge->setAge(220);
$monAge->showStatus();

$monAge->setAge(30);
$monAge->showStatus();