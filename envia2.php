<?php
    // Verificamos se o peso foi passado na requisição HTTP
    if(isset($_GET['nome'])) {
        // Organizamos os valores passados em variáveis locais
        $peso = $_GET['peso'];
        $altura = $_GET['altura'] / 100;
        $imc = $peso / ($altura * $altura);
        echo "<h1>IMC: " . $imc . "</h1>";

        include('conexao.php');
        
        try {
            $cmd = $pdo->prepare("INSERT INTO imc(peso, altura, imc) 
            VALUES (:peso, :altura, :imc)");
            // Vincula o valor das variáveis aos termos usados na consulta acima
            $cmd->bindValue(':peso', $peso);
            $cmd->bindValue(':altura', $altura);
            $cmd->bindValue(':imc', $imc);
            $cmd->execute();
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
?>
<h1>Cadastro feito com sucesso!<h1>
<button type="button" class="btn btn-warning"><a href="index.php">Voltar</a></button>