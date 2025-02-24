<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 2</title>
</head>
<body>
  <form action="" method="POST">
    <input type="number" name="primo" placeholder="digite um número" required>
    >
    <button type="submit">Enviar</button>
  </form>

  <?php 
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['primo']); // Converte o valor para número inteiro
    $primo = true; // Variável para marcar se é primo

    if ($numero <= 1) {
        $primo = false;
    } elseif ($numero == 2) {
        $primo = true;
    } elseif ($numero % 2 == 0) {
        $primo = false;
    } else {
      for ($i = 3; $i * $i <= $numero; $i += 2) { // Testa apenas ímpares até a raiz quadrada
        if ($numero % $i == 0) {
            $primo = false;
            break; // Sai do loop assim que encontrar um divisor
        }
      }
    }

    if ($primo) {
        echo "<p>O número <strong>$numero</strong> é primo.</p>";
    } else {
        echo "<p>O número <strong>$numero</strong> não é primo.</p>";
    }
  }
  ?>
</body>
</html>