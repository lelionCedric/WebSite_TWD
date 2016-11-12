<?php


require_once (dirname(__FILE__).'/../../metier/Article.php');
require_once (dirname(__FILE__).'/FormManager.php');
class ArticleFormView
{
    public static function getDefaultFormHTML($action){
        return self::getFormHtml($action, Article::getDefaultArticle());

    }
    
   private static function addErrorMsg(&$dataErrors, $fieldName)
           {
    		if(!empty($dataErrors[$fieldName]))
                {
                     $htmlCode = "<span class=\"errorMsg\">".$dataErrors[$fieldName]."</span><br/>";
                    return $htmlCode;
                 }				
           }
    
    public static function getFormHtml($action, $article)
    {
        $htmlCode = FormManager::beginForm("post", $action);
        
        $htmlCode .= FormManager::addTextInput("Titre article", "titreArticle", "titreArticle", "50",  html_entity_decode($article->getTitreArticle()),ENT_QUOTES,"UTF-8")."<br/>";
        
        $htmlCode .= FormManager::addTextAreaInput("Description Article", "description", "description", "20", "90", html_entity_decode($article->getDescription(),ENT_QUOTES,"UTF-8"))."<br/>";
        
        $htmlCode .= FormManager::addTextInput("Date","dateMiseEnLigne","dateMiseEnLignee","13",  html_entity_decode($article->getDateMiseEnLigne()),ENT_QUOTES,"UTF-8")."<br/>";
        $htmlCode.= FormManager::addHiddenInput("id", "id", $article->getId());
        $htmlCode .= FormManager::addSubmitButton("Valider", "class=\"sansLabel\"")."<br/>";
       // $htmlCode .= "<a href=\"?action=put\">Valider</a>";
         $htmlCode .= FormManager::endForm();
        
        return $htmlCode;
                
    }
    
    public static function getFormErrorsHtml($action, $article, $dataErrors)
    {
         $htmlCode = FormManager::beginForm("post",$action);
				 
        $htmlCode.= self::addErrorMsg($dataErrors,"titre");
        $htmlCode.= FormManager::addTextInput("Titre: ","titreArticle","titreArticle","50",html_entity_decode($article->getTitreArticle(), ENT_QUOTES ,"UTF-8"))."<br/>";
	$htmlCode.= self::addErrorMsg($dataErrors,"description");
        $htmlCode .= FormManager::addTextAreaInput("Description Article", "description", "description", "20", "90", html_entity_decode($article->getDescription(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode.= self::addErrorMsg($dataErrors,"dateMiseEnLigne");
        $htmlCode .= FormManager::addTextInput("Date: ","dateMiseEnLigne","dateMiseEnLignee","13",  html_entity_decode($article->getDateMiseEnLigne(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode.= FormManager::addHiddenInput("id", "id", $article->getId());
        $htmlCode.=FormManager::addSubmitButton("Valider","class=\"sansLabel\"");
	//$htmlCode.= "<br/><a href=\"?action=post\">Valider</a>" ;
	//$htmlCode.= "<br/><a href=\"?action=post&id=".$article->getId()."&titreArticle=".$article->getTitreArticle()."&description=".$article->getDescription()."&dateMiseEnLigne=".$article->getDateMiseEnLigne()."\">Valider</a>" ;
       
        $htmlCode.= FormManager::endForm();
				 
	return $htmlCode;

        
    }
    
    public static function getHiddenFormHtml($action, $article, $buttonText)
    {
        $htmlCode=FormManager::beginForm("post", $action);
        $htmlCode.=FormManager::addHiddenInput("titreArticle","titreArticle",  html_entity_decode($article->getTitreArticle(),ENT_QUOTES,"UTF-8"));
        $htmlCode.=FormManager::addHiddenInput("description","description",  html_entity_decode($article->getDescription(),ENT_QUOTES,"UTF-8"));
        $htmlCode.=FormManager::addHiddenInput("dateMiseEnLigne","dateMiseEnLigne",  html_entity_decode($article->getDateMiseEnLigne(),ENT_QUOTES,"UTF-8"));
        
        $htmlCode.=FormManager::addSubmitButton($buttonText,"class=\"sansLabel\"");
        
        $htmlCode.=FormManager::endForm();
        return $htmlCode;
        
    }
    
}
			
?>
