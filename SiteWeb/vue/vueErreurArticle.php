<?php

//require_once(dirname(__FILE__).'/communFunction.php');
//require_once(dirname(__FILE__).'/classes/ArticleFormView.php');

communFunction::entete("Saisie de l'article",'UTF-8',Config::getStyleSheetsURL()['default']);

echo ArticleFormView::getFormErrorsHtml("vue/receptionArticle.php", $article, $dataErrors);
//ArticleFormView::getFormErrorsHtml($action, $article, $dataErrors)

communFunction::piedPage();
?>

