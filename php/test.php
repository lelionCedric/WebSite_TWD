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
    
		  
<?php require_once 'function.php' ?>
        
       

        <?php
        $num  = 1;
        $nom = "Lelion" ;
        $groupe = "groupe 1" ; 
        $date = date('l F Y');
        
        $TMessages = array();
        
        echo "Aujourd'hui, ".$date." nous travaillons sur le tp numero ".$num." realisé par ".$nom." du ".$groupe ; 
        
        echo "<br/>" ; 
        echo "<br/>" ;
        
        
		  require('error.php');    
	 	  
?>
		 	  
	 	  <?php
        pourcentageAvis('favorable',10,35,5) ; 
        	echo "<br/>" ;
         pourcentageAvis('defavorable', 10, 35, 5);
         
         try 
         {
				pourcentageAvis('favorable',0,0,0) ;         	
         }catch(Exception $e)
         {	
         	echo $e ; 
         	$TMessages .= $e ;
         	require('error.php');
         }
        ?>
    </body>
</html>