<?php
require_once 'src/trattoriaapp/control/ControlIngredient.php';
require_once 'src/trattoriaapp/model/Ingredient.php';
use trattoriaapp\control\ControlIngredient;
use trattoriaapp\model\Ingredient;

$obj = new \trattoriaapp\control\ControlIngredient();

/*echo $obj->searchIngredient(4);
$ing = new \trattoriaapp\model\Ingredient(4,"salade",0.7,0.4,29);
$obj->addIngredient($ing);
$obj->modifyIngredient($ing);
$obj->deleteIngredient(4);*/

$ingredients = $obj->listIngredients();

$html =
'
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>web dev notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body class="container-fluid ">
    <br>
    <div class="row justify-content-center">
        <div class="col-6 justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Ingredients</h1>
                    </div>  
                </div>
                <br>
                <form class="row" method="post">
                    <div class="col-12">
                        <h2>Ajouter</h2>
                    </div>
                    <div class="col">
                        <label for="nom">Nom Ingredient</label>
                        <input type="text" class="form-control" id="nom" placeholder="nom" disabled>
                    </div>
                    <div class="col">
                        <label for="prix_unitaire">Prix Ingredient</label>
                        <input type="number" class="form-control" id="prix_unitaire" placeholder="prix" disabled>
                    </div>
                    <div class="col">
                        <label for="poids_unitaire">Poids Ingredient</label>
                        <input type="number" class="form-control" id="poids_unitaire" placeholder="poids" disabled>
                    </div>
                    <div class="col">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" disabled>
                    </div>
                    <div class="col">
                        <label for="stock"></label>
                        <button type="submit" class="btn btn-primary mb-2" disabled>Add</button>
                    </div>
                </form>
                <br>
                <br>
                <div class="row">
                    <ul class="col-12 list-group">';

foreach($ingredients as $cle => $ingredient){
    $html .= "
                        <li class=\"list-group-item\">$cle ---- $ingredient->nom</li>
";
}


$html .= '
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
';

echo $html;

