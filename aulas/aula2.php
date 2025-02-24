<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário PHP</title>
</head>
<body>
  <h2>Digite seu nome:</h2>
  <form action="" method="POST">
    <input type="text" name="nome" placeholder="Seu nome:" required>
    <input type="number" name="ano_nascimento" placeholder="ano do seu nascimento" required>
    <button type="submit">Enviar</button>
  </form>
  
  <?php 
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nome'];
    $ano_nasc = $_POST['ano_nascimento'];
    $idade = date('Y') - $ano_nasc;
    echo "<h3>Olá, $name! seja bem vindo, sua idade é $idade.<h3>";
  };
  ?>
</body>
</html>