<?php
include_once 'Model.php';
class Healer extends BasePerso
{
    protected $pv;

    public function setPv($pv)
    {
        $this->pv = $pv * 2;
    }

    public function showPv()
    {
        echo "Vous avez $this->pv pv.";
    }
}