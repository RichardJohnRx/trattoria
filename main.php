<?php
require_once 'src/trattoriaapp/control/ControlIngredient.php';
use trattoriaapp\control\ControlIngredient;

$obj = new \trattoriaapp\control\ControlIngredient();

print_r($obj->listIngredients());
echo $obj->searchIngredient(1);




