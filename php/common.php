<?php // début d'un script PHP
function outputEnTeteHTML5($title, $charset, $css_sheet){
        // sortie du doctype. Les guillemets HTML sont protégés par \
        echo "<!doctype html>\n";
        echo "<html lang=\"fr\">\n";
        echo "<head>\n";
        echo "<meta charset=\"";
        echo $charset;
        echo "\"/>\n";
        echo "<link rel=\"stylesheet\" href=\"";
        echo $css_sheet;
        echo "\" />\n";
        // concaténation de chaînes de caractères.
        echo "<title>".$title."</title>\n";
        echo "</head>\n<body>\n";
}
?>

<?php
function outputFinFichierHTML5() 
{
        echo "</body>\n</html>\n";
}
?>

