<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Paginação</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/paginacao.js"></script>
	</head>
	<body>
		<div class="container">
			<h1>Paginação com php + Ajax
				<button class="btn btn-success btn-lg" id="atualizar">Atualizar &nbsp;<i class="glyphicon glyphicon-refresh"></i></button>
				<button class="btn btn-primary btn-lg" id="salvar">Salvar</button>
			</h1><br>
			<!--Resposta do Ajax-->
			<div id="resposta"></div>			
		</div>	
	</body>
</html>