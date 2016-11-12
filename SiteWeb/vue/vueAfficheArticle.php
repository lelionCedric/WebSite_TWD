<?=
    require(dirname(__FILE__).'/classes/communFunction.php');
communFunction::entete($model->getTitle(),'UTF-8',  Config::getStyleSheetsURL()['default']) ?>
<h1><?=$model->getTitle()?></h1>

<!--
//echo "<h1>".$model->getTitle()."</h1>\n";
echo ArticleView::getHtmlDeveloped($model->getData()) ;
echo "<a href=\"?\">Revenir à l'accueil</a>";

-->



 <?=ArticleView::getHtmlDeveloped ($model->getData())?>
</br>
<a href="?action=get-all">Revenir  aux  articles/accueil.</a>
<?php communFunction::piedPage() ?>
            


