<?php communFunction::entete('The Walking Dead','UTF-8',  Config::getStyleSheetsURL()['default'])?>

<h1> Toutes les articles</h1>
<a href="?">Précedent</a>
<script>
          $(function() {
              $("u").click(function(e){
              
                  e.preventDefault();
                  $("u").removeClass("lesCommentaires");
              });   
          });
 </script>
<?php
echo "<table><tbody>";
echo "<h2 class=\"grostitre\">Actualité de la série</h2>";
echo "<h3><a href=\"?action=saisie\">Ajouter un Article</a></h3>";
foreach ($model->getData() as $article){
    echo "<tr>";
    
    echo "<td><a href=\"?action=delete&id=".$article->getId()."\">Supprimer</a></td>";
    
    echo "<td><a href=\"?action=edit&id=".$article->getId()."\">Modifier</a></td>"; 
    echo "<td>".ArticleView::getHtmlDeveloped($article)."</td>";
    echo "</tr>";
    
    
    //echo ArticleFormView::getHiddenFormHtml("", $article, "modifier") ;
    
}

echo "</tbody></table>" ;

?>
<?php communFunction::piedPage();?>


