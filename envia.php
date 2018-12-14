<?php
    if(isset($_GET['nome'])) 
    {
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];
        $rg = $_GET['rg'];
        $cpf = $_GET['cpf'];
        $nascimento = $_GET['nascimento'];
        $matricula = $_GET['matricula'];
        $email = $_GET['email'];
        $curso = $_GET['curso'];
        $turno = $_GET['turno'];
        $periodo = $_GET['periodo'];
        $materias = $_GET['materias'];
        

        include('conexao.php');
        
        try {
            $cmd = $pdo->prepare("INSERT INTO alunos(nome, sobrenome, rg, cpf, nascimento, matricula, email, curso, turno, periodo, materias) 
            VALUES (:nome, :sobrenome, :rg, :cpf, :nascimento, :matricula, :email, :curso, :turno, :periodo, :materias)");
            
            $cmd->bindValue(':nome', $nome);
            $cmd->bindValue(':sobrenome', $sobrenome);
            $cmd->bindValue(':rg', $rg);
            $cmd->bindValue(':cpf', $cpf);
            $cmd->bindValue(':nascimento', $nascimento);
            $cmd->bindValue(':matricula', $matricula);
            $cmd->bindValue(':email', $email);
            $cmd->bindValue(':curso', $curso);
            $cmd->bindValue(':turno', $turno);
            $cmd->bindValue(':periodo', $periodo);
            $cmd->bindValue(':materias', $materias);
            $cmd->execute();
        } 
        catch(Exception $e) 
        {
            die($e->getMessage());
        }
    }
?>
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
<link href="css/stylish-portfolio.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/envia.css">

<h1>Cadastro feito com sucesso!<h1>
<a href="index.php"><button type="button" class="btn btn-warning">Voltar</button></a>