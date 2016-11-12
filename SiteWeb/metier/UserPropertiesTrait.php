<?php
trait UserProperties{
    

function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        
        //VERIF A FAIRE
        
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        
        //VERIF A FAIRE
        
        $this->prenom = $prenom;
    }

    function setLogin($login) {
        
        //VERIF A FAIRE
        
        $this->login = $login;
    }

    function setPassword($password) {
        
        //VERIF A FAIRE
        
        $this->password = $password;
    }

    function setEmail($email) {
        
        //VERIF A FAIRE
        
        $this->email = $email;
    }
    
}