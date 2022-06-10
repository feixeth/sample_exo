<?php

include_once('Musique.php');

class Basse implements Musique
{
    public function play()
    {
        echo "Je joue de la guitare.";
    }

    public function pause()
    {
        echo "J'arrête de jouer de la basse.";
    }
}