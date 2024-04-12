<?php
if (basename($_SERVER["PHP_SELF"]) != "index.php"){
	header("Location:../index.php");
	die("");
}
     $var = valider("view");
?>

<div class="container-fluid footer">
	<div class="container n1">
	</div>

	<div class="container">
		<div class="row justify-content-center align-items-center n2">
			<div class="col col-xs-6 col-md-4 leftSide">Mairie de Boisdinghem, 9 Rue de l'Église, 62500 Boisdinghem</div>
			<div class="col col-xs-6 col-md-4 rightSide">
				<div class="row mb-1">Tél: 03 21 93 39 03</div>
				<div class="row">Horaires d'ouverture de la mairie: Mardi de 9h30 à 11h et Vendredi de 16h30 à 18h</div>
			</div>	
		</div>
		<div class="row justify-content-center n3">
			<div class="col col-md-4">
				<a class="contact" href="#">Contactez-nous: mairiedeboisdinghem@orange.fr<i class="far fa-envelope icon"></i></a>
			</div>
			<div class="col col-md-4 follow">
				<a class="contact" href="https://www.facebook.com/Boisdinghem/">Suivez-nous<i class="fab fa-facebook icon"></i></a>
				<!-- <a href="#"><i class="fab fa-instagram icon"></i></a> -->
				<!-- <a href="#"><i class="fab fa-twitter icon"></i></a> -->
			</div>
		</div>
		<div class="row n4">
			<div class="col col-xs-12 ligne"></div>
		</div>
		<div class="row justify-content-center align-items-center n5">
		
			<div class="col col-md-3 item"><a href="index.php?view=carte">Carte intéractive</a></div>
			<div class="col col-md-3 item"><a href="#">Plan du site</a></div>
			<div class="col col-md-3 item admin">
				
			<?php if(isConnecte($_SESSION['id'])){
					echo'               
					<form action="controleur.php" method="GET">
						<input type="hidden" name="view" value="';echo"$var";echo'">
						<button class="btn btn-danger" type="submit" name="action" value=Deconnexion>Se déconnecter</button>
					</form>  
					';
				}
				else{
					echo'<button class="btn btn-info"><a href="index.php?view=connexion">Connexion Administrateur</a></button>';
				}
			?>		
			</div>
		</div>

		<div class="row n4">
			<div class="col col-xs-12 ligne"></div>
		</div>

		<div class="row justify-content-center n5">
			<div class="col col-md-6 item">Copyright 2021 © IG2I Centrale Lille Institut équipe LG2CD</div>
		</div>
	</div>
</div>
<script src="javascript\modif.js"></script>
<script src="javascript\graphiqueHome.js"></script>
<script src="javascript\home.js"></script>

<script>
	AppelAPI();
</script>
</body>
</html>
