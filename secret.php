<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>resultat du post</title>
	</head>
	<body>
		<img src="../img/cadenas.png" alt="C'est une page protégée" />
			<?php
			if (isset($_POST['login']) && isset($_POST['mdp']))
			{
				$login = $_POST['login'];
				$mdp = $_POST['mdp'];
				if (md5($mdp) == '2e55b55e3580b47e5155a8374a833a74' && $login == 'root')
				{
					include 'code.php';
				}
				else {
						?>
						<script type="text/javascript">
							alert("Vous n'avez pas le droit de consulter ces documents");
							window.location="form.php";
						</script>
						<?php
				}
			}
		?>
	</body>
</html>
