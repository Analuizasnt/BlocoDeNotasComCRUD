<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GT- Gerenciador De Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="csss/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					GT- GERENCIADOR DE TAREFAS
				</a>
			</div>
		</nav>
		
		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" href="adicionar_tarefas.php" aria-current="page" href="adicionar_tarefas.php"><i>Nova Tarefa</i></a>
						</li>
						<li class="nav-item">
							<a href="index.php" class="nav-link"><i>Tarefas Pendentes</i></a>
						</li>
						<li class="nav-item">
							<a href="todas_tarefas.php" class="nav-link"><i>Todas Tarefas</i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Tarefa adicionada com sucesso!</h5>
			</div>
		<?php } ?>

		<div class="container app">
			<div class="row mt-3">
				<div class="col-md-9">
					<div class="container pagina">
						<div class="row p-4">
							<div class="col">
								<h4>Adicionar nova tarefa</h4>
								<hr/>

								<form method="post" action="controle_de_tarefas.php?acao=inserir">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Ir ao mercado">
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>