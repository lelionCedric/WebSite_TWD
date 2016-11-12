<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

		<?php
		echo "Données eronnés";
		
		echo "<ul>";
		
		foreach($dataErrors as $field => $message){
		echo '<li> Probleme avec l\'attribut <code>'.$field.'</code>. <span style="color: red;">'.$message.'</span><li>';		
		}
		
		echo "</ul>"; 
		?>

    </body>
</html>