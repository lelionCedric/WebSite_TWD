<?php

require_once(dirname(__FILE__).'/classeDataBaseManager.php');


$test = "firstUser";


$statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('SELECT * FROM tableTest WHERE loginPrimary = ?',array("firstUser"));


require(dirname(__FILE__).'/common.php');

outputEnTeteHTML5("test de fonction prepartion", 'UTF-8','test.css');


if($statement !== false)
{
	foreach($statement as $row){
	echo "<p>";
	echo $row['loginPrimary'].", ".$row['password']. ", ";
	
	echo "</p>";	
	}
	
	DataBaseManager::destroyQueryResults($statement);
}else {
	$dataError[] = "PRobleme lors de la preparation de la requete"." BALBALABLABLABLa";
	require("vueErreur.php");
	die();
}

outputFinFichierHTML5();
?>