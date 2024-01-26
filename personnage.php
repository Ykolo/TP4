<?php
class Personnage
{
    private $nom;
    private $vie = 100;
    private $atk = 20;

    public function __construct($nom, $vie = 100, $atk = 20){
        $this->nom = $nom;
        $this->vie = $vie;
        $this->atk = $atk;
    }
    public function crier(){
        echo "Taiaut", PHP_EOL;
    }
    public function regenerer($nbPoints){
        $this->vie += $nbPoints;
    }
    public function estMort(){
        if ($this->vie <= 0){
            return "TRUE: Il est mort";
        }else{
            return "FALSE: Il lui reste ".$this->vie." points de vie";
        }
    }
    public function __getNom(){
        return $this->nom;
    }
    public function __getVie(){
        return $this->vie;        
    }
    public function __getAtk(){
        return $this->atk;        
    }
    public function __setNom($nom){
        $this->nom = $nom;
    }
    public function __setAtk($atk){
        $this->atk = $atk;
    }
    public function __setVie($vie){
        $this->vie = $vie;
    }
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $this->empecher_negatif($cible);
    }
    private function empecher_negatif($cible){
        if($cible->vie < 0){
            $cible->vie = 0;
        }
    }
}
