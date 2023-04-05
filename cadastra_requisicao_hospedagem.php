<?php
	session_start ();
?>

<DOCTYPE!>
<html>

<head>
		<meta name ="charset"  content ="utf-"/>
		<meta name ="viewport" content ="widht-device-width, initial-scale-2.0"/>
		<title>Solicitar Requisição</title>
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
				<p>Requisição de Hospedagem</p>
		</div>
	
		<br><br><br><br><br><br>
<div id ="caixa_form">
<form method ="POST" action ="processa_requisicao_hospedagem.php">

 
 <div id ="input">
	
		<div class="form-row" id ="formulario">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Nome do Hospede</label>
				 <input type="text" class="form-control" name="nome_hospede"required>
			</div>
		
			<div class="form-group col-md-6">
			  <label for="inputPassword4">CPF  </label>
			  <input type="text" class="form-control" name ="cpf_hospede"required>
			</div>
		</div>
		
		<button type="button" id ="add_campo" class="btn btn-primary">+</button>
		<script>
		$( "#add_campo" ).click(function() {
			 $( "#formulario" ).append( '<div id ="input"><div class="form-row" id ="formulario"><div class="form-group col-md-6"><label for="inputEmail4">Nome do Hospede</label><input type="text" class="form-control" name ="nome_hospede"></div><div class="form-group col-md-6"><label for="inputPassword4">CPF  </label><input type="text" class="form-control" name ="cpf_hospede" required></div></div></div> ' );
			});
		
		</script>
		<br>
		
		
			
		<div class="form-group">
			<label for="inputAddress">Email</label>
			<input type="email" class="form-control" name="email_hospede"required>
			<br>
			<label for="inputEmail4">Telefone</label>
			 <input type="telefone" class="form-control" name ="telefone_hospede"required>
		</div>
		
		
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Motivo da Hospedagem</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="motivo_hospedagem"required></textarea>
		</div>
		 
		<div class="form-group">
			<label for="inputAddress">Destino</label>
			<input type="text" class="form-control" name ="destino" placeholder=""required>
		</div>
		
		<div class="form-group">
			<label for="inputAddress2">Hotel</label>
			<input type="text" class="form-control" id="inputAddress2" name ="hotel" placeholder=""required>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
			  <label>Data da Chegada</label>
			  <input type="date" class="form-control" name ="data_chegada" required>
			</div>
			 
			<div class="form-group col-md-6">
			  <label>Data da Saída</label>
			  <input type="date" class="form-control" name ="data_saida" required >
			</div>
			
			<div class="form-group col-md-6">
			  <label>Quantidade de Apartamentos</label>
			  <input type="text" class="form-control" name ="qtd_apto" required>
			</div>
			
			<div class="form-group col-md-6">
			  <label >Tipo de Acomodação</label>
			  <input type="text" class="form-control" name ="tipo_acomodacao" required>
			</div>
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Informações Adicionais</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="info_add"required></textarea>
		 </div>
		  
		<label for="inputState">Ir para</label>
				
				<select id="inputState" class="form-control" name ="status_requisicao"required>
					<option value="Aguardando Cotação"selected>Aguardando Cotação</option>
					
				</select>
				<br>
  
			
		 
		<button type="submit" class="btn btn-primary">Enviar Solicitação</button>
  </div>
  <br>
</form>
</div>
</div>
	<br><br>
	<!--<div id ="rodape">
		<?php include "rodape.php"?>
	</div> -->
</body>



</html>