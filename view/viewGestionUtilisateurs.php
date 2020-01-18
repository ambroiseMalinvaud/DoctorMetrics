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
		<button class="boutonAdmin"><a href="deleteUser">SUPPRIMER UN UTILISATEUR</a></button>
		<button class="boutonAdmin"><a href="resetPassword">REINITIALISER UN MOT DE PASSE</a></button>

	</div>
	
	<div id="addUser">
		<h3>Ajouter un utilisateur :</h3>
		<div id="blocAdd">
		<div id="col1">
			<p><strong>Numéro RPPS</strong></p>
				<form method="post" action="gestionUtilisateurs">
					<p>
						<label for="rpps"></label><input type="text" name="rpps" id="rpps" placeholder="12345678912" minlength="11" maxlength="11" required/>
                        <span class="tooltip">Un RPPS doit être composé de 11 caratères</span>
					</p>
				
			<p><strong>Adresse mail</strong></p>
				
					<p>
						<label for="email"></label><input type="email" name="email" id="email" placeholder="exemple@mail.com" required/>
					</p>
				
			<p><strong>Numéro de téléphone</strong></p>
				
					<p>
						<label for="tel"></label><input type="tel" name="tel" id="tel" placeholder="06XXXXXXXX" minlength="10" maxlength="10" required/>
                        <span class="tooltip">Veuillez rentrer un numéro de téléphone de 10 caratères</span>
					</p>
                    
                              
				
			<div id="addUserFooter">
				<input type="submit" value="Ajouter l'utilisateur">
			</div>
		</div>
		<div id="col2">

			<p><strong>Prénom</strong></p>
				
					<p>
						<label for="prenom"></label><input type="text" name="prenom" id="prenom" minlength="2" placeholder="Prénom" required/>
                        <span class="tooltip">Veuillez saisir un prénom de minimum 2 caratères</span>
					</p>
				
			<p><strong>Nom</strong></p>
				
					<p>
						<label for="nom"></label><input type="text" name="nom" id="nom" placeholder="Nom" minlength="2" required/>
                        <span class="tooltip">Veuillez saisir un nom de minimum 2 caratères</span>
					</p>
				
			
					<p><strong>Administrateur?</strong></p>
					<p>
						<input type="radio" id="adminy" name="admin" value=1> oui 
						<input type="radio" id="adminn" name="admin" value=0 checked> non
					</p>
				</form>
		</div>
            
    <script>
        
                // Fonction de désactivation de l'affichage des "tooltips"
        
        function deactivateTooltips() {
        
            var spans = document.getElementsByTagName('span'),
            spansLength = spans.length;
            
            for (var i = 0 ; i < spansLength ; i++) {
                if (spans[i].className == 'tooltip') {
                    spans[i].style.display = 'none';
                }
            }
        
        }


        // La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input

        function getTooltip(elements) {
        
            while (elements = elements.nextSibling) {
                if (elements.className === 'tooltip') {
                    return elements;
                }
            }
            
            return false;
        
        }


        // Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok

        var check = {}; // On met toutes nos fonctions dans un objet littéral


                check['rpps'] = function(id) {

            var name = document.getElementById(id),
                tooltipStyle = getTooltip(name).style;

            if (name.value.length == 11) {
                name.className = 'correct';
                tooltipStyle.display = 'none';
                document.getElementById('rpps').style.color='#00FF00';
                return true;
            } else {
                document.getElementById('rpps').style.color='#FF0000';
                name.className = 'incorrect';
                tooltipStyle.display = 'inline-block';
                return false;
            }

        };
        
        
        check['tel'] = function(id) {

            var name = document.getElementById(id),
                tooltipStyle = getTooltip(name).style;

            if (name.value.length == 10) {
                name.className = 'correct';
                tooltipStyle.display = 'none';
                document.getElementById('tel').style.color='#00FF00';
                return true;
            } else {
                document.getElementById('tel').style.color='#FF0000';
                name.className = 'incorrect';
                tooltipStyle.display = 'inline-block';
                return false;
            }

        };
        
        
        
        check['prenom'] = function(id) {

            var name = document.getElementById(id),
                tooltipStyle = getTooltip(name).style;

            if (name.value.length >= 2) {
                name.className = 'correct';
                tooltipStyle.display = 'none';
                document.getElementById('prenom').style.color='#00FF00';
                return true;
            } else {
                document.getElementById('prenom').style.color='#FF0000';
                name.className = 'incorrect';
                tooltipStyle.display = 'inline-block';
                return false;
            }

        }; 
        
        
        check['nom'] = function(id) {

            var name = document.getElementById(id),
                tooltipStyle = getTooltip(name).style;

            if (name.value.length >= 2) {
                name.className = 'correct';
                tooltipStyle.display = 'none';
                document.getElementById('nom').style.color='#00FF00';
                return true;
            } else {
                document.getElementById('nom').style.color='#FF0000';
                name.className = 'incorrect';
                tooltipStyle.display = 'inline-block';
                return false;
            }

        };
        

        // Mise en place des événements
        
        (function() { // Utilisation d'une IIFE pour éviter les variables globales.
        
            var myForm = document.getElementById('myForm'),
                inputs = document.getElementsByTagName('input'),
                inputsLength = inputs.length;
        
            for (var i = 0 ; i < inputsLength ; i++) {
                if (inputs[i].type == 'text' || inputs[i].type == 'password') {
        
                    inputs[i].addEventListener('keyup', function(e) {
                        check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
                    }, false);
        
                }
            }
        
            myForm.addEventListener('submit', function(e) {
        
                var result = true;
        
                for (var i in check) {
                    result = check[i](i) && result;
                }
        
                if (result) {
                    alert('Le formulaire est bien rempli.');
                }
        
                e.preventDefault();
        
            }, false);
        
            myForm.addEventListener('reset', function() {
        
                for (var i = 0 ; i < inputsLength ; i++) {
                    if (inputs[i].type == 'text' || inputs[i].type == 'password') {
                        inputs[i].className = '';
                    }
                }
        
                deactivateTooltips();
        
            }, false);
        
        })();


        // Maintenant que tout est initialisé, on peut désactiver les "tooltips"
        
        deactivateTooltips();

    </script>
	</div>
	</div>
</div>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>