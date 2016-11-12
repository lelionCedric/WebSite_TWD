
<?php


require_once (dirname(__FILE__).'/../vue/classes/CommentaireFormView.php');;
$dataErrors = array();


$auteur = $_REQUEST['auteur'];
$description = $_REQUEST['description'];
$dateMiseEnLigne = $_REQUEST['dateMiseEnLigne'];
$id = $_REQUEST['id'];
$idArticle = $_REQUEST['idArticle'];
if(!preg_match('/^(([0-9]){0,20})$/',$id))
{
    $dataErrors['id'] = "Erreur id commentaire, modification, exitance...";
}
if(!preg_match('/^(([0-9]){0,20})$/',$idArticle))
{
    $dataErrors['id'] = "Erreur id article, modification, exitance...";
}
 
if(!preg_match('/^(([a-zA-Z0-9]){1,20})$/',$auteur))
{
    $dataErrors['auteur'] = "Erreur auteur invalide";
}
 
if(!preg_match('/^(([a-zA-ZàâéèêôùûçÀÂÉÈÔÙÛÇäöëüÄÖËÜ](\-|( )*)){1,150})$/',$description))
{
    $dataErrors['description']= "Erreur description invalide";
}

 if(!preg_match('/^(([0-9]){2}(.){1}([0-9]){2}(.){1}([0-9]){4})$/',$dateMiseEnLigne))
{
    $dataErrors['dateMiseEnLigne'] = "Erreur dateMiseEnLigne invalide de la forme dd/mm/aaaa";
}

?>