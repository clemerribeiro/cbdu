<?php
	session_start ();
?>

<DOCTYPE!>
<html>

<head>
		<meta name ="charset"  content ="utf-"/>
		<meta name ="viewport" content ="widht-device-width, initial-scale-2.0"/>
		<title>ECOS Control</title>
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
		
		
		<br>
		<div id ="titulo_pag">
				<p>Cadastrar Usuario</p>
		</div>
			
		<br>	
<form method ="POST" action ="processa_cadastra_usuario.php">
  <div id ="input">
	
	
		<div class="form-group">
		
			<label for="inputEmail4">Nome Completo </label>
			<input type="text" class="form-control" name="nome_usuario"required>
			
			<label for="inputPassword4">CPF</label>
			<input type="text" class="form-control" name ="cpf_usuario"required>
			
			<label for="inputAddress">Email</label>
			<input type="email" class="form-control" name="email_usuario" placeholder=""required>		
			
			<label for="inputEmail4">Senha</label>
			<input type="password" class="form-control" name ="senha_usuario"required>
			
			<label for="inputState">Perfil *</label>
				
				<select id="inputState" class="form-control col-md-4" name ="perfil_usuario"required>
					<option value="Administrador"selected>Administrador</option>
					<option value="Solicitante">Solicitante</option>
					<option value="Autorizador">Autorizador</option>
				</select>
		</div>
	<div class="form-row">
		
		
		
     <button type="submit" class="btn btn-primary">Cadastrar Usuário</button>
  </div>
  
</form>
</div>
	<br><br>
	<!--<div id ="rodape">
		<?php include "rodape.php"?>
	</div>-->
</body>



</html>