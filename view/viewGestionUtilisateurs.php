<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleGestionUtilisateurs.css">
	<link rel="stylesheet" href="public/css/styleHeaderAdmin.css">
    <link rel="stylesheet" href="public/css/styleFooterAdmin.css">
    <link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />
</head>

<body>
<div id="mainBlock">

<?php require('view/headerAdmin.html'); ?>

<div id="corps">
	<div id="userList">
		<h3>Liste des utilisateurs : </h3>
		<table>
  		 <tr>
      		 <th>Nom</th>
      		 <th>Prénom</th>
      		 <th>RPPS</th>
   		</tr>
   			<?php 
   			while($users = $req->fetch()) {
   				echo '<tr>';
  				echo '<td>' . $users['lastName'] . '</td>';
  				echo '<td>' . $users['firstName'] . '</td>';
  				echo '<td>' . $users['RPPS'] . '</td>';
  				echo '</tr>';
  			}
  			?>
		</table>
		<button id="deleteUser"><a href="deleteUser">SUPPRIMER UN UTILISATEUR</a></button>
	</div>
	
	<div id="addUser">
		<h3>Ajouter un utilisateur :</h3>
		<div id="blocAdd">
		<div id="col1">

			<p><strong>Numéro RPPS</strong></p>
				<form method="post" action="gestionUtilisateurs">
					<p>
						<label for="rpps"></label><input type="text" name="rpps" id="rpps" placeholder="12345678912" required/>
					</p>
				
			<p><strong>Adresse mail</strong></p>
				
					<p>
						<label for="email"></label><input type="email" name="email" id="email" placeholder="exemple@mail.com" required/>
					</p>
				
			<p><strong>Numéro de téléphone</strong></p>
				
					<p>
						<label for="tel"></label><input type="tel" name="tel" id="tel" placeholder="06XXXXXXXX" required/>
					</p>
                    
                              
				
			<div id="addUserFooter">
				<input type="submit" value="Ajouter l'utilisateur">
			</div>
		</div>
		<div id="col2">

			<p><strong>Prénom</strong></p>
				
					<p>
						<label for="prenom"></label><input type="text" name="prenom" id="prenom" placeholder="Prénom" required/>
					</p>
				
			<p><strong>Nom</strong></p>
				
					<p>
						<label for="nom"></label><input type="text" name="nom" id="nom" placeholder="Nom" required/>
					</p>
				
			
					<p><strong>Administrateur?</strong></p>
					<p>
						<input type="radio" id="adminy" name="admin" value=1> oui 
						<input type="radio" id="adminn" name="admin" value=0 checked> non
					</p>
				</form>
		</div>
	</div>
	</div>
</div>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>