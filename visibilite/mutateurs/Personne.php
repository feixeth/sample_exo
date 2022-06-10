<?php
class Personne
{
    protected $age;
    public function setAge($age){
        $this->age=$age;
    }
    public function getAge () {
        return $this->age;
    }
    protected $nom;
    public function setNom($nom){
        $this->nom=$nom;}

    public function getNom(){
        return $this->nom;
    }
    protected $prenom;
    public function setPrenom($prenom){
        $this->prenom=$prenom;}

    public function getPrenom() {
        return $this->prenom;
    }
}