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
     <!-- On insere le titre de la page (RECUPERATION MOT DE PASSE -->
     <div class="container">
		<div class="row">
			<div class="col">
				<h3>RECUPERATION DE MOT DE PASSE</h3>
			</div>
		</div>     
        <!--On insere le formulaire de recuperation-->
        <div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 offset-md-3">
				<form method="post" onsubmit="return valid();">
					<div class="form-group">
						<label>Email</label><br>
						<input type="text" name="EmailId" id="mail"  required>
                        <span id="answer"></span>
					</div>
                    <div class="form-group">
						<label>Mot de passe</label><br>
						<input type="password" id="Password" name="password"  required>
					</div>
                    <div class="form-group">
						<label>Confirmez le mot de passe</label><br>
						<input type="password" id="checkpassword" name="checkpassword"  required>
					</div>

					<button type="submit" name="login" id="register" class="btn btn-info">Envoyer</button>&nbsp;&nbsp;&nbsp;
				</form>
			</div>
		</div>
	</div>
     <!--L'appel de la fonction valid() se fait dans la balise <form> au moyen de la propri�t� onSubmit="return valid();"-->
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
     <!-- FOOTER SECTION END-->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     
</body>

</html>