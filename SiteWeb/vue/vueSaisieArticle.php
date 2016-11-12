<?=
   // require_once(dirname(__FILE__).'/classes/communFunction.php');
   communFunction::entete($model->getTitle(),"UTF-8",  Config::getStyleSheetsURL()['default']);
?>
   
   <?= ArticleFormView::getDefaultFormHTML("vue/receptionArticle.php")?>
  


    <?=
communFunction::piedPage();
    ?>
        