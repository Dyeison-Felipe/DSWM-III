<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 1</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="frase" placeholder="digite uma frase:" required>
    >
    <button type="submit">Enviar</button>
  </form>
  <?php 
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST['frase'];
    $vogais = ['a','e','i', 'o', 'u'];
    $frase_minuscula = strtolower($frase);

    $novaFrase = str_replace($vogais, "*", $frase_minuscula);

    echo $novaFrase;

  };
  ?>
</body>
</html>