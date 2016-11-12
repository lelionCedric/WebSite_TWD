<?php
    
require_once (dirname(__FILE__).'/../../metier/Article.php');
require_once (dirname(__FILE__).'/../../modeles/ModelCollectionCommentaire.php');
    require_once (dirname(__FILE__).'/CommentaireView.php');
    require_once (dirname(__FILE__).'/CommentaireFormView.php');
class ArticleView
{
    
    public static function getHtmlDeveloped($article)
    {
        //$htmlCode="<h2 class=\"grostitre\">Actualité de la série</h2>";
        $htmlCode = "<h3><strong>".$article->getTitreArticle()."</strong></h3><br/>\n";      
        $err = $article->getTitreArticle();
        if(!empty($err))
            $htmlCode.= " ";
        $htmlCode.= "<i>".$article->getDescription()."</i><br/>";
        $err= $article->getDescription();
        if(!empty($err))
            $htmlCode.= "<br/>";
        $htmlCode.= "<i id=\"dateMiseEnLigne\">Posté le : ".$article->getDateMiseEnLigne()."</i>";
        $err = $article->getDateMiseEnLigne();
        if(!empty($err))
            $htmlCode.= "<br/>";
      $htmlCode .= "<div href=\"#\" class=\"lesCommentaires\" style=\"color: grey; opacity: 0.8;\"><u><i>Commentez  ici !</i></u>";
        
        $count = 0;
        $models = ModelCollectionCommentaire::getModelCommentaireAllByArticle($article->getId());
        foreach ($models->getData() as $com)
        {
            $count++;
            $htmlCode .= CommentaireView::getHtmlDeveloped($com);
            
        }   
       
        $htmlCode .= CommentaireFormView::getDefaultFormHTML("vue/receptionCommentaire.php",$article->getId());
        
        $htmlCode .= "</div>";
        return $htmlCode;
        
    }
    
    
    
    
}




?>