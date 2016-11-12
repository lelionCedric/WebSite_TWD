<?php

//require_once(dirname(__FILE__).'/communFunction.php');
//require_once(dirname(__FILE__).'/classes/ArticleFormView.php');

communFunction::entete("Saisie Commentaire",'UTF-8',Config::getStyleSheetsURL()['default']);


echo CommentaireFormView::getFormErrorsHtml("vue/receptionCommentaire.php",$commentaire,$dataErrors,$idArticle);

//ArticleFormView::getFormErrorsHtml($action, $article, $dataErrors)

communFunction::piedPage();
?>
