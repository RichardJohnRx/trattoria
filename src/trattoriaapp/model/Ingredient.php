<?php

namespace trattoriaapp\model;

class Ingredient{
    private $id;
    private $nom;
    private $prix;
    private $poids;

    public function __construct($id,$nom,$prix,$poids){
        $this->id = $id;
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
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

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getPoids()
    {
        return $this->poids;
    }

    public function setPoids($poids)
    {
        $this->poids = $poids;
    }



}