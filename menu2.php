<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" rel="stylesheet">
<?php
if ($_SESSION["perfil_usuario"] == "Administrador"){
?> 
	<div class="nav-side-menu">
    <div class="brand"><a href = "admin.php">
						<img src="img/logoecos.png" height="70px" align ="">
					</a></div><br><br><br>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	
        <div class="menu-list">
			
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="admin.php">
                  <i class="fas fa-tachometer-alt fa-lg"></i> Home
                  </a>
                </li>
						 
				 <li data-toggle="collapse" data-target="#administracao" class="collapsed">
                  <a href="#"><i class="fab fa-fort-awesome-alt fa-lg"></i> Administração <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="administracao">
                  <li><a href="cadastra_usuario.php">Cadastrar Usuários</a></li>
                   <li><a href="lista_usuario.php">Listar Usuários</a></li>
                 
                </ul>

                <li data-toggle="collapse" data-target="#hotel" class="collapsed">
                  <a href="#"><i class="fab fa-fort-awesome-alt fa-lg"></i> Hotéis <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="hotel">
                  <li><a href="cadastra_requisicao_hospedagem.php">Adicionar Requisição</a></li>
                   <li><a href="lista_requisicao_hospedagem.php">Listar Requisições</a></li>
                 
                </ul>


                <li data-toggle="collapse" data-target="#aereo" class="collapsed">
                  <a href="#"><i class="fab fa-pagelines fa-lg"></i> Aéreo <span class="arrow"></span></a>
				  
                </li>
                <ul class="sub-menu collapse" id="aereo">
                  <li><a href="cadastra_requisicao_hospedagem.php">Adicionar Requisição</a></li>
                   <li><a href="lista_requisicao_hospedagem.php">Listar Requisições</a></li>
                  
                </ul>
				
				<li data-toggle="collapse" data-target="#terrestre" class="collapsed">
                  <a href="#"><i class="fab fa-user fa-lg"></i> Terrestre <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="terrestre">
                  <li><a href="cadastra_requisicao_hospedagem.php">Adicionar Requisição</a></li>
                   <li><a href="lista_requisicao_hospedagem.php">Listar Requisições</a></li>
                  
                </ul>
			
            </ul>
     </div>
</div>
<?php
}
else if ($_SESSION["perfil_usuario"] == "Solicitante"){
?>
<div class="nav-side-menu">
    <div class="brand"><a href = "admin.php">
						<img src="img/logoecos.png" height="70px" align ="">
					</a></div><br><br><br>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	
        <div class="menu-list">
			
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="admin.php">
                  <i class="fas fa-tachometer-alt fa-lg"></i> Home
                  </a>
                </li>
						 
                <li data-toggle="collapse" data-target="#hotel" class="collapsed">
                  <a href="#"><i class="fab fa-fort-awesome-alt fa-lg"></i> Hotéis <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="hotel">
                  <li><a href="cadastra_requisicao_hospedagem.php">Adicionar Requisição</a></li>
                   <li><a href="lista_requisicao_hospedagem.php">Listar Requisições</a></li>
                 
                </ul>


                <li data-toggle="collapse" data-target="#aereo" class="collapsed">
                  <a href="#"><i class="fab fa-pagelines fa-lg"></i> Aéreo <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="aereo">
                  <li><a href="cadastra_requisicao_hospedagem.php">Adicionar Requisição</a></li>
                   <li><a href="lista_requisicao_hospedagem.php">Listar Requisições</a></li>
                  
                </ul>
				
				<li data-toggle="collapse" data-target="#terrestre" class="collapsed">
                  <a href="#"><i class="fab fa-user fa-lg"></i> Terrestre <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="terrestre">
                  <li><a href="cadastra_requisicao_hospedagem.php">Adicionar Requisição</a></li>
                   <li><a href="lista_requisicao_hospedagem.php">Listar Requisições</a></li>
                  
                </ul>
			
            </ul>
     </div>
</div>
<?php
}
?>

