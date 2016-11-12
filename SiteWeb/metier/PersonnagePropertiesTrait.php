<?php

trait PersonnageProperties{

function getNomPersonnage() {
        return $this->nomPersonnage;
    }

    function getNomActeur() {
        return $this->nomActeur;
    }

    function getDescritpion() {
        return $this->descritpion;
    }

    function setNomPersonnage($nomPersonnage) {
        $this->nomPersonnage = $nomPersonnage;
    }

    function setNomActeur($nomActeur) {
        $this->nomActeur = $nomActeur;
    }

    function setDescritpion($descritpion) {
        $this->descritpion = $descritpion;
    }

}

?>
