<?php
require_once 'src/trattoriaapp/control/ControlIngredient.php';
use trattoriaapp\control\ControlIngredient;

$obj = new \trattoriaapp\control\ControlIngredient();

//print_r($obj->listIngredients());
//echo $obj->searchIngredient(1);

$obj->modifyIngredient(new \trattoriaapp\model\Ingredient(2,"sauce",20,15));

