<?php
require_once (dirname(__FILE__).'/../../metier/Commentaire.php');

class  CommentaireView{

public static function getHtmlDeveloped($commentaire)
    {
        
        
        $htmlCode = "<p class=\"unCommentaire\"> <i id=\"dateCom\">Posté le : ".$commentaire->getDateMiseEnLigne()." par ".$commentaire->getAuteur()."</i>"; 
        $err= $commentaire->getAuteur();
        if(!empty($err))
            $htmlCode.= "<br/>";
        $err = $commentaire->getDateMiseEnLigne();
        if(!empty($err))
            $htmlCode.= "<br/>";
        $htmlCode .= $commentaire->getDescription();      
        $err = $commentaire->getDescription();
        if(!empty($err))
            $htmlCode.= " ";
        $htmlCode .= "</p>";
        return $htmlCode;
        
    }
}
?>

