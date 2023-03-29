<?php
	$acao = 'recuperar';
	require 'controle_de_tarefas.php';
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GT- Gerenciador De Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="csss/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<script>
			function editar(id, txt_tarefa) {

				let form = document.createElement('form')
				form.action = 'controle_de_tarefas.php?acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'col-9 form-control'
				inputTarefa.value = txt_tarefa

				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				form.appendChild(inputTarefa)

				form.appendChild(inputId)

				form.appendChild(button)

				let tarefa = document.getElementById('tarefa_'+id)

				tarefa.innerHTML = ''

				tarefa.insertBefore(form, tarefa[0])

			}

			function remover(id) {
				location.href = 'todas_tarefas.php?acao=remover&id='+id;
			}

			function marcarRealizada(id) {
				location.href = 'todas_tarefas.php?acao=marcarRealizada&id='+id;
			}
		</script>
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
							<a class="nav-link active" aria-current="page" href="adicionar_tarefas.php"><i>Nova Tarefa</i></a>
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

		<div class="container app">
			<div class="row">
				<div class="col-sm-12">
					<div class="container pagina">
						<div class="row mt-3">
							<div class="col p-4">
								<h4>Todas tarefas</h4>
								<hr />

								<?php foreach($tarefas as $indice => $tarefa) { ?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
											<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<div class="btn-group">
												<button class="btn btn-danger" onclick="remover(<?= $tarefa->id ?>)">
													Remover
												</button>
												
												<?php if($tarefa->status == 'pendente') { ?>
												<button class="btn btn-primary" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')">
													Editar
												</button>

												<button class="btn btn-success" onclick="marcarRealizada(<?= $tarefa->id ?>)">
													Concluir
												</button>
												<?php } ?>
											</div>
										</div>
									</div>

								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>