<!DOCTYPE html>
<html lang="FR">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>chatbox</title>
	<!-- BOOTSTRAP CORE STYLE  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- FONT AWESOME STYLE  -->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLE  -->
	<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
	<!--On inclue ici le menu de navigation includes/header.php-->

	<!-- On insere le titre de la page (LOGIN UTILISATEUR) -->
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>LOGIN</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 offset-md-3">
				<form method="post" action="loginIndex">
					<div class="form-group">
						<label>Entrez identifiant</label>
						<input type="text" name="pseudo"  required>
					</div>

					<div class="form-group">
						<label>Entrez votre mot de passe</label>
						<input type="password" name="password"  required>
						<p>
							<a href="/Projet-onyx/login/ForgotPassword">Mot de passe oublié ?</a>
						</p>
					</div>

					<button type="submit" name="login" class="btn btn-info">LOGIN</button>&nbsp;&nbsp;&nbsp;
					<a href="/Projet-onyx/login/Signup">Je n'ai pas de compte</a>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>