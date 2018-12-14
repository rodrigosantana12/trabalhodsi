<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>VKM</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">VKM</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#cadastro">Cadastro</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#lista">Lista</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<header></header>
	<br><br>
	<section id="cadastro">
		<form method="get" action="envia.php">
		  <div class="form-group">
		    <label for="nome">Nome</label>
		    <input type="text" class="form-control" name="nome" placeholder="Maria">
		  </div>
		  <div class="form-group">
		    <label for="sobrenome">Sobrenome</label>
		    <input type="text" class="form-control" name="sobrenome" placeholder="Gadú">
		  </div>
		  <div class="form-group">
		    <label for="cpf">CPF</label>
		    <input type="number" class="form-control" name="cpf">
		  </div>
		  <div class="form-group">
		    <label for="rg">RG</label>
		    <input type="number" class="form-control" name="rg">
		  </div>
		  <div class="form-group">
		    <label for="nascimento">Nascimento</label>
		    <input type="date" class="form-control" name="nascimento">
		  </div>
		  <div class="form-group">
		    <label for="nascimento">Nº de Matrícula</label>
		    <input type="number" class="form-control" name="matricula">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email">
		  </div>
		  <div class="form-group">
		    <label for="curso">Curso</label>
		    <select class="form-control" name="curso">
		      <option>Técnico em Informática</option>
		      <option>Técnico em Agropecuária</option>
		      <option>Licenciatura em Computação</option>
		      <option>Engenharia Agronômica</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="turno">Turno</label>
		    <select class="form-control" name="turno">
		      <option>Matutino</option>
		      <option>Vespertino</option>
		      <option>Noturno</option>
		      <option>Integral</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="periodo">Período</label>
		    <input type="text" class="form-control" name="periodo">
		  </div>
		  <div class="form-group">
		    <label for="materias">Quantidade de Matérias</label>
		    <input type="number" class="form-control" name="materias">
		  </div>
		  <input type="submit" class="btn btn-primary" value="Enviar">
		</form>
	</section>

	<section id="lista">
		<?php
		/*
		    include('conexao.php');

		    try {
		        // Prepara a consulta a ser executada
		        $cmd = $pdo->prepare("SELECT * FROM alunos");
		        // Executa a consulta
		        $cmd->execute();    
		        // Percorre cada linha do resultado
		        while($result = $cmd->fetch(PDO::FETCH_OBJ)) {

		            $aluno[] = $result;
		        }
		    } catch(Exception $e) {
		        die($e->getMessage());
		    }
		    echo "<table class="table"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Nome</th><th scope="col">Sobrenome</th><th scope="col">CPF</th><th scope="col">RG</th><th scope="col">Nascimento</th><th scope="col">Matrícula</th><th scope="col">Email</th><th scope="col">Curso</th><th scope="col">Turno</th><th scope="col">Período</th><th scope="col">Matérias</th></tr></thead>";
		    foreach($aluno as $alunos) {
		        echo "<tr>";
		        	echo "<th scope=''>" . $alunos->nome . "</th>";
		            echo "<td>" . $alunos->nome . "</td>";
		            echo "<td>" . $alunos->sobrenome . "</td>";
		            echo "<td>" . $alunos->imc . "</td>";
		            echo "<td>
		                    <a href='http://localhost/cliente-servidor4/apagar.php?id=".$imc->id."'>Apagar</a>
		                    / <a href='http://localhost/cliente-servidor4/atualizar.php?id=".$imc->id."'>Atualizar</a>
		                </td>";
		        echo "</tr>";
		    }
		    echo "</table>";*/
		?>
	</section>

  </body>
</html>