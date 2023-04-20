<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private int $_dateDeNaissance;
    private string $_ville;
    private string $_account;



    function __construct(string $_nom, string $_prenom, int $_dateDeNaissance, string $_ville, string $_account) {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateDeNaissance = $_dateDeNaissance;
        $this->_ville = $_ville;
        $this->_account = $_account;
    }


    // getter et setter pour chaque attribut de ma class Titulaire:

    public function getNom(){
        return  $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }

    public function getDateDeNaissance(){
        return $this->_dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance){
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    public function getVille(){
        return  $this->_ville;
    }

    public function setVille($ville){
        $this->_ville = $ville;
    }

    public function getAccount(){
        return  $this->_account;
    }

    public function setAccount($account){
        $this->_account = $account;
    }













}