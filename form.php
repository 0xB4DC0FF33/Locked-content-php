<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test sur les formulaires</title>
	</head>
	<body>

		<div class="form-group">
			<h1>Veuillez vous connecter pour acceder a la page suivante (admin only)</h1>
			<form class="login" action="secret.php" method="post">
				<p><label>Utilisateur : <input type="text" name="login" value=""></label></p>
				<p><label>Mot de Passe : <input type="password" name="mdp" value=""></label></p>
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
	</body>
</html>
