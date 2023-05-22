<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/style.css" rel="stylesheet" />
</head>

<body>

	<ul>
		<li><a href="../../chat/chatIndex/1">Bienvenue</a></li>
		<li><a href="../../chat/chatIndex/2">classique</a></li>
		<li><a href="../../chat/chatIndex/3">discution</a></li>
		<li><a href="../../chat/chatIndex/4">même</a></li>
		<li><a href="../../chat/chatIndex/5">chat des petits troue du cuc</a></li>
		<li><a href="../../chat/ShearIndex">Recherhe de message</a></li>
	</ul>
	<h1> Vous êtes sur le tchat <?php echo $titre->room_name; ?> </h1>
	<div class="chat-wrapper">
		<div id="message-box">
		<?php for($i=0 ; $i<count($historique); $i++ ){ ?>
			<p> <span style="color: <?php echo $historique[$i]->msg_color; ?>">
			<?php echo $historique[$i]->user_name; ?>
			<?php echo $historique[$i]->msg_date; ?></span>
			:<?php echo $historique[$i]->msg_text; ?></p>
		<?php }?>
		</div>
		<div class="user-panel">
			<input type="text" name="name" id="name" placeholder="Your Name" maxlength="15" value="<?php echo $_SESSION['user_name']; ?>" />
			<input type="text" name="message" id="message" placeholder="Type your message here..." maxlength="100" />
			<button id="send-message">Send</button>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/chat.js"></script>
</body>

</html>