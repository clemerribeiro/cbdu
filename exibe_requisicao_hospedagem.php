<?php
	session_start ();
?>

<DOCTYPE!>
<html>

<head>
		<meta name ="charset"  content ="utf-8"/>
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
		
		<div id ="titulo_pag">
				<p>Lista de Requisições</p>
		</div>
		
		
			
		
		 
         <?php
              $conectar = mysqli_connect("localhost", "root", "", "cbdu");
			  $id_requisicao = $_GET['id_requisicao'];
              $sql_pesquisa = "SELECT id_requisicao, nome_hospede, cpf_hospede,email_hospede, telefone_hospede, data_requisicao, motivo_hospedagem, destino,
			  hotel, data_chegada, data_saida, qtd_apto, tipo_acomodacao, info_add, status_requisicao, nome_usuario
                    FROM requisicao_hospedagem,usuario
                    WHERE id_requisicao = '$id_requisicao'";
                 $resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);
                 $registro = mysqli_fetch_row($resultado_pesquisa);
         ?>
		
                    
			<br>

<div>
			<?php
			
				include  'adicionar_orcamento.php'
				
			?>
							
			
		</div>

			   <table id ="tabela_exibe" class ="table table-hover">
				  
				  <tbody>
					<tr>
						<th scope="row">
							Solicitante:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[15] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Código:
						</th>
						
						<td>
							<?php echo "#HOT00$registro[0] </p>";?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Passageiro:
						</th>
						
						<td>
							<?php echo "$registro[1] </p>";?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							CPF:
						</th>
						
						<td>
							<?php echo "$registro[2] </p>";?>
						</td>
					</tr>
	
					
					<tr>
						<th scope="row">
							E-mail:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[3] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Telefone:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[4] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Data da Requisição:
						</th>
						
						<td>
							<?php 
								 echo date("d/m/Y H:i:s", strtotime($registro[5]));
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Motivo da Hospedagem:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[6] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Destino:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[7] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Hotel:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[8] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Data da Chegada:
						</th>
						
						<td>
							<?php 
								echo date("d/m/Y", strtotime($registro[9]));;
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Data da Saida:
						</th>
						
						<td>
							<?php 
								 echo date("d/m/Y", strtotime($registro[10]));;
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Quantidade de Apartamentos:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[11] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Tipo de Acomodação:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[12] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Informações Adicionais:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[13] </p>";
							?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							Status da Requisição:
						</th>
						
						<td>
							<?php 
								echo "<p>$registro[14] </p>";
							?>
						</td>
					</tr>
					
				  </tbody>
				 <br>
					<a class="btn btn-primary" id="botao_add" role="button" data-toggle="modal" data-target="#modalContactForm" href ="id_requisicao=<?php echo $registro[0]?>"><b> + Adicionar Cotação</b></a>
					<a class="btn btn-primary" id="botao_add" role="button" data-toggle="modal" data-target="#modalContactForm" href ="id_requisicao=<?php echo $registro[0]?>"><b> + Adicionar Orçamento</b></a>
					<br><br>
					

 

				</table>
				
					
				
			</div>
		
	
	<!--<div id ="rodape">
		<?php include "rodape.php"?>
	</div>-->
</body>



</html>