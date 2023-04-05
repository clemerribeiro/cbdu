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
		
		<div id ="titulo_pag">
				<p>Lista de Requisições</p>
		</div>


<form action ="processa_cotacao_hospedagem.php" method ="POST" >

 
 <div id ="input">
	
		
		
		 <?php
              $conectar = mysqli_connect("localhost", "root", "", "cbdu");
			  $id_requisicao = $_GET['id_requisicao'];
              $sql_pesquisa = "SELECT id_requisicao
			  FROM requisicao_hospedagem
                    WHERE id_requisicao = '$id_requisicao'";
                 $resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);
                 $registro = mysqli_fetch_row($resultado_pesquisa);
         ?>
		<tr>
						<th scope="row">
							Referente a cotação:
						</th>
						
						<td>
							<?php echo "<b>#HOT00$registro[0] </b></p>";?>
						</td>
					</tr>
					
					
			<label for="exampleFormControlTextarea1">Observação</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="observacao"required></textarea>
			
		 
		 
	</table>
	
		
		 
		
		 
		 
		
			<br>
			
		 
		<a class="btn btn-primary" id="botao_add" role="button" href ="processa_cotacao_hospedagem.php?id_requisicao=<?php echo $registro[0]?>">+ Adicionar Cotação</button></a>
  </div>
 
</form>
</div>
</div>

	<!--<div id ="rodape">
		<?php include "rodape.php"?>
	</div> -->
</body>



</html>