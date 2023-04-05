
<form method ="POST" action ="processa_orcamento_hospedagem.php">
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Envie o Orçamento</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		<input type="hidden" name="id_requisicao" value="<?php echo $registro[0]?>"/>
		
      </div>
      <br>
	  <div class="modal-body mx-3">
			
			<tr>
						<th scope="row">
							Referente a requisição:
						</th>
						
						<td>
							<?php echo "<b>#HOT00$registro[0] </b></p>";?>
						</td>
					</tr>
        
          
          <label data-error="wrong" data-success="right" for="form32">Anexo *</label><br>
		  <input type="file" name="anexo_cotacao" required/>
          
       <br><br>

        <div class="form-group">
			<label for="inputAddress">Email</label>
			<input type="email" class="form-control" name="email_hospede"required>
			<br>
			<label for="inputEmail4">Telefone</label>
			 <input type="telefone" class="form-control" name ="telefone_hospede"required>
		</div>
		<div class="form-group" id ="formulario">
		
		
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Adicionado em: </label>
				 <input type="text" class="form-control" name="data_orcamento"required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Valor Unitário: </label>
				 <input type="text" class="form-control" name="valor_unitario"required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Quantidade: </label>
				 <input type="text" class="form-control" name="quantidade"required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Taxas: </label>
				 <input type="text" class="form-control" name="taxa"required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Valor Total: </label>
				 <input type="text" class="form-control" name="valor_total"required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Data e Horario: </label>
				 <input type="text" class="form-control" name="data_hora"required>
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail4">Fornecedor: </label>
				 <input type="text" class="form-control" name="fornecedor"required>
			</div>
			
			<div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form8">Observações</label>
		  <textarea type="text" id="form8" name="observacao_orcamento" class="md-textarea form-control" rows="4"></textarea>
          
        </div>
			
			
		
			
		</div>

      </div>
      
	  
	  
    </div>
  </div>
</div>