<?php

require_once(dirname(__FILE__).'/common.php');

outputEnTeteHTML5("errueru BD", 'UTF-8','test.css');

echo "<h1> Une erreur est survennu</h1>";
foreach($dataError as $errorMsg)
 {
	echo "<p>".$errorMsg."</p>"; 
 }

?>