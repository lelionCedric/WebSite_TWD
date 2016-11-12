<?php


require_once(dirname(__FILE__).'/Article.php');

class ArticleFabrique
{
    
    public static function getArticle(&$dataErrors,$id=null, $titreArticle=null, $description=null, $dateMiseEnLigne=null, $commentaire=null){
        $article = Article::getDefaultArticle();
        $dataErrors = array();
        
        try
        {
            $article-> setId($id);
        } catch (Exception $e) {
            $dataErrors['id'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $article-> setTitreArticle($titreArticle);
        } catch (Exception $e) {
            $dataErrors['titreArticle'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $article-> setDescription($description);
        } catch (Exception $e) {
            $dataErrors['description'] = $e->getMessage()."<br/>\n";
        }
        try
        {
           $article-> setDateMiseEnLigne($dateMiseEnLigne);
        } catch (Exception $e) {
            $dataErrors['dateMiseEnLigne'] = $e->getMessage()."<br/>\n";
        }
        
        return $article;
    }
}

?>

