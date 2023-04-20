<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private string $_dateDeNaissance;
    private string $_ville;
    private array $_accounts;



    // un titulaire unique peut avoir plusieurs accounts:

    function __construct(string $_nom, string $_prenom, string $_dateDeNaissance, string $_ville, array $_accounts) {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateDeNaissance = $_dateDeNaissance;
        $this->_ville = $_ville;
        $this->_accounts = [];
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

    public function getAccounts(){
        return  $this->_accounts;
    }

    public function setAccount($accounts){
        $this->_accounts = $accounts;
    }



    public function __toString(){
        return  $this->_nom . " " . $this->_prenom . "<br>";
    }



    // fonction qui permet d'ajouter un compte à la liste des comptes du titulaire unique :
    public function AjoutAccounts(Compte $account){
        $this->_accounts[] = $account;
    
    }




    // fonction qui permet de sortir tous les comptes d'un même Titulaire :
    public function afficherComptes() {
        echo "<p>Comptes appartenant à : " . $this->_nom . " " . $this->_prenom . "</p>";
        foreach($this->_accounts as $account){
            echo $account. "<br>";
        }
    }










}