<?php
	session_start();

	$conectar = mysqli_connect ("localhost", "root", "", "cbdu");
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	
	$sql_consulta = "SELECT id_usuario, nome_usuario, cpf_usuario, email_usuario, senha_usuario, perfil_usuario FROM usuario
					WHERE
						email_usuario = '$email'
					AND
						senha_usuario = '$senha'";

	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows ($resultado_consulta);
	
	
	if ($linhas == 1){
		$_SESSION["email_usuario"] = $email;
			 $registro = mysqli_fetch_row($resultado_consulta);
			 $_SESSION["id_usuario"] = $registro[0];
			  $_SESSION["perfil_usuario"] = $registro[5];
		if ($_SESSION["email_usuario"] == true) {
			  		echo "<script>
				location.href = ('admin.php')
			  </script>";	
		}else {
			echo "<script>
				alert ('Você está inativo no sistema!!')
			  </script>";
			echo "<script> location.href = ('index.php') </script>";
		}	  

			 
	}
	else{
	
		echo "<script>
				alert ('Login ou Senha Incorretos ! Digite Novamente !!')
			  </script>";
			  
		echo "<script> location.href = ('index.php') </script>";
	
	}
?>