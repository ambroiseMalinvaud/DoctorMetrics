<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleLogin.css">
	<link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" /> 
</head>

<body>
<div id="mainBlock">
<header>
	<figure> 
		<a><img id="logo" src="public/Images/DoctorMetrics.png" alt="Logo Doctor Metrics" title="Doctor Metrics"></a>
	</figure>
</header>
<form method="post" action="index.php?action=login">
	<div id="corps" >
			<ul id="connexion">
      			<li><label>Identifiant RPPS : </label><input type="text" name="rpps" size= "20" maxlength = "20"/></li>
     			<li>
					<label for="pass">Mot de passe &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;:</label>
					<input type="password" name="pass" id="pass" size ="20"/>
				</li>
      		 	<li><input id="connect" type="submit" value="Se connecter" /></li>
  			</ul>
	</div>
	</form>
</div>
</body>
</html>	
