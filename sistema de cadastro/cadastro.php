<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cadastro de Colaborador</title>
</head>
<body>

<h1>Cadastro de Novo Colaborador</h1>
<form id="form1" name="form1" method="post" action="processaCadastro.php">

<br>
Nome completo:
<input name="nome1" type="text" id="nome1" placeholder="Digitar nome" required>
<br><br>

Idade:
<input name="idade2" type="text" id="idade2" placeholder="Ex.: 18" required>

<br><br>

Profissão:
<input name="profi3" type="text" id="profi3" placeholder="Ex.: Professor" required>

<br>

Salário pretendido:
<input name="sal4" type="text" id="sal4" placeholder="Ex.: 2000" required>

<br><br>

Experiência anterior:
<br>
<textarea name="experiencia5" id="experiencia5" rows="6" cols="40" placeholder="Digite sua experiência profissional" required></textarea>

<br>

<input name="Enviar" type="submit" id="enviar" value="Enviar">

</form>
</body>
</html>