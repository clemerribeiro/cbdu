<?php
      session_start();
      $conectar = mysqli_connect('localhost', 'root', '', 'cbdu');

	  $nome_usuario = $_POST["nome_usuario"];
	  $cpf_usuario = $_POST["cpf_usuario"];
	  $email_usuario = $_POST["email_usuario"];
	  $senha_usuario = $_POST["senha_usuario"];
	  $perfil_usuario = $_POST["perfil_usuario"];
  
    
    $sql_consulta = "SELECT email_usuario FROM usuario
                     WHERE email_usuario = '$email_usuario'";
    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
    $linhas = mysqli_num_rows($resultado_consulta);
    
    if($linhas == 1){
        echo "<script>
                  alert ('Email ja cadastrado. Tente outro!') 
             </script>";
        echo "<script>
                  location.href = ('cadastra_usuario.php') 
             </script>";        
    }
    else{
        
        $sql_cadastrar = "INSERT INTO usuario
                          (`nome_usuario`, `cpf_usuario`, `email_usuario`, `senha_usuario`, `perfil_usuario`) 
                          VALUES
                   ('$nome_usuario', '$cpf_usuario', '$email_usuario', '$senha_usuario', '$perfil_usuario')";
        $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);
		
        if($resultado_cadastrar == true){
            echo "<script>
                  alert ('Usuário cadastrado com sucesso') 
                  </script>";
            echo "<script>
                  location.href = ('lista_usuario.php') 
                  </script>"; 
        }
        else{
            echo "<script>
                  alert ('Ocorreu um erro no servidor. Tente de novo') 
                  </script>";
            echo "<script>
					location.href = ('index.php') 	
                  </script>"; 
        }
    }
?>

