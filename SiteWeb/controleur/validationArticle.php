<?php

require_once (dirname(__FILE__).'/../vue/classes/ArticleFormView.php');;
$dataErrors = array();


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
*/
$titreArticle = $_REQUEST['titreArticle'];
$description = $_REQUEST['description'];
$dateMiseEnLigne = $_REQUEST['dateMiseEnLigne'];
$id = $_REQUEST['id'];
if(!preg_match('/^(([0-9]){0,20})$/',$id))
{
    $dataErrors['id'] = "Erreur id de l'article, modification, exitance...";
}
 
if(!preg_match('/^(([a-zA-ZàâéèêôùûçÀÂÉÈÔÙÛÇäöëüÄÖËÜ](\-|( )*)){1,150})$/',$titreArticle))
{
    $dataErrors['titreArticle'] = "Erreur titreArticle invalide";
}
 
if(!preg_match('/^(([a-zA-ZàâéèêôùûçÀÂÉÈÔÙÛÇäöëüÄÖËÜ]\!?,:\'"){1,500})$/',$description))
{
    $dataErrors['description']= "Erreur description invalide";
}

 if(!preg_match('/^(([0-9]){2}(.){1}([0-9]){2}(.){1}([0-9]){4})$/',$dateMiseEnLigne))
{
    $dataErrors['dateMiseEnLigne'] = "Erreur dateMiseEnLigne invalide de la forme dd/mm/aaaa";
}
 
?>

