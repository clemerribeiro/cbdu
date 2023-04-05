<?php
	session_start ();
?>

<DOCTYPE!>
<html>

<head>
		<meta name ="charset"  content ="utf-"/>
		<meta name ="viewport" content ="widht-device-width, initial-scale-2.0"/>
		<title>Lista de Requisições</title>
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
		

			
		<br>	
		<?php
                $conectar = mysqli_connect("localhost", "root", "", "cbdu");
                $sql_consulta = "SELECT
                                 id_requisicao, status_requisicao, destino, data_chegada, data_saida, nome_hospede
                            FROM requisicao_hospedagem 
                            WHERE id_requisicao >0 ORDER BY id_requisicao DESC" ;
                            	
                $resultado_consulta = mysqli_query($conectar, $sql_consulta);
            ?>
			<br>
		<div id ="caixa_tabela">
			<div id = "tabela">
			   <table class="table table-hover">
				  <thead>
					<tr>
					  <th scope="col">Código</th>
					  <th scope="col">Status</th>
					  <th scope="col">Destino</th>
					  <th scope="col">Chegada</th>
					  <th scope="col">Saída</th>
					  <th scope="col">Passageiros</th>
					</tr>
				  </thead>
				  <?php
                            while($registro = mysqli_fetch_row($resultado_consulta)){
                             
                         ?>
				  <tbody>
					<tr>
							<th scope="row">
								<p>
									<a href ="exibe_requisicao_hospedagem.php?id_requisicao=<?php echo $registro[0]?>"><?php echo"#HOT00$registro[0]";?></a>
								</p>
							</th>
							
							<td>
								<p>
									<a href ="exibe_requisicao_hospedagem.php?id_requisicao=<?php echo $registro[0]?>"> <?php echo"$registro[1]";?></a>
								</p>
                            </td>
                             
							<td>
                                <p>
                                    <a href ="exibe_requisicao_hospedagem.php?id_requisicao=<?php echo $registro[0]?>"> <?php echo "$registro[2]";?></a>
                                </p>
                            </td>

                            <td>
                                 <p>
                                    <a href ="exibe_requisicao_hospedagem.php?id_requisicao=<?php echo $registro[0]?>"> <?php echo date("d/m/Y", strtotime($registro[3]));?></a>
                                 </p>
                             </td>
							 
							 <td>
                                 <p>
                                     <?php echo date("d/m/Y", strtotime($registro[4]));?>
                                 </p>
                             </td>
							 
							 <td>
                                 <p>
                                      <a href ="exibe_requisicao_hospedagem.php?id_requisicao=<?php echo $registro[0]?>"> <?php echo "$registro[5]";?></a>
                                 </p>
                             </td>
							
					  
					 
					</tr>
					
				  </tbody>
				  <?php
                            }
                         ?>
				</table>
			</div>
		</div>
	<br><br><br><br><br>
	<!--<div id ="rodape">
		<?php include "rodape.php"?>
	</div>-->
</body>



</html>