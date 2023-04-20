<?php

class Compte {
    private string $_libelle;
    private int $_soldeInitial;
    private string $_devise;
    private Titulaire $_titulaire;


    // Ajout du Titulaire unique au compte:

    function __construct(string $_libelle, int $_soldeInitial, string $_devise, $_titulaire){
        $this->_libelle = $_libelle;
        $this->_soldeInitial = $_soldeInitial;
        $this->_devise = $_devise;
        $this->_titulaire = $_titulaire;
        $this->_titulaire-> AjoutAccounts($this);
    }



    // getter et setter pour chaque attribut de ma class Compte:
    public function getLibelle() {
        return $this->_libelle;
    }
    public function setLibelle($libelle) {
        $this->_libelle = $libelle;
    }
    public function getSoldeInitial() {
        return $this->_soldeInitial;
    }
    public function setSoldeInitial($_soldeInitial) {
        $this->_soldeInitial = $_soldeInitial;
    }
    public function getDevise() {
        return $this->_devise;
    }
    public function setDevise($devise) {
        $this->_devise = $devise;
    }



    public function __toString(){
        return  $this->_libelle . " : " . $this->_soldeInitial . " " . $this->_devise . "<br>";
    }











}