<?php


require_once(dirname(__FILE__).'/Commentaire.php');

class CommentaireFabrique
{
public static function getCommentaire(&$dataErrors,$id=null,$auteur=null ,$description=null, $dateMiseEnLigne=null,$idArticle=null){
        $commentaire = Commentaire::getDefaultCommentaire();
        $dataErrors = array();
        
        try
        {
            $commentaire-> setId($id);
        } catch (Exception $e) {
            $dataErrors['id'] = $e->getMessage()."<br/>\n";
        }
        
        try
        {
            $commentaire-> setIdArticle($idArticle);
        } catch (Exception $e) {
            $dataErrors['idArticle'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $commentaire->setAuteur($auteur);
        } catch (Exception $e) {
            $dataErrors['auteur'] = $e->getMessage()."<br/>\n";
        }
        
        try
        {
            $commentaire-> setDescription($description);
        } catch (Exception $e) {
            $dataErrors['description'] = $e->getMessage()."<br/>\n";
        }
        try
        {
           $commentaire-> setDateMiseEnLigne($dateMiseEnLigne);
        } catch (Exception $e) {
            $dataErrors['dateMiseEnLigne'] = $e->getMessage()."<br/>\n";
        }
        
        return $commentaire;
    }
}

?>

