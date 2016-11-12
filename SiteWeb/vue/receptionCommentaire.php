<?php

require_once (dirname(__FILE__).'/classes/communFunction.php');
$rootDirectory = dirname(__FILE__)."/";
require_once ($rootDirectory.'/../config/Autoload.php');
require_once (dirname(__FILE__).'/classes/CommentaireView.php');
require_once (dirname(__FILE__).'/../metier/CommentaireFabrique.php');
require_once (dirname(__FILE__).'/../controleur/validationCommentaire.php');
require_once (dirname(__FILE__).'/classes/CommentaireFormView.php');
Autoload::load();


communFunction::entete('Validation de votre article','UTF-8',"http://hina/~celelion/SiteWeb/css/monNTMPutainDeStyle.css");


if(empty($dataErrors)){
$commentaire = CommentaireFabrique::getCommentaire($dataErrors, null,$auteur , $description, $dateMiseEnLigne,$idArticle);
echo CommentaireView::getHtmlDeveloped($commentaire);
echo "</br></br><a style=\"postion=hinerit; text-align:center;\" href=\"http://hina/~celelion/SiteWeb/?action=putCom&id=&idArticle=".$idArticle."&auteur=".$auteur."&description=".$description."&dateMiseEnLigne=".$dateMiseEnLigne."\"".">Valider l'article</a>";
}
else
{
    $commentaire = CommentaireFabrique::getCommentaire($dataErrors, null, $auteur, $description, $dateMiseEnLigne);
    echo CommentaireFormView::getFormErrorsHtml("receptionCommentaire.php?action=put", $commentaire, $dataErrors, $idArticle);
    //echo "</br></br><a style=\"postion=hinerit; text-align:center;\" href=\"http://localhost/SiteWeb/?action=put"."&titreArticle=".$titreArticle."&description=".$description."&dateMiseEnLigne=".$dateMiseEnLigne."\"".">Valider l'article</a>";
    
}
communFunction::piedPage();


//echo "<a href=\"vueAfficheArticle.php&titreArticle=".$titreArticle."&description=".$description."&dateMiseEnLigne=".$dateMiseEnLigne."\"".">Valider</a>";

?>
