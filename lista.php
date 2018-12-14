<?php
  include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KVM</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">

  </head>

  <body id="inicio">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#inicio">KVM</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#inicio">Início</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#lista">Lista</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="index.php">Cadastro</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">Bem-vindo(a)</h1>
        <h3 class="mb-5">
          <em>Biblioteca de dados de alunos</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#lista">Lista</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- Cadastro -->
    <section class="content-section bg-light" id="lista">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Lista</h2>
            <p class="lead mb-5">Aqui estão os dados dos alunos já cadastrados
          </div>
        </div>
      </div>
        <?php
            include('conexao.php');

            try {
                // Prepara a consulta a ser executada
                $cmd = $pdo->prepare("SELECT * FROM alunos");
                // Executa a consulta
                $cmd->execute();
                $talunos = [];
                // Percorre cada linha do resultado
                while($result = $cmd->fetch(PDO::FETCH_OBJ))
                {
                    // Armazena o resultado de cada linha em uma nova posição do array $imcs
                    $talunos[] = $result;
                }
            } catch(Exception $e) {
                die($e->getMessage());
            }
            echo "<table class='table table-bordered'><thead><th scope='col'>#</th><th scope='col'>Nome</th><th scope='col'>Sobrenome</th><th scope='col'>CPF</th><th scope='col'>RG</th><th scope='col'>Nascimento</th><th scope='col'>Matrícula</th><th scope='col'>Email</th><th scope='col'>Curso</th><th scope='col'>Turno</th><th scope='col'>Período</th><th scope='col'>Materiais</th></thead>";
            // Percorre cada posição do array $imcs chamando-as apenas de $imc
            foreach($talunos as $alunos)
            {
                echo "<tr>";

                    echo "<td scope='row'>" . $alunos->id . "</td>";
                    echo "<td>" . $alunos->nome . "</td>";
                    echo "<td>" . $alunos->sobrenome . "</td>";
                    echo "<td>" . $alunos->cpf . "</td>";
                    echo "<td>" . $alunos->rg . "</td>";
                    echo "<td>" . $alunos->nascimento . "</td>";
                    echo "<td>" . $alunos->matricula . "</td>";
                    echo "<td>" . $alunos->email . "</td>";
                    echo "<td>" . $alunos->curso . "</td>";
                    echo "<td>" . $alunos->turno . "</td>";
                    echo "<td>" . $alunos->periodo . "</td>";
                    echo "<td>" . $alunos->materias . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </section>

    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">Ainda não cadastrado?</h2>
        <a class="btn btn-primary btn-xl" href="index.php">Cadastre-se</a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>