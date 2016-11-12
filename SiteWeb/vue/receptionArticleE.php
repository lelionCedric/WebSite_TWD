<?php

require_once (dirname(__FILE__).'/classes/communFunction.php');
$rootDirectory = dirname(__FILE__)."/";
require_once ($rootDirectory.'/../config/Autoload.php');
require_once (dirname(__FILE__).'/classes/ArticleView.php');
require_once (dirname(__FILE__).'/../metier/ArticleFabrique.php');
require_once (dirname(__FILE__).'/../controleur/validationArticle.php');
require_once (dirname(__FILE__).'/classes/ArticleFormView.php');
require_once (dirname(__FILE__).'/../modeles/ModelCollectionCommentaire.php');

Autoload::load();


communFunction::entete('Validation de votre article','UTF-8',"http://hina/~celelion/SiteWeb/css/monNTMPutainDeStyle.css");
/*
$titreArticle = "";
if(isset($_REQUEST['titreArticle']))
{
   $titreArticle = filter_var($_REQUEST['titreArticle'],FILTER_SANITIZE_STRING);
}
$description = "";
if(isset($_REQUEST['description']))
{
  $description = filter_var($_REQUEST['description'],FILTER_SANITIZE_STRING);
}
$dateMiseEnLigne ="";
if(isset($_REQUEST['dateMiseEnLigne']))
 {
 $dateMiseEnLigne = filter_var($_REQUEST['dateMiseEnLigne'],FILTER_SANITIZE_STRING);
 }

$titreArticle = $_REQUEST['titreArticle'];
$description = $_REQUEST['description'];
$dateMiseEnLigne = $_REQUEST['dateMiseEnLigne'];
*/
if(empty($dataErrors)){
$article = ArticleFabrique::getArticle($datatest, $id, $titreArticle, $description, $dateMiseEnLigne);
echo ArticleView::getHtmlDeveloped($article);
echo "</br></br><a style=\"postion=hinerit; text-align:center;\" href=\"http://hina/~celelion/SiteWeb/?action=post&id=".$article->getId()."&titreArticle=".$article->getTitreArticle()."&description=".$article->getDescription()."&dateMiseEnLigne=".$article->getDateMiseEnLigne()."\"".">Valider l'article</a>";
}
else
{
    $article = ArticleFabrique::getArticle($datatest, null, $titreArticle, $description, $dateMiseEnLigne);
    echo ArticleFormView::getFormErrorsHtml("receptionArticle.php?action=post", $article, $dataErrors);
    //echo "</br></br><a style=\"postion=hinerit; text-align:center;\" href=\"http://hina/~celelion/SiteWeb/?action=put"."&titreArticle=".$titreArticle."&description=".$description."&dateMiseEnLigne=".$dateMiseEnLigne."\"".">Valider l'article</a>";
    
}
communFunction::piedPage();


//echo "<a href=\"vueAfficheArticle.php&titreArticle=".$titreArticle."&description=".$description."&dateMiseEnLigne=".$dateMiseEnLigne."\"".">Valider</a>";

?>
