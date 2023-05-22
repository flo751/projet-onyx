<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/style.css" rel="stylesheet" />
</head>

<body>
	<div class="chat-wrapper">
		<h1>RECHERCHE DANS LE CHAT </h1>
        <div>Vous êtes connecté en tant que <?php echo $_SESSION['user_name'];?></div>
		<div class="user-panel">
            <form method='post'>
			<input type="text" name="message" id="message" placeholder="Type your message here..." maxlength="100" />
			<button id="send-message">Send</button>
            </form>
			<?php if(!empty($resultat)){ for($i=0 ; $i<count($resultat); $i++ ){ ?>
			<p> 
			<?php echo $resultat[$i]->user_name; ?>
			<?php echo $resultat[$i]->room_name; ?>
			<?php echo $resultat[$i]->msg_date; ?>
			:<?php echo $resultat[$i]->msg_text; ?></p>
		<?php }}?>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/chat.js"></script>
</body>

</html>