<html>
<head>
	<title>Ajout Personne</title>
	<link rel="stylesheet" type="text/css" href="user.css"/>  
</head>

<body>
<div class="compte">
        <nav class="navbar">
             <h4>GESTION CLIENT</h4>
            <ul>
                <li><a href="liste.php"> liste des personne</a></li>
                <li><a href="add.php"> Ajouter personne</a></li>
                <li><a onclick="deconnexion()" id="deconect">Déconnexion</a></li>  
                <li><img src="./avatar.png" alt="Avatar" class="user"><a> Diaw</a></li>  
            </ul>
</nav>
</div>
<div class="card">
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom"></td>
			</tr>
			<tr>
				<td>Prenom</td>
				<td><input type="text" name="prenom"></td>
			</tr>
            <tr>
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Enregistrer"></td>
			</tr>
		</table>
	</form>

</div>
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$age = $_POST['age'];
		$email = $_POST['email'];

		// include database connection file
		include_once("database.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO user(nom,prenom,age,email) VALUES('$nom','$prenom','$age','$email')");

		// Show message when user added
		echo "Ajout réussit. <a href='liste.php'>Voir la liste</a>";
	}
	?>
	<script type="text/javascript" src="scrip.js"></script>

</body>
</html>