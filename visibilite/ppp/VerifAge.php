<?php

class VerifAge
{
    protected $age;
    protected $status;

    public function setAge($age)
    {
        $test = $this->testAge($age);
        if ($test === true) {
            $this->age = $age;
        } else {
            return $test;
        }
    }

    protected function testAge($age)
    {
        $this->status= null;
        if(!is_integer($age))
        {
            $this->status = "age n'est pas un nombre entier.";
            return false;
        }
        if($age < 0)
        {
            $this->status = "Vous n'êtes pas encore né.";
            return false;
        }
        if($age > 130)
        {
            $this->status = "Vous êtes sûrement mort.";
            return false;
        }
        $this->status = "Votre âge est valide.";
        return true;

    }

    public function showStatus()
    {
        echo $this->status;
    }

}