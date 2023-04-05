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
                                 id_usuario, nome_usuario, cpf_usuario, email_usuario, perfil_usuario
                            FROM usuario 
                            WHERE id_usuario >0 ORDER BY id_usuario " ;
                            	
                $resultado_consulta = mysqli_query($conectar, $sql_consulta);
            ?>
			<br>
		<div id ="caixa_tabela">
			<div id = "tabela">
			   <table class="table table-hover">
				  <thead>
					<tr>
					  <th scope="col">Nome Completo</th>
					  <th scope="col">Cpf</th>
					  <th scope="col">E-mail</th>
					  <th scope="col">Perfil</th>
					  <th scope="col">Alterar</th>
					  <th scope="col">Excluir</th>
					  
					</tr>
				  </thead>
				  <?php
                            while($registro = mysqli_fetch_row($resultado_consulta)){
                             
                         ?>
				  <tbody>
					<tr>
							<th scope="row">
								<p>
									<?php echo"$registro[1]";?>
								</p>
							</th>
							
							<td>
								<p>
									<?php echo"$registro[2]";?>
								</p>
                            </td>
                             
							<td>
                                <p>
                                  <?php echo "$registro[3]";?>
                                </p>
                            </td>

                            <td>
                                 <p>
                                    <?php echo "$registro[4]";?>
                                 </p>
                             </td>
							 
							 <td>
                                 <p>
									<a href ="altera_usuario.php?id_usuario=<?php echo $registro[0]?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 512"><path d="M64 368v80h80l235.727-235.729-79.999-79.998L64 368zm377.602-217.602c8.531-8.531 8.531-21.334 0-29.865l-50.135-50.135c-8.531-8.531-21.334-8.531-29.865 0l-39.468 39.469 79.999 79.998 39.469-39.467z"/></svg></a>
								 </p>
                             </td>
							 
							 <td>
                                 <p>
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 512" href ="exclui_usuario.php"><path d="M128 405.429C128 428.846 147.198 448 170.667 448h170.667C364.802 448 384 428.846 384 405.429V160H128v245.429zM416 96h-80l-26.785-32H202.786L176 96H96v32h320V96z"/></svg>
									
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