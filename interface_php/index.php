<?php

include 'Chef.php';
include 'Guitare.php';
include 'Basse.php';
include 'Batterie.php';


$chef = new Chef();
$chef->add(new Guitare());
$chef->add(new Basse());
$chef->add(new Batterie());
$chef->start();

$chef->stop();