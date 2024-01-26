<?php
require_once 'personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");
$merlin->crier();
var_dump($merlin);
$merlin->regenerer(100);
var_dump($merlin);
var_dump($merlin->estMort());
echo $harry->__getAtk(),PHP_EOL;
echo $merlin->__getAtk(),PHP_EOL;
echo $harry->__getVie(),PHP_EOL;
echo $merlin->__getVie(),PHP_EOL;
$merlin->attaque($harry);
var_dump($merlin);
var_dump($harry);
var_dump($harry->estMort());
$merlin->attaque($harry);
$merlin->attaque($harry);
$merlin->attaque($harry);
$merlin->attaque($harry);
$merlin->attaque($harry);
$merlin->attaque($harry);
$merlin->attaque($harry);
var_dump($harry);
var_dump($harry->estMort());

