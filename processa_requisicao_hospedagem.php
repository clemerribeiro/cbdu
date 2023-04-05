<?php
      session_start();
      $conectar = mysqli_connect("localhost", "root", "", "cbdu");
	  date_default_timezone_set('America/Sao_Paulo');

		  $nome_hospede = $_POST["nome_hospede"];
		  $cpf_hospede = $_POST["cpf_hospede"];
		  $email_hospede = $_POST["email_hospede"];
		  $telefone_hospede =$_POST["telefone_hospede"];
		 
		  $motivo_hospedagem = $_POST["motivo_hospedagem"];
		  $destino = $_POST["destino"];
		  $hotel = $_POST["hotel"];
		  $data_chegada = $_POST["data_chegada"];
		  $data_saida = $_POST["data_saida"];
		  $qtd_apto = $_POST["qtd_apto"];
		  $tipo_acomodacao = $_POST["tipo_acomodacao"];
		  $info_add = $_POST["info_add"];
		  $status_requisicao = $_POST["status_requisicao"];
		  
		  
    
	
	
        
        $sql_cadastrar = "INSERT INTO requisicao_hospedagem
                          (nome_hospede,cpf_hospede,email_hospede,telefone_hospede,motivo_hospedagem,destino,hotel,data_chegada,data_saida,qtd_apto,tipo_acomodacao,info_add,status_requisicao) 
                          VALUES 
                   ('$nome_hospede', '$cpf_hospede', '$email_hospede', '$telefone_hospede', '$motivo_hospedagem', '$destino', '$hotel', '$data_chegada', '$data_saida', '$qtd_apto', '$tipo_acomodacao', '$info_add', '$status_requisicao')";
        $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);
		
        if($resultado_cadastrar == true){
            echo "<script>
                  alert ('Requsição cadastrada com sucesso') 
                  </script>";
            echo "<script>
                  location.href = ('lista_requisicao_hospedagem.php') 
                  </script>"; 
        }
        else{
            echo "<script>
                  alert ('Ocorreu um erro no servidor. Tente de novo') 
                  </script>";
            echo "<script>
					location.href = ('cadastra_requisicao_hospedagem.php') 	
                  </script>"; 
        }
    
?>

