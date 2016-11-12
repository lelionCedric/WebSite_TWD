<?php include('fonction.php');
	
		entete();
?>
		
		<br/>
		
		<table class="galerie">
			<tbody>
			<tr>			
			<td>	
			<div id="galerie" >
				
				<img id="imageGalerie/Episode-1-Horse-Walkers-760.jpg" src="imageGalerie/Episode-1-Horse-Walkers-760.jpg" alt="Horse-Walkers" onclick="fonctiontest(this.id)"  >				
				<img id="imageGalerie/Episode-1-Rick-Horde-760.jpg" src="imageGalerie/Episode-1-Rick-Horde-760.jpg" alt="Rick-Horde"onclick="fonctiontest(this.id)" >
				<img id="imageGalerie/Episode-1-Rick-Horse-760.jpg" src="imageGalerie/Episode-1-Rick-Horse-760.jpg" alt="Rick-Horse" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-1-WalkersA-760.jpg" src="imageGalerie/Episode-1-WalkersA-760.jpg" alt="WalkersA" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-2-Glenn-Rick-Guts-760.jpg" src="imageGalerie/Episode-2-Glenn-Rick-Guts-760.jpg" alt="Glenn-Rick-Guts"onclick="fonctiontest(this.id)" >
				<img id="imageGalerie/Episode-2-Rick-Andrea-760.jpg" src="imageGalerie/Episode-2-Rick-Andrea-760.jpg" alt="Rick-Andrea" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-3-Rick-Lori-Carl-760.jpg" src="imageGalerie/Episode-3-Rick-Lori-Carl-760.jpg" alt="Rick-Lori-Carl" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-3-Walker-760.jpg" src="imageGalerie/Episode-3-Walker-760.jpg" alt="-Walker"onclick="fonctiontest(this.id)" >
				<img id="imageGalerie/Episode-4-Walker-760.jpg" src="imageGalerie/Episode-4-Walker-760.jpg" alt="Walker" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-5-Andrea-Amy-760.jpg" src="imageGalerie/Episode-5-Andrea-Amy-760.jpg" alt="Andrea-Amy" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-5-Glenn-T-Dog-760.jpg" src="imageGalerie/Episode-5-Glenn-T-Dog-760.jpg" alt="Glenn-T-Dog" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Episode-6-Group-Elevator-760.jpg" src="imageGalerie/Episode-6-Group-Elevator-760.jpg" alt="Group-Elevator" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Merle-T-Dog-760.jpg" src="imageGalerie/Merle-T-Dog-760.jpg" alt="Merle-T-Dog" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Rick-Car-760.jpg" src="imageGalerie/Rick-Car-760.jpg" alt="Rick-Car" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Rick-Daryl-760.jpg" src="imageGalerie/Rick-Daryl-760.jpg" alt="Rick-Daryl" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Rick-Ground-Guns-760.jpg" src="imageGalerie/Rick-Ground-Guns-760.jpg" alt="Rick-Ground-Guns"onclick="fonctiontest(this.id)" >
				<img id="imageGalerie/Rick-Gun-760.jpg" src="imageGalerie/Rick-Gun-760.jpg" alt="Rick-Horse-Buc" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Rick-Horse-Buck-760.jpg" src="imageGalerie/Rick-Horse-Buck-760.jpg" alt="Rick-Gun" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Rick-Horse-Zombies-760.jpg" src="imageGalerie/Rick-Horse-Zombies-760.jpg" alt="Rick-Horse-Zombies" onclick="fonctiontest(this.id)">
				<img id="imageGalerie/Zombie-Car-760.jpg" src="imageGalerie/Zombie-Car-760.jpg" alt="Zombie-Car" onclick="fonctiontest(this.id)">
				
				<script>
						
						function fonctiontest(id){
										document.getElementById('imageTailleRe').innerHTML = "";								
										var x = document.createElement("IMG");
    									x.setAttribute("src",id);
    									var divImage = document.getElementById('imageTailleRe');
    									divImage.appendChild(x);
    									
						}


				</script>
			
		</div>
		
			</td>
			<td><div id="imageTailleRe"><img src="imageGalerie/Episode-1-Horse-Walkers-760.jpg" alt="Horse-Walkers"></div></td>
			
			</tr>
			</tbody>		
			</table>
		
		<footer>
		<h5>&copy; RM 2014, Rémi et Cédric Groupe 2</h5>	
	</footer>
	
	</div>
	</div>
	</body>
	
	</html>
	
		
	
	
	
	