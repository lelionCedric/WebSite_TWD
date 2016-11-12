<?php
require_once(dirname(__FILE__).'/Personnage.php');

class PersonnageFabrique
{
     public static function getPersonnage(&$dataErrors, $nomPersonnage=null, $nomActeur=null, $description=null){
        $personnage = Personnage::getDefaultPersonnage();
        $dataErrors = array();
        
        try
        {
            $personnage->setNomPersonnage($nomPersonnage);
        } catch (Exception $e) {
            $dataErrors['nomPersonnage'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $personnage->setNomActeur($nomActeur);
        } catch (Exception $e) {
            $dataErrors['nomActeur'] = $e->getMessage()."<br/>\n";
        }try
        {
            $personnage->setDescription($description);
        } catch (Exception $e) {
            $dataErrors['description'] = $e->getMessage()."<br/>\n";
        }       
        
        return $personnage;
    }
    
}


?>