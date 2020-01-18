<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleStatistiquesAdmin.css">
	<link rel="stylesheet" href="public/css/styleHeaderAdmin.css">
    <link rel="stylesheet" href="public/css/styleFooterAdmin.css">
    <link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />
</head>

<body>
<div id="mainBlock">

<?php require('view/headerAdmin.html'); ?>


<div id="corps">
	<div id="derniersTests">
		<h3>Résultats des derniers tests : </h3>
		<table>
  		 <tr>
  		 	 <th>Date</th>
      		 <th>Nom</th>
      		 <th>Prénom</th>
      		 <th>Poste</th>
			 <th>Test réussi</th>
   		</tr>
   		<?php 
   			while($users = $req->fetch()) {
   				echo '<tr>';
   				echo '<td>' . $users['dateOfTest'] . '</td>';
  				echo '<td>' . $users['lastName'] . '</td>';
  				echo '<td>' . $users['firstName'] . '</td>';
  				echo '<td>' . $users['job'] . '</td>';
  				echo '<td>' . $users['capable'] . '</td>';
  				echo '</tr>';
  			}
  			?>
		</table>
	</div>
</div>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>

