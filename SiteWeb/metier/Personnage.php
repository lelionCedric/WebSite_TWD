<?php

require_once (dirname(__FILE__).'/PersonnagePropertiesTrait.php');

class Personnage
{
    
    
    protected $nomPersonnage;
    protected $nomActeur;
    
    protected $descritpion;
    
    
    use PersonnageProperties;
    
    function __construct($nomPersonnage, $nomActeur, $descritpion) {
        $this->setNomPersonnage($nomPersonnage);
        $this->setNomActeur($nomActeur);
        $this->setDescritpion($descritpion);
    }
    
    
     public static function getDefaultPersonnage(){
        $personnage = new Personnage('nomPersonnage','nomActeur', 'description');
        $personnage->descritpion="";
        $personnage->nomActeur="";
        $personnage->nomPersonnage="";
        return $personnage;
        
    }
    
    
    
    
    
    
    
    


    
}


?>

