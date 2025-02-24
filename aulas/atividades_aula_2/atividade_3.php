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
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST['palavra'];
    $invertida = ""; // Variável para armazenar a string invertida

    // Percorre a string de trás para frente
    for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
        $invertida .= $palavra[$i]; // Adiciona cada caractere à string invertida
    }

    echo "<p>Palavra original: <strong>$palavra</strong></p>";
    echo "<p>Palavra invertida: <strong>$invertida</strong></p>";
  }
  ?>
</body>
</html>