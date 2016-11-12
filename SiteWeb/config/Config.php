<?php
    
class Config
{
    public static function getVues(){
           global $rootDirectory;
            
           $vueDirectory = $rootDirectory."vue/";
           return array("default" => $vueDirectory."vueAccueil.php",
                        "saisieArticle" => $vueDirectory."vueSaisieArticle.php",
                        "editionArticle" => $vueDirectory."vueEditionArticle.php",
                        "affichageArticle" => $vueDirectory."vueAfficheArticle.php",
                        "affichageCollectionArticle" => $vueDirectory."vueCollectionArticle.php",
                         "afficheCommentaire" => $vueDirectory."vueAfficheCommentaire.php",
                        "affichageCollectionPersonnage" => $vueDirectory."vueCollectionPersonnage.php",
                        "affichageCollectionNew" => $vueDirectory."vueCollectionNew.php"
                        
                        
               
               );
    }
    
    public static function getVueErreur()
    {
        global $rootDirectory;
        
        $vueDirectory =$rootDirectory."vue/";
        return array("default" => $vueDirectory."vueErreurDefault.php",
                    "erreurSaisieArticle" => $vueDirectory."vueErreurArticle.php",
                    "erreurSaisieCommentaire" => $vueDirectory."vueSaisieCommentaireError.php"
            );
    }
    
    public static function getStyleSheetsURL()
    {
        $cssDirectoryURL = "http://".$_SERVER['HTTP_HOST']."/SiteWeb/css/";
        return array("default" => $cssDirectoryURL."monNTMPutainDeStyle.css");
        
    }
    
    public static function generateRandomId(){
        
        $cryptoStrong = false;
        $octets = openssl_random_pseudo_bytes(5, $cryptoStrong);
        return bin2hex($octets);
        
    }
    

}

?>

