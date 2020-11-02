<?php

namespace trattoriaapp\model;

class Ingredient{
    private $id;
    private $nom;
    private $prix_unitaire;
    private $poids_unitaire;
    private $stock;

    public function __construct($id,$nom,$prix_unitaire,$poids_unitaire,$stock){
        $this->id = $id;
        $this->nom = $nom;
        $this->poids_unitaire = $poids_unitaire;
        $this->prix_unitaire = $prix_unitaire;
        $this->stock = $stock;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrixUnitaire()
    {
        return $this->prix_unitaire;
    }


    public function setPrixUnitaire($prix_unitaire)
    {
        $this->prix_unitaire = $prix_unitaire;
    }

    public function getPoidsUnitaire()
    {
        return $this->poids_unitaire;
    }

    public function setPoidsUnitaire($poids_unitaire)
    {
        $this->poids_unitaire = $poids_unitaire;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function __toString(){
        return "{\"id\":$this->id,\"nom\":\"$this->nom\",\"poids_unitaire\":$this->poids_unitaire,\"prix_unitaire\":$this->prix_unitaire,\"stock\":$this->stock}";
    }

}