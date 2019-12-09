<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleGestionUtilisateurs.css"> 
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
      		 <th>Poste</th>
   		</tr>
  		<tr>
    		 <td>PERBET</td>
    		 <td>Alexandre</td>
    		 <td>Chirurgien</td>
  		</tr>
		<tr>
    		 <td>MALINVAUD</td>
    		 <td>Ambroise</td>
    		 <td>Docteur</td>
  		</tr>
		<tr>
    		 <td>LALAU</td>
    		 <td>Alexandre</td>
    		 <td>Chirurgien</td>
  		</tr>
		<tr>
    		 <td>OUARTI</td>
    		 <td>Karim</td>
    		 <td>Docteur</td>
  		</tr>
		<tr>
    		 <td>DEBRAY-GENTY</td>
    		 <td>Grégoire</td>
    		 <td>Infirmier</td>
  		</tr>
  		 
		</table>
	</div>
	
	<div id="addUser">
		<h3>Ajouter un utilsateur :</h3>
		<div id="blocAdd">
		<div id="col1">
			<p><strong>Numéro RPPS</strong></p>
				<form method="post" action="index.php?action=gestionUtilisateurs">
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
				
			<p><strong>Mot de passe</strong></p>
				
					<p>
						<label for="pass"></label><input type="text" name="pass" id="pass" placeholder="Mot de passe" required/>
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

