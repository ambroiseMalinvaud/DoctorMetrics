<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleStatistiquesAdmin.css">
	<link rel="stylesheet" href="public/css/styleHeaderAdmin.css">
    <link rel="stylesheet" href="public/css/styleFooterAdmin.css"> 
</head>

<body>
<div id="mainBlock">

<?php require('view/headerAdmin.html'); ?>


<div id="corps">
	<div id="derniersTests">
		<h3>Résultats des derniers tests : </h3>
		<table>
  		 <tr>
      		 <th>Nom</th>
      		 <th>Prénom</th>
      		 <th>Poste</th>
			 <th>Aptitude</th>
			 <th>Date</th>
			 <th>Heure</th>
   		</tr>
  		<tr>
    		 <td>PERBET</td>
    		 <td>Alexandre</td>
    		 <td>Chirurgien</td>
			 <td>Apte</td>
			 <td>28/11/2019</td>
			 <td>19:36</td>
  		</tr>
		<tr>
    		 <td>MALINVAUD</td>
    		 <td>Ambroise</td>
    		 <td>Docteur</td>
			 <td>Inapte</td>
			 <td>27/11/2019</td>
			 <td>9:45</td>
  		</tr>
		<tr>
    		 <td>LALAU</td>
    		 <td>Alexandre</td>
    		 <td>Chirurgien</td>
			 <td>Apte</td>
			 <td>27/11/2019</td>
			 <td>8:30</td>
  		</tr>
		<tr>
    		 <td>OUARTI</td>
    		 <td>Karim</td>
    		 <td>Docteur</td>
			 <td>Apte</td>
			 <td>26/11/2019</td>
			 <td>20:15</td>
  		</tr>
		<tr>
    		 <td>DEBRAY-GENTY</td>
    		 <td>Grégoire</td>
    		 <td>Infirmier</td>
			 <td>Inapte</td>
			 <td>26/11/2019</td>
			 <td>15:56</td>
  		</tr>
  		 
		</table>
	</div>
	<div id="aptitude">
		<h3>Résumé du personnel : </h3>
		<table>
  		 <tr>
      		 <th>Nom</th>
			 <th>Prénom</th>
			 <th>Aptitude</th>
   		</tr>
  		<tr>
    		 <td>PERBET</td>
			<td>Alexandre</td>
			 <td>Apte</td>
  		</tr>
		<tr>
    		 <td>MALINVAUD</td>
    		 <td>Ambroise</td>
			 <td>Inapte</td>
  		</tr>
		<tr>
    		 <td>LALAU</td>
    		 <td>Alexandre</td>
			 <td>Apte</td>
  		</tr>
		<tr>
    		 <td>OUARTI</td>
    		 <td>Karim</td>
			 <td>Apte</td>
  		</tr>
		<tr>
    		 <td>DEBRAY-GENTY</td>
    		 <td>Grégoire</td>
			 <td>Inapte</td>
  		</tr>
  		 
		</table>
	</div>
</div>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>

