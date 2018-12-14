<?php
include('conexao.php');
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT nome, sobrenome, rg, cpf, nascimento, matricula, email, curso, turno, periodo, materias FROM alunos");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
 
<html>
    <head>
    <title>Exemplo</title>
</head>
<body>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?=$linha['nome']?> / <?=$linha['telefone']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>