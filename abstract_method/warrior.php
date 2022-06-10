<?php
include_once 'Model.php';
class Warrior extends BasePerso
{
    protected $pv;

    public function setPv($pv)
    {
        $this->pv = $pv * 0.5;
    }

    public function showPv()
    {
        echo "Vous avez $this->pv pv.";
    }
}