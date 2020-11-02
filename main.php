<?php
require_once 'src/trattoriaapp/control/ControlIngredient.php';
use trattoriaapp\control\ControlIngredient;

$obj = new \trattoriaapp\control\ControlIngredient();

print_r($obj->listIngredients());
echo $obj->searchIngredient(4);
/*$ing = new \trattoriaapp\model\Ingredient(4,"salade",0.7,0.4,29);
$obj->modifyIngredient($ing);
$obj->deleteIngredient(4);*/
