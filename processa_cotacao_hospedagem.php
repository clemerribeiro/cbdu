<?php
    session_start();	
	$conectar = mysqli_connect("localhost", "root", "", "cbdu");

		
		$id_requisicao = $_POST["id_requisicao"];
		$observacao = $_POST['observacao'];
		
		
		
	 $sql_cadastrar = "INSERT INTO cotacao_hospedagem
                          (id_requisicao, observacao)
                          VALUES
                   ('$id_requisicao', '$observacao')";
				   
        $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);
		
        if($resultado_cadastrar == true){
            echo "<script>
                  alert ('Cotação enviada com sucesso') 
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
					location.href = ('lista_requisicao_hospedagem.php') 	
                  </script>"; 
        }
     
		$sql_altera = "UPDATE requisicao_hospedagem
                            SET
                               
                                status_requisicao = 'Aguardando Orçamento'
                                
                            WHERE id_requisicao = $id_requisicao";
    
        $sql_pesquisa_alteracao = mysqli_query($conectar, $sql_altera);  
        
        
		 	
	
?>