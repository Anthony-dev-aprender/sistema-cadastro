<?php

$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profi3"];
$salario = $_POST["sal4"];
$experiencia = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Confirmado</title>
</head>

<body>

<h1>Cadastro realizado com sucesso!</h1>

<p>Nome: <?php echo $nome; ?></p>

<p>Idade: <?php echo $idade; ?></p>

<p>Profissão: <?php echo $profissao; ?></p>

<p>Salário pretendido: R$ <?php echo $salario; ?></p>

<p>Experiência anterior: <?php echo $experiencia; ?></p>

<hr>

<h2>Mensagem</h2>

<p>
Olá, <?php echo $nome;?>
Recebemos seu cadastro para a profissão de
<?php echo $profissao; ?>.
Agradecemos por compartilhar sua experiência:
"<?php echo $experiencia; ?>" 
Em breve entraremos em contato!
</p>

<br>

<a href="cadastro.php">
    <button type="button">Voltar para o cadastro</button>
</a>

</body>
</html>