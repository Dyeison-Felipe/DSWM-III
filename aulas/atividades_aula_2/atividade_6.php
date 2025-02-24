<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 2</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="palavra" placeholder="digite uma palavra" required>
    >
    <button type="submit">Enviar</button>
  </form>

  <?php 
  // função para verificar se a palavra de trás para frente é a mesma
  function isPalindrome($palavra) {
    // Está função remover espaços e converter para minúsculas
    $palavra = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $palavra));

    // Inverter a palavra
    $invertida = strrev($palavra);

    // Comparar a palavra original com a invertida
    if ($palavra === $invertida) {
        return true;
    } else {
        return false;
    }
}
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST['palavra'];
    if (isPalindrome($palavra)) {
      echo "$palavra é um palíndromo!";
  } else {
      echo "$palavra não é um palíndromo!";
  }
  }
  ?>
</body>
</html>