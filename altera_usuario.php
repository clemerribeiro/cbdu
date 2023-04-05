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
				<p>Alterar Usuário</p>
		</div>
			
		<br>
                  
				
		
				 <div id ="input">
	
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "cbdu");

						$id_usuario = $_GET["id_usuario"];
						$sql_pesquisa = "SELECT id_usuario,
												nome_usuario,
												email_usuario,
												cpf_usuario,
												perfil_usuario
										FROM usuario
										WHERE id_usuario = '$id_usuario' ";

						$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);

						$registro = mysqli_fetch_row($resultado_pesquisa);
					?>


					<form method="POST" action="processa_altera_usuario.php" >
					<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                    <input type="hidden" name="perfil_usuario" value="<?php echo $registro[4]; ?>">
				<?php
					if ($registro[4] <> "Administrador") {							 								 
				?>	
					
		<div class="form-group">
		
			<label for="inputEmail4">Nome Completo </label>
			<input type="text" class="form-control" name="nome_usuario"  value="<?php echo $registro[1]; ?>" required>
			
			<label for="inputPassword4">CPF</label>
			<input type="text" class="form-control" name ="cpf_usuario"  value="<?php echo $registro[2]; ?>" required>
			
			<label for="inputAddress">Email</label>
			<input type="email" class="form-control" name="email_usuario" placeholder=""  value="<?php echo $registro[3]; ?>" required>		
			
			
			<label for="inputState">Perfil *</label>
				
				<select id="inputState" class="form-control col-md-4" name ="perfil_usuario"required>
					<option value="Administrador"
					<?php
							if ($registro[4] == "Administrador") {
								echo "selected";
							} 
						?>selected>Administrador</option>
					<option value="Solicitante"<?php
							if ($registro[4] == "Solicitante") {
								echo "selected";
							} 
						?>>Solicitante</option>
					<option value="Autorizador"<?php
							if ($registro[4] == "Autorizador") {
								echo "selected";
							} 
						?>>Autorizador</option>
				</select>
					<?php
					}
					?>
		</div>
	<div class="form-row">
		
		
		
     <button type="submit" class="btn btn-primary">Alterar Usuário</button>
  </div>
  
</form>
</div>
				
 
			
</body>
	

</html>