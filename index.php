
<!DOCTYPE html>
<html>
<head>
	<title> Login | Ecos Control </title>
		<meta Charset="utf-8">


		<meta name ="charset"  content ="utf-"/>
		<meta name ="viewport" content ="widht-device-width, initial-scale-2.0"/>
		<title>Solicitar Requisição</title>
		<link href ="css/style.css" rel="stylesheet" type = "text/css"/>
		<link href ="css/bootstrap.min.css" rel="stylesheet" type = "text/css"/>
		<script type ="text/javascript" src = "js/jquery-3.4.1.min"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type ="text/javascript" src = "js/bootstrap.min.js"></script>
</head>


<body>
    
<form action= "processa_login.php"   method = "post">
	   
	 
	 <div id ="caixa_login">
					<a href = "index.php">
						<img src="img/logoecos.png" height="70px" align ="left">
					</a>
			<br><br><br><br><br><br>
			  <font color ="white"><div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" name ="email"id="exampleInputEmail1" aria-describedby="emailHelp">
				
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password"  name ="senha" class="form-control" id="exampleInputPassword1">
			  </div>
			  <br>
			  
			  <button type="submit" class="btn btn-primary">Entrar</button>
			</font>
			
		</div>
		
	  
</form>

		<div id ="fundo_index">
					<a href = "index.php">
						<img src="img/fundo.png" height="400px">
					</a>
			  
		</div>
		
</body>
</html>