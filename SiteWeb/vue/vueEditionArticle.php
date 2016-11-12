<?php


//require_once(dirname(__FILE__)."/classes/AdresseFabrique.php");
//require('validation.php'); //pas besoin puique administrateur
communFunction::entete('Edition article','UTF-8',Config::getStyleSheetsURL()['default']);
$article =  $model->getData();
/*
$titreArticle="";
if(isset($_POST['titreArticle']))
    $titreArticle = htmlentities ($_POST['titreArticle'],ENT_QUOTES,'UTF-8');
$description="";
if(isset($_POST['description']))
    $description =  htmlentities ($_POST['description'],ENT_QUOTES,'UTF-8');
$dateMiseEnLigne="";
if(isset($_POST['dateMiseEnLigne']))
    $dateMiseEnLigne =  htmlentities ($_POST['dateMiseEnLigne'],ENT_QUOTES,'UTF-8');
*/

$article = ArticleFabrique::getArticle($dataErrors,$article->getId(),$article->getTitreArticle(), $article->getDescription(),$article->getDateMiseEnLigne());


//require(dirname(__FILE__).'/vueErreurArticle.php');
echo ArticleFormView::getFormErrorsHtml("vue/receptionArticleE.php", $article, $dataErrors);

communFunction::piedPage();
?>
