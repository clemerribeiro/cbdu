
<form method ="POST" action ="processa_cotacao_hospedagem.php">
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Envie a Cotação</h4>
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

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form8">Observações</label>
		  <textarea type="text" id="form8" name="observacao" class="md-textarea form-control" rows="4"></textarea>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" value="Enviar Cotação" class="btn btn-primary"/>
      </div>
	  
	  
    </div>
  </div>
</div>