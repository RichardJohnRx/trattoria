<?php

namespace trattoriaapp\control;

require_once 'src/trattoriaapp/model/Ingredient.php';

use trattoriaapp\model\Ingredient;

class ControlIngredient{

    public function __construct(){}

    public function addIngredient(Ingredient $ingredient){
        $listIngredients = $this->listIngredients();
        $ingredient->setId(count($listIngredients)+1);
        $listIngredients[] = $ingredient;
        $json = '[';
        foreach($listIngredients as $ingredient){
            $json .= $ingredient;
            if ($ingredient !== end($listIngredients)) {
                $json .= ',';
            }
        }
        $json .= ']';
        $file = 'src/data/ingredients.json';
        file_put_contents($file, $json);
    }

    public function listIngredients(){
        $data = file_get_contents("src/data/ingredients.json");
        $ingredients = json_decode($data, true);
        $listIngredients = [];
        foreach ($ingredients as $ingredient){
            $listIngredients[] = new \trattoriaapp\model\Ingredient($ingredient['id'],$ingredient['nom'],$ingredient['prix_unitaire'],$ingredient['poids_unitaire'],$ingredient['stock']);
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
        return "L'ingredient n'est pas trouvé";
    }

    public function modifyIngredient(Ingredient $ingredient){
        $listIngredients = $this->listIngredients();
        $listIngredients[$ingredient->getId()-1] = $ingredient;
        $json = '[';
        foreach($listIngredients as $ingredient){
            $json .= $ingredient;
            if ($ingredient !== end($listIngredients)) {
                $json .= ',';
            }
        }
        $json .= ']';
        $file = 'src/data/ingredients.json';
        file_put_contents($file, $json);
    }

    public function deleteIngredient($id){
        $listIngredients = $this->listIngredients();
        unset($listIngredients[$id-1]);
        $json = '[';
        foreach($listIngredients as $ingredient){
            $json .= $ingredient;
            if ($ingredient !== end($listIngredients)) {
                $json .= ',';
            }
        }
        $json .= ']';
        $file = 'src/data/ingredients.json';
        file_put_contents($file, $json);
    }
}