<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 2</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="frase" placeholder="digite uma frase" required>
    >
    <button type="submit">Enviar</button>
  </form>

  <?php 
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST['frase'];
    $palavras = explode(" ", $frase);

    // O foreach é um loop de iteração no PHP, utilizado para percorrer arrays de forma simples e direta. Ele é bastante útil quando você quer trabalhar com todos os elementos de um array sem se preocupar com o índice de cada elemento.
    foreach ($palavras as $palavra) {
      echo $palavra . "<br>";  // Exibe a palavra seguida de uma quebra de linha
  }
  }
  ?>
</body>
</html>