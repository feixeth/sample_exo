<?php
include_once ('Musique.php');

class Batterie implements Musique
{
    public function play()
    {
        echo "Je joue de la guitare.";
    }

    public function pause()
    {
        echo "J'arrête de jouer de la batterie.";
    }
}