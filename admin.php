<?php

session_start();

?>

<DOCTYPE!>
<html>

<head>
		<meta name ="charset"  content ="utf-"/>
		<meta name ="viewport" content ="widht-device-width, initial-scale-2.0"/>
		<title>Solicitar Requisição</title>
		<link href ="css/style.css" rel="stylesheet" type = "text/css"/>
		<link href ="css/menu2.css" rel="stylesheet" type = "text/css"/>
		<link href ="css/bootstrap.min.css" rel="stylesheet" type = "text/css"/>
		<script type ="text/javascript" src = "js/jquery-3.4.1.min"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type ="text/javascript" src = "js/bootstrap.min.js"></script>
		
</head>

<body>

		<div id ="cabecalho">
		 <?php include "header.php"?>
		 
		</div>
		
		
		
		<div>
			<?php
			
				include 'menu2.php'
			?>					
			
		</div>
	<br><br>
	<div id ="fundo_admin">
					<a href = "">
						<img src="img/fundo.png" height="400px">
					</a>
			  
		</div>
	
	<!--<div id ="rodape">
		<?php include "rodape_admin.php"?>
	</div>-->
	
</body>



</html>