
<?php include('fonction.php');
	
		entete();

$nom="";
if(isset($_POST['nom'])){
	$nom =$_POST['nom'];
	}
$prenom="";
if(isset($_POST['prenom'])){
	$prenom =$_POST['prenom'];
	}
$email="";
if(isset($_POST['email'])){
	$email=$_POST['email'];	
	}
$tel="";
if(isset($_POST['tel'])){
	$tel =$_POST['tel'];
	}
$premierevisite="";
if(isset($_POST['premierevisite'])){
	$premierevisite=$_POST['premierevisite'];	
	}
	
	$lemessage="";
if(isset($_POST['lemessage'])){
	$lemessage=$_POST['lemessage'];	
	}
	

echo "<h1 style=\"font-size:350%; color:red;\":>Donnees Recues</h1>\n";
echo "<p style=\"font-size: 150%; text-align:center;\">\n";
echo "Nom : " .$nom."</br></br>";
echo "Prenom : " .$prenom."</br></br>";
echo "Email : " .$email."</br></br>";
echo "Telephone : " .$tel."</br></br>";
echo "Premiere Visite : " .$premierevisite."</br></br>";
echo "Votre Message : " .$lemessage."</br></br>";
echo "</p>";
?>

</body>
<footer>
		<h5>&copy; RM 2014, Rémi et Cédric Groupe 2</h5>	
</footer>
</html>