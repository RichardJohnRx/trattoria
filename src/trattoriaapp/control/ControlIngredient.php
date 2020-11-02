<?php

namespace trattoriaapp\control;

require_once 'src/trattoriaapp/model/Ingredient.php';

use trattoriaapp\model\Ingredient;

class ControlIngredient{

    public function __construct(){}

    public function addIngredient(Ingredient $ingredient){
        $listIngredients = $this->listIngredients();
        $ingredient->setId(count($listIngredients));
        $listIngredients[] = $ingredient;
        $json_string = json_encode($listIngredients);
        $file = 'ingredients.json';
        file_put_contents($file, $json_string);
    }

    public function listIngredients(){
        $data = file_get_contents("src/data/ingredients.json");
        $ingredients = json_decode($data, true);
        $listIngredients = [];
        foreach ($ingredients as $ingredient){
            $listIngredients[] = new \trattoriaapp\model\Ingredient($ingredient['id'],$ingredient['nom'],$ingredient['prix'],$ingredient['poids']);
        }
        return $listIngredients;
    }

    public function searchIngredient($id){
        $ingredients = $this->listIngredients();
        foreach ($ingredients as $ingredient){
            if($ingredient->getId() == $id){
                return $ingredient;
            }
        }
    }

    public function modifyIngredient(Ingredient $ingredient){
        $listIngredients = $this->listIngredients();
        $listIngredients[$ingredient->getId()] = $ingredient;
        $json_string = json_encode($listIngredients);
        $file = 'ingredients.json';
        file_put_contents($file, $json_string);
    }

    public function deleteIngredient($id){
        
    }
}