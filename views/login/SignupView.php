<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>chatbox</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
   
</head>

<body>
    <!--On affiche le titre de la page : CREER UN COMPTE-->
    <!--On affiche le formulaire de creation de compte-->
    <!--A la suite de la zone de saisie du captcha, on insère l'image créée par captcha.php : <img src="captcha.php">  -->
    <!-- On appelle la fonction valid() dans la balise <form> onSubmit="return valid(); -->
    <!-- On appelle la fonction checkAvailability() dans la balise <input> de l'email onBlur="checkAvailability(this.value)" -->
    <div class="container">
		<div class="row">
			<div class="col">
				<h3>CREER UN COMPTE</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 offset-md-3">
				<form method="post" onsubmit="return valid();" >
					<div class="form-group">
						<label>Email</label><br>
						<input type="text" name="EmailId" id="mail" onblur="checkAvailability(mail)" required>
                        <span id="answer"></span>
					</div>
                    <div class="form-group">
						<label>Pseudo</label><br>
						<input type="text" name="pseudo" id="pseudo" required>
                        <span id="answer"></span>
					</div>
                    <div class="form-group">
						<label>Mot de passe</label><br>
						<input type="password" id="password" name="password" required>
					</div>
                    <div class="form-group">
						<label>Confirmez le mot de passe</label><br>
						<input type="password" id="checkpassword" name="checkpassword" required>
					</div>

					<button type="submit" name="signup" id="register" class="btn btn-info">Enregistrer</button>&nbsp;&nbsp;&nbsp;
				</form>
			</div>
		</div>
	</div>

    <script>
        valid();
        function valid(){
            var mdp = document.getElementById("Password");
            var checkmdp = document.getElementById("checkpassword");
            const register = document.getElementById("register");
            checkmdp.addEventListener("keyup", () =>{
            if((mdp.value) === (checkmdp.value)){
                register.disabled = false;
                console.log
            }else{
                register.disabled = true;
            }
            })}
        </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>