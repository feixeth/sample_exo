<?php
class Chef
{
    protected $instruments = [];

    public function add(Musique $instrument)
    {
        $this->instruments[] = $instrument;
    }

    public function start()
    {
        foreach($this->instruments as $instrument)
        {
            $instrument->play();
        }
    }

    public function stop()
    {
        foreach($this->instruments as $instrument)
        {
            $instrument->pause();
        }
    }
}